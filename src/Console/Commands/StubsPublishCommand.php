<?php

namespace Porifa\Stubs\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Console\ConfirmableTrait;
use Illuminate\Filesystem\Filesystem;

class StubsPublishCommand extends Command
{
    use ConfirmableTrait;

    public $signature = 'porifa-stubs:publish {--force : Overwrite any existing files}';

    public $description = 'Publish all stubs customization by porifa';

    public $stubsPath;

    public function handle()
    {
        $this->stubsPath = $this->laravel->basePath('stubs');

        if (! $this->confirmToProceed()) {
            return 1;
        }

        if (! is_dir($this->stubsPath)) {
            (new Filesystem())->makeDirectory($this->stubsPath);
        }

        $files = glob(__DIR__ . '/../../../stubs/*.stub');

        $published = $this->publish($files);

        $this->components->info("Stubs published {$published} /" . count($files));
    }

    public function publish(array $files): int
    {
        $published = 0;

        foreach ($files as $file) {
            $targetFile = $this->targetFile($file);

            if (! file_exists($targetFile) || $this->option('force')) {
                $published++;
                file_put_contents($targetFile, file_get_contents($file));
            }
        }

        return $published;
    }

    public function targetFile($file): string
    {
        return $this->stubsPath . '/' . substr($file, strpos($file, '../stubs/') + 9);
    }
}
