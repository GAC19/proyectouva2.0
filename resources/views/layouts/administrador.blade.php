<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="{{ asset('./static/sweetalert.min.js')}}"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('./static/css/menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('./static/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/js" href="{{ asset('./static/css/sweetalert.css')}}">
    <title>@yield('title')</title>
</head>
@yield('css')
<body>
    <nav>
        <img src="../static/imagen/logo2.png" alt="logo" width="300" height="70">
        <ul>
            <li><a href="../adm/home_adm">MI CUENTA</a></li>
            <li><a href="../adm/personal">PERSONAL</a></li>
            <li><a href="../adm/historialtotal">Historial Total</a></li>
            <li><a href="{{ url('/logout') }}" class="text-warning"> Cerrar Secccion </a></li>
            {{-- <button class="btn btn-warning btn-sm" onclick="EventoAlert()">prueba</button> --}}
        </ul>
        <label id="icon">
            <i class="fas fa-bars"></i>
        </label>
    </nav>

    <section>
        @yield('content')
    </section>
    
    @yield('js')
</body>

</html>

{{-- 
   @extends('layouts/administrador')
   @section('title','home')
   @section('content')
   
       <h1 style="text-align: center">user</h1>
   
   @endsection> --}}