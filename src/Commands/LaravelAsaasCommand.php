<?php

namespace JeffersonSimaoGoncalves\LaravelAsaas\LaravelAsaas\Commands;

use Illuminate\Console\Command;

class LaravelAsaasCommand extends Command
{
    public $signature = 'laravel-asaas';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
