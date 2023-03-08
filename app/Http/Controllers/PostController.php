<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
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

        $categories=Category::all();
        $users=User::all();

        return view('posts.create',compact('categories','users'));
    }

    public function store(Request $request){
        //return $request->ip(); //retorna la ip del usuario que hizo la peticion
        //return $request->host(); //me retorna el host
        //return $request->input('title');
        //return $request->path();
        //return $request->all(); este me imprime todos los campos que estoy enviando
        //return "aqui se procesara el post";
        /*colecciones, se puede devolver como si fuera una coleccion
        $data= $request->collect();
        return $data->first();
        */
        //$data= $request->only('title', 'slug', 'body'); //en caso solo deseo que me traiga unos datos en especifico
        //$data= $request->except('title'); //metodo que me permite que no me retorne algunos campos en especifico
        //return $data;

        $data=$request->all();
        return $data;

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
