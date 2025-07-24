<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\File;



class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */

public function boot()
{
    $source = storage_path('app/public');
    $destination = public_path('storage');

    if (File::exists($source)) {
        File::ensureDirectoryExists($destination);

        $files = File::allFiles($source);
        foreach ($files as $file) {
            $targetPath = $destination . '/' . $file->getRelativePathname();
            File::ensureDirectoryExists(dirname($targetPath));
            File::copy($file->getPathname(), $targetPath);
        }
    }
}
}
