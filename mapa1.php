<!DOCTYPE html>
<html lang="es">
<head>
    <meta author="Azpeita Hernández Vladimir">
    <meta author="Huerta Alvarez Diana Alejandra">
    <meta author="Valencia Rodríguez Fernando Quetzalcóatl">
    <meta charset="UTF-8">
    <title>Mapa interactivo</title>
    <link rel="stylesheet" type="text/css" href="css/main.css">
        <style>
            #mapa .area-mapa{
                display: inline-block;
            }
        </style>
    </head>
    <!--Dependencias JOINTJS-->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jointjs/2.1.0/joint.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/3.10.1/lodash.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/backbone.js/1.3.3/backbone.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jointjs/2.1.0/joint.js"></script>
    <link rel="stylesheet" type="text/css" href="js/rappid/build/rappid.min.css">
    <script src="js/rappid/build/rappid.min.js"></script>
    <!--Dependencias BOOTSTRAP-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.html">Estacionamiento ESCOM</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="index.html" class="active">Inicio</a></li>
                <li><a href="acercade.html">Acerca de</a></li>
                <li><a href="mapa1.php">Mapa interactivo</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="registro.php"><span class="glyphicon glyphicon-user"></span> Registrarse </a></li>
                <li><a href="iniciosesion.html"><span class="glyphicon glyphicon-log-in"></span> Iniciar Sesión </a></li>
            </ul>
        </div>
    </nav>
    <div class="container-fluid">
        <div id="toolbar"></div>
        <!--AQUI SE DIBUJA EL MAPA-->
        <div id="mapa">
                <div class="area-mapa" id="paper-mapa" style="height: 750px; width: 100%; vertical-align: middle;"></div>
            <!--<div class="area-mapa" id="inspector" style="height: 700px; width: 300px; position: absolute;"></div>-->
        </div>
        <script src="js/mapa.js" type="text/javascript" charset="utf-8" async defer></script>
    </div>

</body>
</html>