<?php

declare(strict_types=1);

namespace Spacetab\RdbBridge;

use Spacetab\Configuration\Configuration;
use Spacetab\DbConfig\Packer\KeyValue;
use Spacetab\DbConfig\Reader;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;

trait ReadConfigTrait
{
    private Reader $dbConfig;

    /**
     * ReadConfigTrait constructor.
     *
     * @param string|null $name
     * @throws \Spacetab\Configuration\Exception\ConfigurationException
     */
    public function __construct(?string $name = null)
    {
        parent::__construct($name);

        $conf = Configuration::auto();
        $conf->load();

        $reader = new Reader($conf->get('db', []));
        $reader->addPacker('pgsql', new KeyValue\Postgres());

        $this->dbConfig = $reader;
    }

    public function configure(): void
    {
        parent::configure();

        $this->addOption('connection-name', 'k', InputOption::VALUE_OPTIONAL, 'Connection name.', 'default');
    }

    protected function getConnectionString(InputInterface $input): string
    {
        return $this->dbConfig->getConnectionString(
            $input->getOption('connection-name')
        );
    }
}
