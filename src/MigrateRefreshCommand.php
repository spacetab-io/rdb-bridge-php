<?php

declare(strict_types=1);

namespace Spacetab\RdbBridge;

// @codeCoverageIgnore
class MigrateRefreshCommand extends \Spacetab\Rdb\Console\MigrateRefreshCommand
{
    use ReadConfigTrait;
}
