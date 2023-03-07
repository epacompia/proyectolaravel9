<x-layout>
    <h1>Aqui se mostrara el index su detalle de post: {{$post}}</h1>
   <a href="{{route('posts.edit', $post)}}">Editar post</a>
</x-layout>
