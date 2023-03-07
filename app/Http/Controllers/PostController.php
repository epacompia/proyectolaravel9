<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){

        $posts=[
            [
                'id' => 1,
                'title' => 'Post 1',
                'content' => 'Content 1'
            ],
            [
                'id' => 2,
                'title' => 'Post 2',
                'content' => 'Content 2'
            ],
            [
                'id' => 3,
                'title' => 'Post 3',
                'content' => 'Content 3'
            ],
        ];



        return view('posts.index', compact('posts'));
    }

    public function create(){
        return view('posts.create');
    }

    public function store(){
        return "aqui se procesara el post";
    }

    public function show($post){
        //return view('posts.show', ['post' => $post]); //primera forma de pasar parametros
        //return view('posts.show', compact('post'));  //segunda forma
        return view('posts.show')->with('post', $post); //tercera forma de pasarle un parametro
    }

    public function edit($post){
        return view('posts.edit');
    }

    public function update($post){
        return "aqui se acutlizara el $post";
    }

    public function destroy($post){
        return "aqui se eliminara el $post";
    }
}
