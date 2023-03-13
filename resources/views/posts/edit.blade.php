<x-layout>
<div class="container mx-auto py-12">
    <h1>Aqui se mostrara el index su edicion de post</h1>
     {{-- 1° FORMA - MOSTRANDO LOS ERRORES DE VALIDACION SI EN CAOS EXISTEN (lo mostrara arriba de mi formulario) --}}
     @if ($errors->any())
         <ul>
            @foreach ($errors->all() as $error )
                <li>{{ $error }}</li>
            @endforeach
         </ul>
    @endif



    <form action="{{ route('posts.update', $post) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="title">Titulo</label>
            <br>
            <input type="text" name="title" id="title" value="{{ old('title', $post->title) }}"> <!--RECORDAR QUE CUANDO ESTOY USANDO OLD Y SI EN CASO NO ME TRAE NADA QUE ME CONSERVE EL VALOR QUE TENIA ANTES POR ESO LO PONGO COMO SEGUNDO PARAMETRO-->
        </div>

        <div>
            <label for="slug">Slug</label>
            <br>
            <input type="text" name="slug" value="{{ old('slug', $post->slug) }}" id="slug">
        </div>

        <div>
            <label for="body">Contenido</label>
            <br>
            <textarea name="body" id="body" cols="30" rows="10" >{{ old('body', $post->body) }}</textarea>
        </div>

        {{-- categoria --}}
        <div>
            <label for="category_id">Categorias</label>
            <br>
            <select name="category_id" id="category_id">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" @selected(old('category_id', $post->category_id) == $category->id )>{{ $category->name }}</option> <!--CON SELECTED LLAMO POR DEFECTO A LA OPCION SELECCIONADA EN MI BASE DE DATOS-->
                @endforeach
            </select>
            <br>
        </div>

        {{-- usuario --}}
        <div>
            <label for="user_id">Usuarios</label>
            <br>
            <select name="user_id" id="user_id">
                @foreach ($users as $user)
                    <option value="{{ $user->id }}" @selected(old('user_id', $post->user_id)==$user->id)>{{ $user->name }}</option>
                @endforeach
            </select>
            <br>
        </div>

        <div>
            <button type="submit">Enviar</button>
        </div>
    </form>
</div>
</x-layout>
