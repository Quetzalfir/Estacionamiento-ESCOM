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
    <script type="text/javascript" src="js/registro.js"></script>
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
                <li><a href="tablaAdmin.php">Tabla automóviles</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $_SESSION['user'];?>  <img src="img/usuario.png" class="img-circle" alt="Cinque Terre" width="25" height="25"></a>
                    <ul class="dropdown-menu">
                        <li><a href="OpcionesUsuario.php">Configuración</a></li>
                        <li><a href="cambiarPassUser.php">Cambiar Contraseña</a></li>
                        <li><a href="php/logout.php">Cerrar Sesión</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>  

 <div class="container">
        <h3>Actualizar información personal</h3>
        <form action="php/actualizarInfo.php" method="post" accept-charset="utf-8" class="form-horizontal">
            <?php 
                echo'
            <label>Nombre(s)</label>
            <input class="form-control" type="text" name="nombre" required pattern="[A-Za-z áéíóúÁÉÍÓÚ]+" value="'.$_SESSION['nombre'].'"><br>

            <label>Apellido Paterno</label>

            <input class="form-control" type="text" name="appat" pattern="[A-Za-z áéíóúÁÉÍÓÚ]+" required value="'.$_SESSION['apellidoPat'].'"><br>

            <label>Apellido Materno</label>
            <input class="form-control" type="text" name="apmat" pattern="[A-Za-z áéíóúÁÉÍÓÚ]+" required value="'.$_SESSION['apellidoMat'].'"><br>

            <label>Teléfono</label>
            <input class="form-control" type="tel" name="tel" required pattern="[0-9]{10}" value="'.$_SESSION['telefono'].'"><br>

            <label style="display: inline-block">Tipo de usuario: &nbsp;&nbsp;&nbsp;</label>
            <select name="tipo" class="form-control">';
            switch ($_SESSION['tipo']) {
                case 'Alumno':
                    echo ' <option value="Alumno" selected>Alumno</option>
                <option value="Profesor" >Profesor</option>
                <option value="Vigilante">Vigilante</option>
                <option value="Otro">Otro</option>';
                    break;
                 case 'Profesor':
                    echo ' <option value="Alumno">Alumno</option>
                <option value="Profesor" selected>Profesor</option>
                <option value="Vigilante">Vigilante</option>
                <option value="Otro">Otro</option>';
                    break;
                 case 'Vigilante':
                    echo ' <option value="Alumno">Alumno</option>
                <option value="Profesor" >Profesor</option>
                <option value="Vigilante" selected>Vigilante</option>
                <option value="Otro">Otro</option>';
                    break;
                 case 'Otro':
                    echo ' <option value="Alumno">Alumno</option>
                <option value="Profesor" >Profesor</option>
                <option value="Vigilante" >Vigilante</option>
                <option value="Otro" selected>Otro</option>';
                    break;
            }
            echo '</select>
            <br>

            <label id="tipoId" >Boleta</label>
            <input class="form-control" type="text" name="bole" required pattern="[0-9]{10}" value="'.$_SESSION['boletaRFC'].'"><br>

            <label>Correo</label>
            <input class="form-control" type="email" name="correo" placeholder="ejemplo@email.com" required value="'.$_SESSION['correo'].'"><br>

            <div class="form-group row">
                <div class="col-xs-6">
                    <a href="Usuario.php" class="btn btn-danger" role="button" style="width: 100%;">Cancelar</a>
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