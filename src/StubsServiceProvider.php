<?php

namespace Porifa\Stubs;

use Porifa\LaravelPackageKit\Package;
use Porifa\LaravelPackageKit\PackageServiceProvider;
use Porifa\Stubs\Console\Commands\StubsPublishCommand;

class StubsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-stubs')
            ->hasCommands(StubsPublishCommand::class);
    }
}
