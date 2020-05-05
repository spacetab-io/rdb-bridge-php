<?php

declare(strict_types=1);

namespace Spacetab\RdbBridge;

// @codeCoverageIgnore
class MigrateInstallCommand extends \Spacetab\Rdb\Console\MigrateInstallCommand
{
    use ReadConfigTrait;
}
