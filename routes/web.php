<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

/*
Route::post('prueba2', function () {
    return "hola desde prueba2";
});

Route::get('cursos/informacion', function(){
    return "aqui podras encontratr toda la informacion";
});
*/
/*
//AQUI DEFINO EL ACCESO A RUTAS PERO QUE EL PARAMETRO TENGA SOLO ACCESO A NUMEROS OSEA QUE EL PARAMETRO SEA NUMEROS POR ESO PNGO E WHERE
Route::get('/cursos/{curso}', function($curso){
    return $curso;
})->where('curso' , '[1-9]+');


//METODO PARA QUE ME ACEPTE PARAMETROS SOLO LETRA
Route::get('/cursos/{curso}', function($curso){
    return $curso;
})->whereAlpha('curso');
*/
//METODO PARA QUE ME ACEPTE PARAMETROS SOLO NUMEROS Y LETRAS
/*
Route::get('/cursos/{curso}', function($curso){
    return $curso;
})->whereAlphaNumeric('curso');
*/

//EN CASO QUERRAMOS RECIBIR UN PARAMETRO PERO SETEARLO GLOBALMENTE PARA NO ESTAR REPITIENDOLO EN CADA PETICION QUE HAGAMOS EN UNA RUTA SINO SETEARLO UNA VEZ NOMA
/*
Route::get('/cursos/{id}' , function($curso){
    return $curso;
});
*/
/*
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/create', [PostController::class , 'create'])->name('posts.create');
Route::post('/posts' , [PostController::class , 'store'])->name('posts.store');
Route::get('/posts/{post}', [PostController::class , 'show'])->name('posts.show');
Route::post('/posts/{post}/edit' , [PostController::class , 'edit'])->name('posts.edit');
Route::patch('/post/{post}' , [PostController::class , 'update'])->name('posts.update');
Route::delete('/posts/{post}' , [PostController::class , 'destroy'])->name('posts.destroy');
*/

//METODO RESOURCE
Route::resource('posts', PostController::class);

//PARA DECIRLE CUAL DEBE SER EL NOMBRE DE MI RUTA ES DECIR LO QUE VA route('nombreruta.index') lo que cambiare es el nombreruta
/*route::resource('articulos', PostController::class)->names('posts');*/

//PARA CAMBIAR EL PARAMETRO DE LA RUTA Y PONERLA COMO DESEO ES DECIR  articulos/{parametro} seteare el parametro es decir le dire como quiero que se llame
/*
route::resource('articulos', PostController::class)
    ->parameters([
        'articulos' =>'post'
    ])
    ->names('posts');

*/
//EN CASO QUE QUIERA USAR EL RESOURCE Y SOLO SE USE CIERTOS METODOS
/*
route::resource('posts', PostController::class)->only([
        'index','show'
]);
*/
//METODO EN CASO QUIERA EXCLUIR UNA RUTA
/*route::resource('posts', PostController::class)->except([
    'destroy'
]);
*/

//PARA EL ABOUTCONTROLLER (aqui solo uso un controlador de tipo INVOKE que solo hara caso a una funcion nada mas)
//route::get('/about', AboutController::class);
