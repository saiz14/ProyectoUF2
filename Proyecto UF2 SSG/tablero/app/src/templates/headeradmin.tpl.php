<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="public/css/style.css">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <title>TO DO SERGIO</title>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,200' rel='stylesheet' type='text/css'>
</head>
<body>
<header>

<div class="preview-bar fixed-top p-5 border-bottom-primary">
        <div class="container-fluid h-100">
            <div class="row align-items-center justify-content-between h-100">
                <div class="col-auto col-lg">
                </div>
                <div class="col col-auto d-none d-xl-block">
                    <ul class="nav responsive-toggler justify-content-center" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="desktopToggle" data-toggle="tab" href="#" role="tab" aria-selected="true">
                                <i class="fal fa-desktop"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="mobileToggle" data-toggle="tab" href="#" role="tab" aria-selected="false">
                                <i class="fal fa-mobile"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col text-right d-flex justify-content-end">
                <!-- Enlace que nos permite destruir la sessión del usuario registrado, enviandonos al controlador logoutController
                     y es el mismo el que nos lleva a la pagina de inicio devolviendonos el rol inicial de usuario anonymo -->
                <a href="http://tonitodo.test/app/controllers/logoutController.php" class="text-white">Cerrar session</a>
                <!-- Formulario que con la señal POST envía la solicitud indicada por el usuario de querer acceder a su perfil
                     cuando llega al controlador perfilController, este se encarga de cargar los datos del usuario actual 
                     mediante la sessión y los printa en la vista perfil -->
                     
                <form action="/app/controllers/perfilController.php" method='POST'  class="mr-2 p-0" >
                    <input class='btn btn-sm mr-2 mr-5 p-0 pl-5 ml-5"' type='submit' value='Usuario' style="color:white!important">
                </form>
                <a href="http://tonitodo.test/app/controllers/blogController.php" class="text-white">Blog</a>
                </div>
                <a href="http://tonitodo.test/app/controllers/tablero/?url=dashboard" class="text-white">TO DO</a>
                </div>
            </div>
        </div>
    </div>
</header>