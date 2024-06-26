<?php

namespace JeffersonSimaoGoncalves\LaravelAsaas\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \JeffersonSimaoGoncalves\LaravelAsaas\LaravelAsaas
 */
class LaravelAsaas extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \JeffersonSimaoGoncalves\LaravelAsaas\LaravelAsaas::class;
    }
}
