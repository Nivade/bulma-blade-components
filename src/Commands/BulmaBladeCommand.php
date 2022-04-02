<?php

namespace Nvade\BulmaBlade\Commands;

use Illuminate\Console\Command;

class BulmaBladeCommand extends Command
{
    public $signature = 'bulma-blade-components';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
