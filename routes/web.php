<?php

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
});

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

Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/create', [PostController::class , 'create']);
Route::post('/posts' , [PostController::class , 'store']);
Route::get('/posts/{post}', [PostController::class , 'show']);
Route::post('/posts/{post}/edit' , [PostController::class , 'edit']);
Route::patch('/post/{post}' , [PostController::class , 'update']);
Route::delete('/posts/{post}' , [PostController::class , 'destroy']);
