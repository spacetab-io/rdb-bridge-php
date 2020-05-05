<?php

declare(strict_types=1);

namespace Spacetab\Tests\RdbBridge;

use PHPUnit\Framework\TestCase;
use Spacetab\RdbBridge\MigrateDownCommand;
use Symfony\Component\Console\Input\InputInterface;

class ReadConfigTest extends TestCase
{
    public function testHowConfigReadsFromConfigurationOnDisk()
    {
        putenv('CONFIG_PATH='.__DIR__ . '/../tests/configuration');

        $command = new class extends MigrateDownCommand {
            public function getConnectionString(InputInterface $input): string {
                return parent::getConnectionString($input);
            }
        };

        $input = $this->createMock(InputInterface::class);
        $input
            ->expects($this->once())
            ->method('getOption')
            ->with('connection-name')
            ->willReturn('default');

        $string = $command->getConnectionString($input);

        $this->assertSame('host=127.0.0.1 port=5432 user=rdbBridgeConfigUser dbname=rdbBridgeConfigDbName', $string);
    }
}
