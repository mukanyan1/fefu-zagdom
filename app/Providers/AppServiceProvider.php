<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
     $loader = new/Twig/Loader/FilesystemLoader();
     $loader-> addPath(base_path(). '/resources/components','components');
     $loader-> addPath(base_path(). '/resources/layouts','Layouts');
     \Twig:: getLoader()->addLoader($Loader);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
