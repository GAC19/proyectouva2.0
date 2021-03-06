<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('./static/css/plantilla.css') }}"> --}}
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('./static/css/estilo.css') }}"> --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('./static/css/menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('./static/css/bootstrap.min.css') }}">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script>
        $(document).ready(function(){
            $('#icon').click(function(){
                $('ul').toggleClass('show');
            });
        });
    </script>


    <title>@yield('title')</title>
</head>
<body>
    <nav>
        <img src="{{ asset('./static/imagen/logo2.png') }}" alt="logo" width="300" height="70">
        <ul>
            <li><a href="{{ url('/cliente/user') }}">volver</a></li>
            <li><a href="{{ url('/logout') }}" class="text-warning"> Cerrar Secccion </a></li>
        </ul>
        <label id="icon">
            <i class="fas fa-bars"></i>
        </label>
    </nav>

    <div class="container">
        <div><h3>Cambio de Domicilio</h3></div><hr> 
        <div class="row">
            <div class="col-2">
                <h3 style="text-align: left">Nro.:</h3>
                <h3 style="text-align: left">Variedad:</h3>
                <h3 style="text-align: left">Tipo:</h3>
                <h3 style="text-align: left">Categoria: </h3>
                <h3 style="text-align: left">Embalaje:</h3>
                {{-- <h3 style="text-align: left">Descripcion:</h3>
                <h3 style="text-align: left">Rut Empresa:</h3>
                <h3 style="text-align: left">Nombre Empresa:</h3>
                <h3 style="text-align: left">Direccion:</h3> --}}
                {{-- <h3 style="text-align: left">editar {{$prod->descripcion}}</h3> --}}
            </div>
            <div class="col-4">
                <h3 style="text-align: left">{{$prod->id}}</h3>
                <h3 style="text-align: left">{{$prod->variedad}}</h3>
                <h3 style="text-align: left">{{$prod->tipo}}</h3>
                <h3 style="text-align: left">{{$prod->categoria}}</h3>
                <h3 style="text-align: left">{{$prod->embalaje}}</h3>
                {{-- <h3 style="text-align: left">{{$prod->descripcion}}</h3>
                <h3 style="text-align: left">{{$prod->rut_empresa}}</h3>
                <h3 style="text-align: left">{{$prod->nombre_empresa}}</h3>
                <h3 style="text-align: left">{{$prod->direccion}}</h3> --}}
                {{-- <h3 style="text-align: left">editar {{$prod->descripcion}}</h3> --}}

            </div>

        </div><hr>

    </div>

    <div class="container">
        <form action="{{route('cliente.update', $prod->id)}}" method="POST">
            @method('PUT')
            @csrf
            {{-- id:<input type="text" name="id" class="form-control mb-2" value="{{$pers->id}}"> --}}
            <input type="text" name="variedad" class="form-control mb-2" style="display:none" value="{{$prod->variedad}}">
            <input type="text" name="tipo" class="form-control mb-2" style="display:none" value="{{$prod->tipo}}">
            <input type="text" name="categoria" class="form-control mb-2" style="display:none" value="{{$prod->categoria}}">
            <input type="text" name="embalaje" class="form-control mb-2" style="display:none" value="{{$prod->embalaje}}">
            Rut Empresa:<input type="text" name="rut_empresa" class="form-control mb-2" value="{{$prod->rut_empresa}}">
            Nombre Empresa:<input type="text" name="nombre_empresa" class="form-control mb-2" value="{{$prod->nombre_empresa}}">
            Direcci??n:<input type="text" name="direccion" class="form-control mb-2" value="{{$prod->direccion}}">
            Descripcion:<input type="text" name="descripcion" class="form-control mb-2" value="{{$prod->descripcion}}"><br>
            {{-- direccion: <input type="text" name="direccion" class="form-control mb-2" value="{{$prod->direccion}}"> --}}
            <button class="btn btn-warning btn-block" type="submit">Editar</button>
        </form>
        
    </div>


</body>
</html>














