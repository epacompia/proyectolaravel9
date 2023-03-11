<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
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

            //EN CASO QUIERA USAR BOOTSTRAP POR DEFECTO EN VES DE TAILWIND, PRIMERO EN EL layout.blade.php incluyo el css y js de javascript y leugo vengo aqui al AppServiceProvider para setear el boostrap
            //En caso quiera usar una version especifica de bootstrap uso useBootrapFive si quiero al version 5
            //Paginator::useBootstrap();
            Paginator::useBootstrapFive();
    }
}
