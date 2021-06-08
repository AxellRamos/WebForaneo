<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login.css">
    <title>Login</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row carduno">
            <div class="col-md-4 carduno">
                <div class="card carduno">
                    <form method="POST" action="{{ route('login') }}">
                    @csrf 
                    <img src="assets/img/fondo1.jpg" class="card-img-top card" alt="...">

                    <div class="card-body">
                        <h2 class="card-title"> <strong class="color">INICIO DE</strong> <strong class="coloruno">SESIÓN</strong></h2>
                        <p class="card-text"> <strong class="color">Bienvenidos</strong></p>
                        
                        <div class="mb-3 row">
                            <label for="staticEmail" class="col-sm-6 col-form-label"><strong class="color">Email</strong></label>
                            <div class="col-sm-12">
                                <input type="email" class="form-control" id="inputPassword">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-6 col-form-label"><strong class="color">Password</strong></label>
                            <div class="col-sm-12">
                                <input type="password" class="form-control" id="inputPassword">
                            </div>
                        </div>

                        <a href="{{ url('propietario') }}"><button type="button" class="btn btn-outline-secondary boton"><strong class="color">Entrar</strong></button></a>

                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!--Java Bootstrap--> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <!--Java Bootstrap-->
</body>
</html>
