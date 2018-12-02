<?php 
    session_start();
    if(isset($_SESSION["tipo"])){
        if($_SESSION["tipo"] != "Admin"){
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
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="js/rappid/build/rappid.min.js"></script>    
<body>

<header>
    <section name="index">
        <a href="administrador.php"><img id="logo" src="img/escom.png"></a>
        <h2><a href="administrador.php" style="text-decoration: none;">Estacionamiento ESCOM</a></h2>
    </section>
    <section name="user">
        <nav>
            <ul>
                <li><a href="MapaAdmin.php" style="text-decoration: none;">Mapa</a></li>
                <li><a href="registraPersonal.php" style="text-decoration: none;">Registrar Personal</a></li>
                <li><a href="faltas.php" style="text-decoration: none;">Faltas</a></li>
            </ul>
        </nav>
        <!--------------------------------------------------------------------------------------------------->
        <div class="sesion2">
            <button class="logout"><a href="php/logout.php" style="text-decoration: none;">Cerrar Sesión</a></button>
        </div>
    </section>
</header>

    <div id="contenido">
      <div id="app" class="joint-app joint-theme-modern">
        <div class="app-header"></div>
        <div class="app-body">
            <div class="draw-area" id="stencil" style="background: #383b61;; height: 800px; width: 15%; position: relative;"></div>
            <div class="draw-area" id="paper" class="areaDibujo" style="background: #383b61;; height: 800px; width: 69%;  "></div>
            <div class="draw-area" style="background: #383b61;; height: 800px; width: 15%; position:  absolute;">
        <div id="inspector" style="height: 600px; width: 100%;"></div>
      </div>
        </div>
        </div>
        <script src="js/mapaAdmin.js" type="text/javascript" charset="utf-8" async defer></script>
      </div>
    </div>
<!-- Button to Open the Modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" id="btnForm">
  Open modal
</button>

<!-- The Modal -->
<div class="modal" id="myModal" style="margin-top: 100px;">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Guadar salón</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
          <div class="form-group">
            <form>
                <label for="idModel">ID Model:</label>
                <input type="file" class="form-control-file" id="imgFile" accept="image/png, image/jpeg"><br>
                <button type="submit" class="btn btn-primary" hidden="hiden">Cambiar</button>
            </form>
        </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
      </div>

    </div>
  </div>
</div>

<!-- Button to Open the Modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal2" id="btnMapaCreado">
  Open modal
</button>

<!-- The Modal -->
<div class="modal" id="myModal2" style="margin-top: 100px;">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Guadar salón</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <h3>Mapa guardado correctamente</h3>
        <textarea id="txtJSONModel" class="form-control" rows="5" ></textarea>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
      </div>

    </div>
  </div>
</div>

</body>
</html>