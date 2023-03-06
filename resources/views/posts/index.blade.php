<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        .color-red{
            color: red;
        }

        .color-blue{
            color: blue;
        }

    </style>
</head>
<body>
    <h1>Aqui se mostrara el index su listado de post</h1>


    {{-- PRIMERA FORMA DE USAR CONDICIONALES --}}
    {{--
    @if (true)
        <p>Este  mensaje se mostrara si le pasamos el valor verdadedor</p>
    @elseif (true)
        <p>Se mostrara si le pasamos el otro valor falso</p>
    @endif --}}



    {{-- SEGUNDA FORMA DE USAR CONDICIONALES --}}
    {{--
    @isset($prueba)
        <p>La variable prueba se encuentra declarada</p>
    @else
        <p>La variable prueba no esta dclarada</p>
    @endisset --}}



        {{-- TERCERA FORMA DE USAR CONDICIONALES  (VERITICA QUE LA VARIABLE QUE LE PASEMOS NO SE ENCUENTRE DECALRADA ) --}}
        {{--
        @empty($prueba)
        <p>La variable prueba no esta declarada</p>
        @endempty
        --}}

        {{-- DIRECTIVAS ENVIROMENT --}}
        {{--
        @env('local')
            <p>estamos en entorno local</p>
        @endenv

        @env('production')
            <p>estamos en entorno produccion</p>
        @endenv --}}

            {{-- PARA EL CASO DE SWITCH EN VISTAS --}}
        {{-- @switch($valor)
            @case('a')
                <p>El valor es a</p>
            @break
            @case('e')
            <p>El valor es e</p>
            @break
            @case('i')
            <p>El valor es i</p>
            @break
            @case('o')
            <p>El valor es o</p>
            @break
            @case('u')
            <p>El valor es u</p>
            @break
            @default
            <p>El valor no es vocal</p>

        @endswitch --}}


        {{-- MOSTRANDO LOS POSTS DENTRO DE LA VISTA,  estos POST ESTAN EN UN ARRAY EN EL INDEX DE CONTROLADOR --}}
            <ul>
                {{-- En caso siempre haya elementos en el arreglo o de la base de datos --}}
                {{-- @foreach ($posts as $post)
                 <li>{{$post['title']}}</li>
                @endforeach --}}


                {{-- AQUI ME MOSTRARA UN MENSAJE GRACIAS AL EMPTY EN CASO NO TENGA DATOS y asu ves usando variable loop que es propia del framework --}}
                {{-- @forelse ($posts as $post )
                    <li @if($loop->iteration % 2 == 0) style="color:red" @else style="color:blue"   @endif>
                        {{$post['title'] . ' - faltan iterar: ' . $loop->remaining}}
                    </li>
                @empty
                    <li>No hay posts</li>
                @endforelse --}}



                {{-- METODO USANDO CLASES (SE DECLARO EN EL STYLE DE ESTE DOCUMENTO PARA SER USADO AQUI) --}}
                @forelse ($posts as $post )
                    <li @class([
                        'color-red' => $loop->iteration % 2 ==0,   //aqui le digo que se aplique esta clase cuando la iteracion sea par
                        'color-blue' => $loop->iteration % 2 !=0,
                    ])>
                        {{$post['title'] . ' - faltan iterar: ' . $loop->remaining}}
                    </li>
                @empty
                    <li>No hay posts</li>
                @endforelse
            </ul>



            {{-- METODO FOR --}}
            {{-- @for ($i = 1; $i <= 10; $i++)
                <p>{{$i}}</p>
            @endfor --}}



            {{-- BUCLE WHILE --}}
            {{-- @php
                $i=1;
            @endphp

            @while ($i <= 10)
                <p>{{$i}}</p>

                @php
                    $i++;
                @endphp
            @endwhile --}}



    <script>
        //de esta forma paso un parametro de php a javascript
       // let posts={!! json_encode($posts) !!}; //forma 1
       //let posts= {{Js::from($posts)}} // forma 2

            //let posts= @json($posts); // tercera forma
            //console.log(posts);
    </script>
</body>
</html>
