<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles TAiwilnd -->
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="antialiased">

        {{-- <a href="{{route('posts.index')}}">Lista de posts</a>

        <ul>
            <li><a href="{{route('posts.show', 1)}}">Post 1</a></li>
            <li><a href="{{route('posts.show', 2)}}">Post 2</a></li>
            <li><a href="{{route('posts.show', 3)}}">Post 3</a></li>
        </ul> --}}

        {{-- CREANDO UN COMPONENTE  (Primer paso: ejecuto php artisan make:component nombrecomponente en mi caso se llamara Alert y luego presiono enter) --}}
        {{-- LLAMANDO A MI COMPONENTE --}}
        <div class="container mx-auto py-12">

            @php
                $type='danger';
            @endphp

            <x-alert  :type="$type" class="mb-6">
                
                <x-slot:title> 
                    titutlo de prueba agora
                </x-slot>


                esto es un texto de prueba
            </x-alert>


        </div>


    </body>
</html>
