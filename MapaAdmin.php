<?php 
    session_start(); // se crea o reanuda la sesion actual
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
    <meta author="Azpeita Hernández Vladimir">
    <meta author="Huerta Alvarez Diana Alejandra">
    <meta author="Valencia Rodríguez Fernando Quetzalcóatl">
    <meta charset="UTF-8">
    <title>Inicio</title>
    <!-- Dependencias bootstrap -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!--Dependencias JOINTJS-->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jointjs/2.1.0/joint.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/3.10.1/lodash.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/backbone.js/1.3.3/backbone.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jointjs/2.1.0/joint.js"></script>
    <link rel="stylesheet" type="text/css" href="js/rappid/build/rappid.min.css">
    <script src="js/rappid/build/rappid.min.js"></script>
    <style>
      .app-body .draw-area{
          display: inline-block;
      }
    </style>
</head>
<body>


       <nav class="navbar navbar-inverse">
        <!-- barra de navegacion estandar responsiva ancho 100% -->
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="Administrador.php">Estacionamiento ESCOM</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="Administrador.php">Inicio</a></li>
                <li><a href="MapaAdmin.php">Mapa</a></li>
                <li><a href="tablaAutoAdmin.php">Automoviles</a></li>
                <li><a href="tablaUsuarios.php">Usuarios</a></li>
                <li><a href="faltas.php">Faltas</a></li>
                <li><a href="bitacoraAdmin.php">Bitacora</a></li>
                <li><a href="solicitudAdmin.php">Solicitudes de usuarios</a></li>
            </ul>
<ul class="nav navbar-nav navbar-right">
                <!-- extremo derecho de la barra -->
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $_SESSION['user'];?>  <img src="img/usuario.png" class="img-circle" alt="Cinque Terre" width="25" height="25"></a>
                    <ul class="dropdown-menu">
                        <li><a href="OpcionesAdmin.php">Configuración</a></li>
                        <li><a href="cambiarPassAdmin.php">Cambiar contraseña</a></li>
                        <li><a href="php/logout.php">Cerrar Sesión</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>  

    <div class="container-fluid">
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

    <!-- Button to Open the Modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" id="btnForm">
      Open modal
    </button>

    <!-- The Modal -->
    <div class="modal" id="myModal">
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
                <form action="php/actualizarImagen.php" method="post" enctype="multipart/form-data">
                    <label for="idModel">ID Model:</label>
                    <input type="file" class="form-control-file" id="imgFile" accept="image/png, image/jpeg" name="imagen"><br>
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
    <div class="modal" id="myModal2">
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