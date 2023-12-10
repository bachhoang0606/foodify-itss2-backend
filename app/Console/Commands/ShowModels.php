<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class ShowModels extends Command
{
    protected $signature = 'model:show';
    protected $description = 'Show information about all models in the app';

    public function handle()
    {
        $modelsPath = app_path('Models');
        $models = collect(File::files($modelsPath))
            ->map(fn ($file) => pathinfo($file)['filename'])
            ->filter(fn ($filename) => class_exists("App\\Models\\{$filename}"));

        $this->info('Models in the app:');
        $this->table(['Model'], $models->map(fn ($model) => ["App\\Models\\{$model}"])->toArray());
    }
}
