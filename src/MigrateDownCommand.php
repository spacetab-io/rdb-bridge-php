<?php

declare(strict_types=1);

namespace Spacetab\RdbBridge;

class MigrateDownCommand extends \Spacetab\Rdb\Console\MigrateDownCommand
{
    use ReadConfigTrait;
}
