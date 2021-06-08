<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="css/PPropietario.css">
    <title>Perfil Comida</title>
</head>
<body>
    <!--Menu-->

    <!-- Image and text -->
    <div class="container-fluid">
        <div class="row">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">
                    <img src="assets/img/caralogo.png" width="40%" height="" class="d-inline-block align-top" alt="">
                </a>

                <ul class="navbar-nav" style="margin-left: 50%;">
                <li class="nav-item">
                        <a class="nav-link" href="#">Promosiones</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Alquiler
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="{{ url('propietario') }}">Perfil Propietaria</a>
                        <a class="dropdown-item" href="{{ url('cuarto') }}">Perfil Habitación</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Restaurante/Bar
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="{{ url('Restaurante') }}">Perfil Restaurante/Bar</a>
                        <a class="dropdown-item" href="{{ url('Comida') }}">Perfil Comida</a>
                        </div>
                    </li>


                </ul>
            </nav>
        </div>
    </div>

    <!--Menu-->
    <div class="container">
        <div class="row">
            <div class="card fondo">
                <div class="card-body">
                <br><br>
                    <div class="row">
                        <h4 class="card-title" style="margin-bottom: 2%;"> <strong class="color">Perfil</strong> <strong class="coloruno">Comida</strong></h4>
                        <div class="col-md-6">
                            <div class="col-md-12">
                                <input type="file" class="form-control" id="inputGroupFile01" style="">
                                <div id="emailHelp" class="form-text">Foto de Comida</div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <h4 class="card-title"> <strong class="color">Datos</strong> <strong class="coloruno">Comida</strong></h4>
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                            
                            <div class="form-floating mb-3">
                                <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                    <option selected>Seleccione el Restaurante</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                                <label for="floatingSelect">ID de Restaurante</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" placeholder="Discripción">
                                <label for="floatingInput">Descripción</label>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingPassword" placeholder="Nombre">
                                <label for="floatingPassword">Nombre</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingPassword" placeholder="Precio">
                                <label for="floatingPassword">Precio</label>
                            </div>
                        </div>
                    </div>

                    <br><br>

                    <div class="row">
                    <div id="emailHelp" class="form-text">Complete y Revise el Contenido Antes de Guardar</div>
                        <div class="col-md-12">
                        <button type="button" class="btn btn-outline-secondary boton" style="width: 100%;"><strong class="color">Guardar</strong></button>
                        </div>
                    </div>
                    <br>

                </div>
            </div>
        </div>
    </div>
    <br>


     <!--Footer-->

     <footer class="bg-dark text-center text-white" style="background-color: #f1f1f1;">
        <!-- Grid container -->
        <img src="assets/img/logoblanco.png" alt="" style="width: 8%; margin-top: 2%; margin-bottom: 2%">
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2021 Copyright:
            <a class="text-white" href="https://mdbootstrap.com/">miamigoforaneo.org</a>
        </div>
        <!-- Copyright -->
        </footer>

    <!--Footer-->

    <!--Java Bootstrap-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!--Java Bootstrap-->
</body>
</html>