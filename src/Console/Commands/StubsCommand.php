<?php

namespace Porifa\Stubs\Console\Commands;

use Illuminate\Console\Command;

class StubsCommand extends Command
{
    public $signature = 'Stubs';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}