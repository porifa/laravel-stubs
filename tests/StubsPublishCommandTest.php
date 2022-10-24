<?php

use Illuminate\Support\Facades\File;

it('can public stubs', function () {
    $targetStubsPath = $this->app->basePath('stubs');

    File::deleteDirectory($targetStubsPath);

    $this->artisan('porifa-stubs:publish')->assertExitCode(0);

    $stubPath = __DIR__ . '/../stubs/model.stub';

    $publishedStubPath = $targetStubsPath . '/model.stub';

    $this->assertFileEquals($stubPath, $publishedStubPath);
});
