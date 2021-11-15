<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('/static/css/plantilla.css') }}"> --}}
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
        <img src="../static/imagen/logo2.png" alt="logo" width="300" height="70">
        <ul>
            <li><a href="home_adm">MI CUENTA</a></li>
            <li><a href="personal">PERSONAL</a></li>
            <li><a href="usuarios">USUARIOS</a></li>
            <li><a href="#">PRODUCTO</a></li>
            <li><a href="#">MENSAJE</a></li>
            <li><a href="../login" class="text-warning">SALIR</a></li>
        </ul>
        <label id="icon">
            <i class="fas fa-bars"></i>
        </label>
    </nav>

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