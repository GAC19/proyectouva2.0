<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ asset('./static/css/menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('./static/css/bootstrap.min.css') }}">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>

    <title>Editar</title>
</head>
<body>
    <nav>
        <img src="{{ asset('./static/imagen/logo2.png') }}" alt="logo" width="300" height="70">
        <ul>
            <li><a href="{{ url('/adm/home_adm') }}">volver</a></li>
            <li><a href="{{ url('/logout') }}" class="text-warning"> Cerrar Secccion </a></li>
        </ul>
    </nav>
    
    <section>
        <h1 style="text-align: center">editar {{$pers->id}}</h1>
        <h1 style="text-align: center">editar {{$pers->name}}</h1>
        <h1 style="text-align: center">editar {{$pers->email}}</h1>
        <h1 style="text-align: center">editar {{$pers->perfil}}</h1>
        
        <div class="container">
                <form action="{{route('adm.update', $pers->id)}}" method="POST">
                    @method('PUT')
                    @csrf
                    {{-- id:<input type="text" name="id" class="form-control mb-2" value="{{$pers->id}}"> --}}
                    nombre:<input type="text" name="name" class="form-control mb-2" value="{{$pers->name}}">
                    email:<input type="text" name="email" class="form-control mb-2" value="{{$pers->email}}">
                    perfil: <input type="text" name="perfil" class="form-control mb-2" value="{{$pers->perfil}}">
                    <button class="btn btn-warning btn-block" type="submit">Editar</button>
                </form>
                
            </div>
        </div>
        <div class="container">
            <div class="d-flex justify-content-center">
            <img src="{{ asset('./static/imagen/logo.png') }}" alt="logo"width="300" height="70">
            </div>
        </div>
    </section>
</body>
</html>