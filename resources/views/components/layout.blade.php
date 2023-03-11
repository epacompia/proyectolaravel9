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
    <!-- <script src="https://cdn.tailwindcss.com"></script>  en caso quiero usar tailwind uso este script -->
    
   
    <!-- EN CASO QUIERA USAR BOOTSTRAP POR DEFECTO EN VES DE TAILWIND, PRIMERO EN EL layout.blade.php incluyo el css y js de javascript y leugo vengo aqui al AppServiceProvider para setear el boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> <!--ESTO EN SI EN CASO QUIERO USAR BOOTRSTRAP 5-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 


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
