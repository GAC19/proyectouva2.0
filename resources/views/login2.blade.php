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


    <div class="container">

            <div class="d-flex justify-content-center">
                <div class="card">
                    <div class="card-header bg-light">
                        <div class="d-flex justify-content-end"></div>
                        <h3 class="text-green">Ingresar Usuario</h3>
                    </div>
                    <div class="card-body dg-lignt">
                        <form>
                            <div>
                                <input type="text" class="form-control" placeholder="username">
                                <br>
                            </div>
                            <div>
                                <input type="password" class="form-control" placeholder="password">
                            </div>
                            <div class="row align-items-center remember">
                                <input type="checkbox">Recordar 
                            </div>
                            <div class="form-group">
                                <a href="cliente/user">
                                    <input type="button" value="Ingresar" class="btn bg-success text-light"></a>
                                </a>
                            </div>
                        </form>
                    </div>
                    
                    <div class="card-footer bg-light">
                        <div class="d-flex justify-content-center">
                            <div class="text-green">??No tienes una cuenta?</div>
                        </div>
                        <div class="justify-content-center" style="text-align: center">
                            <div class="d-inline p-2"><a href="create">crear usuario </a></div>
                            <div class="d-inline p-2"><a href="#">olvidaste tu contrase??a</a></div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="container"><button onclick="document.location='./'" class="btn bg-success text-light">volver</button></div><br>
            <a href="usuario/home_user">usuario</a>
            <a href="adm/home_adm">administrador</a>
    </div>
</body>
</html>
