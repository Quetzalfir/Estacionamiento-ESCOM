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
            #mapa .area-mapa{
                display: inline-block;
            }

            .app-body .draw-area{
                display: inline-block;  
            }
            #contenido{
                min-height: calc(100vh - 17vh);
                clear: both;
                padding-top: 10vh;
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
        <a href="administrador.php"><img id="logo" src="img/escom.png"></a>
        <h2><a href="administrador.php">Estacionamiento ESCOM</a></h2>
    </section>
    <section name="user">
        <nav>
            <ul>
                <li><a href="MapaAdmin.php">Mapa</a></li>
                <li><a href="registraPersonal.html">Registrar Personal</a></li>
                <li><a href="faltas.html">Faltas</a></li>
            </ul>
        </nav>
        <!--------------------------------------------------------------------------------------------------->
        <div class="sesion2">
            <button class="logout"><a href="logout.php">Cerrar Sesión</a></button>
        </div>
    </section>
</header>

    <div id="contenido">
      <div id="app" class="joint-app joint-theme-modern">
        <div class="app-header"></div>
        <div class="app-body">
            <div class="draw-area" id="stencil" style="background: #383b61;; height: 750px; width: 15%; position: relative;"></div>
            <div class="draw-area" id="paper" class="areaDibujo" style="background: #383b61;; height: 750px; width: 69%;  "></div>
            <div class="draw-area" style="background: #383b61;; height: 750px; width: 15%; position:  absolute;">
        <div id="inspector" style="height: 600px; width: 100%;"></div>
      </div>
        </div>
        </div>
        <script src="js/mapaAdmin.js" type="text/javascript" charset="utf-8" async defer></script>
      </div>
    </div>

    <footer>
        <p>Valencia Rodriguez Fernando</p>
        <p>Azpeitia Hernánez Vladimir </p>
        <p>Huerta Alvarez Diana Alejandra</p>
    </footer>


</body>
</html>