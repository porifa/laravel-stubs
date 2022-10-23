<?php

namespace Porifa\Stubs\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use Porifa\Stubs\StubsServiceProvider;

class TestCase extends Orchestra
{
    protected function getPackageProviders($app)
    {
        return [
            StubsServiceProvider::class,
        ];
    }
}
