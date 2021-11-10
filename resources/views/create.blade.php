<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('./static/css/estilo.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('./static/css/bootstrap.min.css') }}">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <title>Create User</title>
</head>


<body class="bg-light">
    <nav >
        <div class="arriba"> 
           EXPORTACION DE UVA

        </div>
    </nav>
    <div class="container"><button onclick="document.location='./'" class="btn bg-success">volver</button></div><br>
    
    
    <div class="container">
        
        @if (session('mensaje'))
        <div class="alert alert-success">{{session('mensaje')}}</div>
        @endif

        <form action="./agregar" method="POST">
            @csrf
            <h3>CREACION DE USUARIO</h3><hr>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Rut Empresa</label>
                <input type="text" class="form-control" name="rut_empresa">
                {!! $errors->first('rut_empresa') !!}
                <div id="emailHelp" class="form-text">indique razon social</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre Empresa</label>
                <input type="text" class="form-control" name="nombre_empresa">
                {!! $errors->first('nombre_empresa') !!}
                <div id="emailHelp" class="form-text">nombre completo de la empresa</div>
            </div>
            <div class="mb-3">

                 <label for="exampleInputEmail1" class="form-label">Telefono Empresa</label>
                <input type="text" class="form-control" name="telefono_empresa">
                {!! $errors->first('telefono_empresa') !!}
                <div id="emailHelp" class="form-text">telefono fijo o celular</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Ciudad</label>
                <input type="text" class="form-control" name="ciudad">
                {!! $errors->first('ciudad') !!}
                <div id="emailHelp" class="form-text">ciudad o pais</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nombre">
                {!! $errors->first('nombre') !!}
                <div id="emailHelp" class="form-text">Nombre del representante</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Cedula de Identidad</label>
                <input type="text" class="form-control" name="rut">
                {!! $errors->first('cedula') !!}
                <div id="emailHelp" class="form-text">Cedula de Identidad del representante</div>
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Dirección de correo electrónico</label>
              <input type="exit" class="form-control" name="email">
              {!! $errors->first('telefono_empresa') !!}
              <div id="emailHelp" class="form-text">Nunca compartiremos su correo electrónico con nadie más.</div>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control" name="password">
              {!! $errors->first('telefono_empresa') !!}
            </div>
            <button type="submit" class="btn btn-primary">GUARDAR</button>
            
        </form>
            
    </div>
</body>
</html>