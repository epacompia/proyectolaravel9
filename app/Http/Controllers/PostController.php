<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){

        $posts=Post::paginate(7);  //LLAMO A PAGINACION PARA VER LOS RESULTADOS POR PAGINAS, RECUERDEN QUE EN LA VISTA DEL INDEX DONDE ESTA TODO ESTOS REGISTROS DEBO LLAMAR A {{$posts->links()}}



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

        //$data=$request->all();
        //return $data;

        //Interactuando con el modelo Post
        //1° FORMA  DE GUARDARADO
        /*
        $post=new Post();
        $post->title = $request->input('title');
        $post->slug = $request->slug;
        $post->body = $request->body;
        $post->category_id = $request->category_id;
        $post->user_id = $request->user_id;

        $post->save();
        return "el post se creo con exito";
        */

        //2° FORMA DE GUARDADO (ASIGNACION MASIVA SI EN CASO SON MUCHOS CAMPOS A GUARDAR) obs: e esta forma debemos colcor en el MOdelo Post los campos a enviar dentro de $fillable
        $post= Post::create($request->all());
        
        //Redirecciono al edit
        return redirect()->route('posts.edit',$post->id);

    }

    public function show(Post $post){ //En caso quiera usar model bainding , aqui como parametro coloco la clase Post, y con eso me evito usar el findOrFail()
        //return view('posts.show', ['post' => $post]); //primera forma de pasar parametros
        //return view('posts.show', compact('post'));  //segunda forma
        
        //1° Forma
        /*
        $post=Post::where('id', $post)->first();
        return $post->title;
        */

        //2° Forma Podria haber usado Find pero ese metodo si falla o no encuentra el valor , no me devolvera ni un mensaje de pagina no encontrada, en cambio failOrFail si me devuelve un 404
        //$post=Post::findOrFail($post);
        return view('posts.show', compact('post'));
        //return view('posts.show')->with('post', $post); //tercera forma de pasarle un parametro
    }

    public function edit(Post $post){ //Uso model bainging por eso aqui coloco el modelo y evito usar el FinOrFail

        //$post= Post::findOrFail($post);

        $categories=Category::all();
        $users=User::all();
        return view('posts.edit', compact('post','categories','users'));
    }

    public function update(Request $request, Post $post){ //Aqui uso el model baingin por eso aqui coloco la clase Post
         
        /*
        //1° busco el post que recibo, tener en cuenta que como parametro le agrego el Request que recibo del formulario
        $post = Post::findOrFail($post);
        //llamo a todos los campos y al final los guardo con save()
        $post->title=$request->title;
        $post->slug=$request->slug;
        $post->body=$request->body;
        $post->category_id=$request->category_id;
        $post->user_id=$request->user_id;
        $post->save();
        return "el post se actualizo";
        */

        // 2° Forma (en caso tengo muchos campos que actualizar)
        //$post = Post::findOrFail($post); 
        $post->update($request->all());


        //Redireccion
        return redirect()->route('posts.edit', $post);
    }

    public function destroy(Post $post){ //aqui uso el model BAINGIND por eso le pongo el modelo Post
            //$post=Post::findOrFail($post);
            $post->delete();

            //Redireccion
            return redirect()->route('posts.index');
    }
}
