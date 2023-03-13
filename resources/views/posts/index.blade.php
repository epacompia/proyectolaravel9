
{{-- PARA EL CUERPO DEL DOCUMENTO --}}
<x-layout>

<div class="container mx-auto py-12">
{{-- PARA EL TITULO DE LA PAGINA USO EL SLOT --}}
    <x-slot name="title">
        Post Inicio
    </x-slot>

        {{-- PARA INSERTAR META en el head de mi documento --}}
    <x-slot name="meta">
        <meta name="description" content="listado de post">
    </x-slot>

    <h1>Aqui se mostrara el listado de post</h1>

    <a href="{{route('posts.create')}}">Crear nuevo Post</a>
    <ul>
        @forelse ($posts as $post)
            <li>
                {{-- aqui para usar rutas amigables, usare en el modelo Post una fucion llamada getRouteKeyName que recibe como parametro el campo de la tabla posts por el cual quiero que se identifique al registro en el url, esto servira para que los buscadores lo eliminen mas rapido --}}
                <a href="{{route('posts.show', $post)}}">{{$post->title}}</a>
            </li>
        @empty
            <li>No hay post</li>
        @endforelse
    </ul>
    {{$posts->links()}}
</div>

</x-layout>

