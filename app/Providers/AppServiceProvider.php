<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
    public function boot(): void
    {
            // como pasarle un valor a multiples vistas pero no a todas , ESO SE HACE CON VIEWCOMPOSER (esto esta ubicado en app / View / Composers / PostComposer.php)
            View::composer(['posts.index' , 'posts.create','posts.show'], 'App\View\Composers\PostComposer');

            //de esta forma todas las vistas acceden a esta variable de pruebas
            View::share('prueba' , 'este es un mensaje de prueba');




    }
}
