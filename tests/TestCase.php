<?php

namespace JeffersonSimaoGoncalves\LaravelAsaas\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use JeffersonSimaoGoncalves\LaravelAsaas\LaravelAsaasServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'JeffersonSimaoGoncalves\LaravelAsaas\\LaravelAsaas\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            LaravelAsaasServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_laravel-asaas_table.php.stub';
        $migration->up();
        */
    }
}
