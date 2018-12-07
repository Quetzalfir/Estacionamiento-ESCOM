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
    <script type="text/javascript" src="js/registro.js"></script>
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

 <div class="container">
     <h3>Actualizar información personal</h3>
     <hr>

        <form action="php/actualizarInfoAdmin.php" method="post" accept-charset="utf-8" class="form-horizontal">
            <?php 
                echo'
            <label>Nombre(s)</label>
            <input class="form-control" type="text" name="nombre" required pattern="[A-Za-z áéíóúÁÉÍÓÚ]+" value="'.$_SESSION['nombre'].'"><br>

            <label>Apellido Paterno</label>

            <input class="form-control" type="text" name="appat" pattern="[A-Za-z áéíóúÁÉÍÓÚ]+" required value="'.$_SESSION['apellidoPat'].'"><br>

            <label>Apellido Materno</label>
            <input class="form-control" type="text" name="apmat" pattern="[A-Za-z áéíóúÁÉÍÓÚ]+" required value="'.$_SESSION['apellidoMat'].'"><br>

            <label>Teléfono</label>
            <input class="form-control" type="tel" name="tel" required pattern="(([0-9]{1,3}( )?)?([0-9]{0,4})[ -]?([0-9]{0,4})" value="'.$_SESSION['telefono'].'"><br>

            <label id="tipoId" >Boleta</label>
            <input class="form-control" type="text" name="bole" required pattern="[0-9]{10}" value="'.$_SESSION['boletaRFC'].'"><br>

            <label>Correo</label>
            <input class="form-control" type="email" name="correo" placeholder="ejemplo@email.com" required value="'.$_SESSION['correo'].'"><br>

            <div class="form-group row">
                <div class="col-xs-6">
                    <a href="Administrador.php" class="btn btn-danger" role="button" style="width: 100%;">Cancelar</a>
                </div>
                <div class="col-xs-6">
                    <input type="submit" value="Actualizar" class="form-control btn btn-primary">
                </div>
            </div>';
             ?>
        </form>
    </div>

</body>
</html>