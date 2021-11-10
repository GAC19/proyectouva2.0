<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ asset('/static/css/plantilla.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('./static/css/estilo.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('./static/css/bootstrap.min.css') }}">

    <title>@yield('title')</title>
</head>
<body>
  <aside class="izq">
 
        <div class="perfil">
            <div ><img src="../static/imagen/usuario.ico" alt="" width="100" height="100"></div>
            <div ><span>ADMINISTRADOR</span></div>  
        </div>

        <div class="item">
        <div><a href="home_adm">MI CUENTA</a></div>
        <div><a href="personal">PERSONAL</a></div>
        <div><a href="usuarios">USUARIOS</a></div>
        <div><a href="#">PRODUCTO</a></div>
        <div><a href="#">MENSAJE</a></div>
        </div>

        <div><a href="http://localhost/ProyectoUva/public/" style="color:yellow; font-size: 30px;">salir</a></div>

    </aside> 

    <section>


    @yield('content')

    </section>
{{-- 
    @extends('layouts/administrador')
    @section('title','home')
    @section('content')
    
        <h1 style="text-align: center">user</h1>
    
    @endsection> --}}





</body>
</html>