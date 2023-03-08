<x-layout>
    <h1>Aqui se mostrara para crear de post</h1>
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        
        <div>
            <label for="title">Titulo</label>
            <br>
            <input type="text" name="title" id="title">
        </div>

        <div>
            <label for="slug">Slug</label>
            <br>
            <input type="text" name="slug" id="slug">
        </div>

        <div>
            <label for="body">Contenido</label>
            <br>
            <textarea name="body" id="body" cols="30" rows="10"></textarea>
        </div>

        {{-- categoria --}}
        <div>
            <label for="category_id">Categorias</label>
            <br>
            <select name="category_id" id="category_id">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
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
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
            <br>
        </div>

        <div>
            <button type="submit">Enviar</button>
        </div>
    </form>
</x-layout>
