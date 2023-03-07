
{{-- PARA EL CUERPO DEL DOCUMENTO --}}
<x-layout>

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
                <a href="{{route('posts.show',$post['id'])}}">{{$post['title']}}</a>
            </li>
        @empty
            <li>No hay post</li>
        @endforelse
    </ul>

</x-layout>

