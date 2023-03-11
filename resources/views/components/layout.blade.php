<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- En caso quiera cambiar la metadata --}}
    @isset($meta)
        {{$meta}}
    @endisset


    <title>{{$title ?? 'RunaSystem'}}</title>  <!--En caso de que le coloque ?? significa que es para que me tome por valor de defecto RunaSystem-->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

    <nav class="container mx-auto">
        <ul>
            <li>
                <a href="{{route('welcome')}}">Home</a>
            </li>
            <li>
                <a href="{{route('posts.index')}}">Post</a>
            </li>
        </ul>
    </nav>

    {{-- aqui mostrare el contenido  --}}
    {{$slot}}
</body>
</html>
