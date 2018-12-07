<?php 
    session_start(); // se crea o reanuda la sesion actual
    if(isset($_SESSION["tipo"])){
        if($_SESSION["tipo"] == "Alumno" || $_SESSION["tipo"] == "Profesor" || $_SESSION["tipo"] == "Vigilante" || $_SESSION["tipo"] == "Otro"){
            
        }else{
            header("Location: index.html", true, 301);
        }
    }else{
        header("Location: index.html", true, 301);
    }
?>
<head>
    <meta author="Azpeita Hernández Vladimir">
    <meta author="Huerta Alvarez Diana Alejandra">
    <meta author="Valencia Rodríguez Fernando Quetzalcóatl">
    <meta charset="UTF-8">
    <title>Actualizar automóvil</title>
    <!-- Dependencias bootstrap -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
    
   <nav class="navbar navbar-inverse">
        <!-- barra de navegacion estandar responsiva ancho 100% -->
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
                <!-- extremo derecho de la barra -->
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
       <form method="post" accept-charset="utf-8" class="form-horizontal" action="php/actualizarAuto.php">
           <?php 
                echo '
                <label>Placas</label>
                <input  class="form-control" type="text" name="placas" value="'.$_GET['placas'].'" readonly>
                <label>ID del Conductor</label>
                <input  class="form-control" type="text" name="IDConductor" value="'.$_GET['IDConductor'].'" disabled >
                <label style="display: inline-block">Tipo:&nbsp;&nbsp;&nbsp;</label>
                <select name="tipo" class="form-control">';
                switch ($_GET['tipo']) {
                    case 'Automovil':
                        echo '
                        <option value="Automovil" selected>Automovil</option>
                        <option value="Camioneta">Camioneta</option>
                        <option value="Motocicleta">Motocicleta</option>
                        <option value="Otro">Otro</option>';
                        break;
                    case 'Camioneta':
                        echo '
                        <option value="Automovil">Automovil</option>
                        <option value="Camioneta" selected>Camioneta</option>
                        <option value="Motocicleta">Motocicleta</option>
                        <option value="Otro">Otro</option>';
                        break;
                    case 'Motocicleta':
                        echo '
                        <option value="Automovil">Automovil</option>
                        <option value="Camioneta">Camioneta</option>
                        <option value="Motocicleta" selected>Motocicleta</option>
                        <option value="Otro">Otro</option>';
                        break;
                    case 'Otro':
                        echo '
                        <option value="Automovil">Automovil</option>
                        <option value="Camioneta">Camioneta</option>
                        <option value="Motocicleta">Motocicleta</option>
                        <option value="Otro" selected>Otro</option>';
                        break;
                    default:
                        echo '
                        <option value="Automovil" selected>Automovil</option>
                        <option value="Camioneta">Camioneta</option>
                        <option value="Motocicleta">Motocicleta</option>
                        <option value="Otro">Otro</option>';
                    break;
                }
                echo '</select>
                <label>Modelo</label>
                <input  class="form-control" type="text" name="modelo" value="'.$_GET['modelo'].'">
                <label>Compañia</label>
                <input  class="form-control" type="text" name="compania" value="'.$_GET['compania'].'">
                <label>Color</label>
                <input  class="form-control" type="color" name="colorAutomovil" value="'.$_GET['colorAutomovil'].'">
                <div class="form-group row">
                    <div class="col-xs-6">
                        <a href="tablaAuto.php" class="btn btn-danger" role="button" style="width: 100%;">Cancelar</a>
                    </div>
                    <div class="col-xs-6">
                        <input  class="form-control btn btn-success" type="submit" value="Actualizar">
                    </div>
                </div>

                ';
           ?>
       </form>
    </div>

</body>
