<?php 
    session_start();
    if(isset($_SESSION["tipo"])){
        if($_SESSION["tipo"] == "Alumno" || $_SESSION["tipo"] == "Profesor" || $_SESSION["tipo"] == "Vigilante" || $_SESSION["tipo"] == "Otro"){
            
        }else{
            header("Location: index.html", true, 301);
        }
    }else{
        header("Location: index.html", true, 301);
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inicio</title>
    <!-- Dependencias bootstrap -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>

    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="Usuario.php">Estacionamiento ESCOM</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="Usuario.php">Inicio</a></li>
                <li><a href="notiUSR.php">Notificaciones</a></li>
                <li><a href="MapaUsuario.php">Mapa</a></li>
                <li><a href="reportarFaltaUser.php">Reportar Falta</a></li>
                <li><a href="tablaAuto.php">Tabla automóviles</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $_SESSION['user'];?>  <img src="img/usuario.png" class="img-circle" alt="Cinque Terre" width="25" height="25"></a>
                     <ul class="dropdown-menu">
                        <li><a href="OpcionesUsuario.php">Configuración</a></li>
                        <li><a href="solicitudUser.php">Solicitar cajón para discapacitado</a></li>
                        <li><a href="cambiarPassUser.php">Cambiar Contraseña</a></li>
                        <li><a href="php/logout.php">Cerrar Sesión</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>  

    <div class="container">
        
    </div>
</body>
</html>