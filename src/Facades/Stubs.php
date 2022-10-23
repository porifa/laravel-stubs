<?php

namespace Porifa\Stubs\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Porifa\Stubs\Stubs
 */
class Stubs extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Porifa\Stubs\Stubs::class;
    }
}
