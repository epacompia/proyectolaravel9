<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return "aqui se mostrara el index";
    }

    public function create(){
        return "aqui se mostrara formulario para crear";
    }

    public function store(){
        return "aqui se procesara el post";
    }

    public function show($post){
        return "aqui se mostrara el post $post";
    }

    public function edit($post){
        return "aqui se mostrara el formlario para editar el post";
    }

    public function update($post){
        return "aqui se acutlizara el $post";
    }

    public function destroy($post){
        return "aqui se eliminara el $post";
    }
}
