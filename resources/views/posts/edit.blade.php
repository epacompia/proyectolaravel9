<x-layout>
<div class="container mx-auto py-12">
    <h1>Aqui se mostrara el index su edicion de post</h1>

    <form action="{{ route('posts.update', $post->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div>
            <label for="title">Titulo</label>
            <br>
            <input type="text" name="title" id="title" value="{{ $post->title }}">
        </div>

        <div>
            <label for="slug">Slug</label>
            <br>
            <input type="text" name="slug" value="{{ $post->slug }}" id="slug">
        </div>

        <div>
            <label for="body">Contenido</label>
            <br>
            <textarea name="body" id="body" cols="30" rows="10" >{{ $post->body }}</textarea>
        </div>

        {{-- categoria --}}
        <div>
            <label for="category_id">Categorias</label>
            <br>
            <select name="category_id" id="category_id">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" @selected($post->category_id == $category->id )>{{ $category->name }}</option> <!--CON SELECTED LLAMO POR DEFECTO A LA OPCION SELECCIONADA EN MI BASE DE DATOS-->
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
                    <option value="{{ $user->id }}" @selected($post->user_id==$user->id)>{{ $user->name }}</option>
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
