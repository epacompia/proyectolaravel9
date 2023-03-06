<?php

namespace App\View\Composers;
use Illuminate\View\View;

class PostComposer
{
    public function compose(View $view){
        $view->with('prueba2', 'estes es un mensaje de prueba ultimito 2');
    }
}
