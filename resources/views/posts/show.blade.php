<x-layout>
<div class="container mx-auto py-12">
        <h1>{{$post->title}}</h1>
        <p>{{$post->body}}</p>
        <a href="{{route('posts.edit', $post->id)}}">Editar post</a>

        {{-- FORMULARIO PRA BORRAR EL REGISTRO --}}
        <form action="{{ route('posts.destroy', $post) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit">Eliminar Post</button>
        </form>
</div>
</x-layout>
