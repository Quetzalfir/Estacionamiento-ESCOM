<?php 
    session_start();
    if(isset($_SESSION["tipo"])){
        if($_SESSION["tipo"] == "Alumno" || $_SESSION["tipo"] == "Profesor" || $_SESSION["tipo"] == "Vigilante" || $_SESSION["tipo"] == "Otro"){
            
        }else{
            header("Location: index.html", true, 301);
        }
    }else{
        header("Location: iniciosesion.html", true, 301);
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inicio</title>
    <link rel="stylesheet" type="text/css" href="css/main.css">
        <style>
            html {
                background-color: #ffffff;
            }

            .bg {
                background: url(img/dsc00409.jpg) no-repeat center center fixed;
                background-size: 100% auto;
                width: 100%;
            }

            .bg > img {
                width: 100%;
            }

            .blur, .blur2 {
                background-image: url(img/dsc00409_blur.jpg);
                color: white;
                position: sticky;
                text-shadow: 0px 0px 4px #000000;
                padding-bottom: 200px;
            }

            .blur2 {
                background-image: url(img/dsc00409_blur2.jpg);
            }

            main > section {
                background: url(img/dsc00409_blur.jpg) no-repeat center center fixed;
                background-size: 100% auto;
                position: sticky;
                color: white;
            }

            main h1 {
                font-size: xx-large;
                padding-top: 200px;
                margin-bottom: 100px;
            }

            main h3 {
                padding: 5px 0;
                font-size: x-large;
            }
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
<body>

    <header>
        <section name="index">
        <a href="Usuario.php"><img id="logo" src="img/escom.png"></a>
        <h2><a href="Usuario.php">Estacionamiento ESCOM</a></h2>
    </section>
    <section name="user">
        <nav>
            <ul>
                <li><a href="mapaUsuario.php">Mapa</a></li>
                <li><a href="reportarFalta.php">Reportar falta</a></li>
                <li><a href="registraCarro.php">Registrar Auto</a></li>
            </ul>
        </nav>
        <!--------------------------------------------------------------------------------------------------->
        <div class="sesion2">
            <button class="logout"><a href="php/logout.php">Cerrar Sesión</a></button>
        </div>
    </section>
    </header>

    <main>
        <div id="toolbar"></div>
        <!--AQUI SE DIBUJA EL MAPA-->
        <div id="mapa">
                <div class="area-mapa" id="paper-mapa" style="height: 760px; width: 100%; vertical-align: middle;"></div>
           <!--     <div class="area-mapa" id="inspector" style="height: 700px; width: 300px; position: absolute;"></div>-->
        </div>
        <script src="js/mapa.js" type="text/javascript" charset="utf-8" async defer></script>
    </main>

    <footer>
        <p>Valencia Rodriguez Fernando</p>
        <p>Azpeitia Hernánez Vladimir </p>
        <p>Huerta Alvarez Diana Alejandra</p>
    </footer>


</body>
</html>