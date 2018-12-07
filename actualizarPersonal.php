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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/registro.js"></script>
</head>

<body>
     <nav class="navbar navbar-inverse">
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
        <h3>Tabla de usuarios</h3>
        <form class="form1" action="php/actualizarUsuario.php" method="post" accept-charset="utf-8" class="form-horizontal">
            <?php 
                echo'
            <label>Nickname (<span id="disponible" style="color:#FF2B10FF;">No puede modificar su nickname</span>)</label> 
            <input class="form-control" type="text" name="IDConductor" required pattern="[A-Za-z áéíóúÁÉÍÓÚ]+" value="'.$_GET['IDConductor'].'" readonly="readonly"><br>
            <label>Nombre(s)</label>
            <input class="form-control" type="text" name="nombre" required pattern="[A-Za-z áéíóúÁÉÍÓÚñ]+" value="'.$_GET['nombre'].'"><br>

            <label>Apellido Paterno</label>

            <input class="form-control" type="text" name="appat" pattern="[A-Za-z áéíóúÁÉÍÓÚñ]+" required value="'.$_GET['apellidoPat'].'"><br>

            <label>Apellido Materno</label>
            <input class="form-control" type="text" name="apmat" pattern="[A-Za-z áéíóúÁÉÍÓÚñ]+" required value="'.$_GET['apellidoMat'].'"><br>

            <label>Teléfono</label>
            <input class="form-control" type="tel" name="tel" required pattern="[0-9]{10}" value="'.$_GET['telefono'].'"><br>

            <label style="display: inline-block">Tipo de usuario: &nbsp;&nbsp;&nbsp;</label>
            <select name="tipo" class="form-control">';
            switch ($_GET['tipo']) {
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
            <input class="form-control" type="text" name="bole" required  value="'.$_GET['boletaRFC'].'"><br>

            <label>Correo</label>
            <input class="form-control" type="email" name="correo" placeholder="ejemplo@email.com" required value="'.$_GET['correo'].'"><br>

            <label>Contraseña</label>
            <input class="form-control" type="password" name="pass" required minlength="5" maxlength="40" value="'.$_GET['password'].'"><br>

            <div class="form-group row">
                <div class="col-xs-6">
                    <a href="tablaUsuarios.php" class="btn btn-danger" role="button" style="width: 100%;">Cancelar</a>
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