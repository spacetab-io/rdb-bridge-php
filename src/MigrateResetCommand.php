<?php

declare(strict_types=1);

namespace Spacetab\RdbBridge;

// @codeCoverageIgnore
class MigrateResetCommand extends \Spacetab\Rdb\Console\MigrateResetCommand
{
    use ReadConfigTrait;
}
