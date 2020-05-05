<?php

declare(strict_types=1);

namespace Spacetab\RdbBridge;

// @codeCoverageIgnore
class MigrateStatusCommand extends \Spacetab\Rdb\Console\MigrateStatusCommand
{
   use ReadConfigTrait;
}
