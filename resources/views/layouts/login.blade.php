<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('./static/css/estilo.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('./static/css/bootstrap.min.css') }}">
    <title>LOGIN</title>
</head>

<body class="bg-light">
    <nav >
        <div class="arriba"> 
           EXPORTACION DE UVA

        </div>
    </nav>
    <section>
         @yield('content')
    </section>

    {{-- @extends('layouts/login')
    @section('title','home')
    @section('content')
    
        <h1 style="text-align: center">user</h1>
    
    @endsection> --}}

</body>
</html>
