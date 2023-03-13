<x-layout>
    

<div class="container mx-auto py-12">
    <h1>Aqui se mostrara para crear de post</h1>

    {{-- 1° FORMA - MOSTRANDO LOS ERRORES DE VALIDACION SI EN CAOS EXISTEN (lo mostrara arriba de mi formulario) --}}
    {{-- @if ($errors->any())
         <ul>
            @foreach ($errors->all() as $error )
                <li>{{ $error }}</li>
            @endforeach
         </ul>
    @endif --}}



    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        
        <div>
            <label for="title">Titulo</label>
            <br>
            <input type="text" name="title" id="title" class="form-control" @error('title') border-danger @enderror value="{{ old('title') }}" >
            {{-- 2° Forma de validacion pero en los campos, esto va debajo del input del campo --}}
            @error('title')
                <div>
                    <small class="text-danger">{{ $message }}</small>
                </div>
            @enderror

        </div>

        <div>
            <label for="slug">Slug</label>
            <br>
            <input type="text" name="slug" id="slug" class="form-control" value="{{ old('slug') }}" @error('slug') border-danger @enderror>
            {{-- 2° Forma de validacion pero en los campos, esto va debajo del input del campo --}}
            @error('slug')
                <div>
                    <small class="text-danger">{{ $message }}</small>
                </div>
            @enderror
        </div>

        <div>
            <label for="body">Contenido</label>
            <br>
            <textarea name="body" id="body" cols="30" rows="10" class="form-control"  @error('body') border-danger @enderror>{{ old('body') }}</textarea>
            {{-- 2° Forma de validacion pero en los campos, esto va debajo del input del campo --}}
            @error('body')
                <div>
                    <small class="text-danger">{{ $message }}</small>
                </div>
            @enderror
        </div>

        {{-- categoria --}}
        <div>
            <label for="category_id">Categorias</label>
            <br>
            <select name="category_id" id="category_id" class="form-control">
                @foreach ($categories as $category)
                    <option @selected(old('category_id') == $category->id) value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
            <br>
        </div>

        {{-- usuario --}}
        <div>
            <label for="user_id">Usuarios</label>
            <br>
            <select name="user_id" id="user_id" class="form-control">
                @foreach ($users as $user)
                    <option @selected(old('user_id')==$user->id) value="{{ $user->id }}">{{ $user->name }}</option>
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
