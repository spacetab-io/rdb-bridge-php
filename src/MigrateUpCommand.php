<?php

declare(strict_types=1);

namespace Spacetab\RdbBridge;

// @codeCoverageIgnore
class MigrateUpCommand extends \Spacetab\Rdb\Console\MigrateUpCommand
{
    use ReadConfigTrait;
}
