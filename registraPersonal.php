<?php 
    session_start(); // se crea o reanuda la sesion actual
    if(isset($_SESSION["tipo"])){
        if($_SESSION["tipo"] != "Admin"){ // si le usuario no es Admin
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
    <title>Registrar personal</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/registro.js"></script>
</head>
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
            </ul>
<ul class="nav navbar-nav navbar-right">
                <!-- extremo derecho de la barra -->
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $_SESSION['user'];?>  <img src="img/usuario.png" class="img-circle" alt="Cinque Terre" width="25" height="25"></a>
                    <ul class="dropdown-menu">
                        <li><a href="OpcionesAdmin.php">Configuración</a></li>
                        <li><a href="php/logout.php">Cerrar Sesión</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <h3>Tabla de usuarios</h3>
        <form action="php/insertarUsuario.php" method="post" accept-charset="utf-8" class="form-horizontal">
            <label>Nickname (<span id="disponible" style="color:#45932CFF;">Disponible</span>)</label> 
            <input class="form-control" type="text" name="IDConductor" pattern="[A-Za-z0-9]+" required id="IDConductor" minlength="5" maxlength="20"><br>
            <label>Nombre(s)</label>
            <input class="form-control" type="text" name="nombre" required pattern="[A-Za-z áéíóúÁÉÍÓÚ]+"><br>

            <label>Apellido Paterno</label>

            <input class="form-control" type="text" name="appat" pattern="[A-Za-z áéíóúÁÉÍÓÚ]+" required><br>

            <label>Apellido Materno</label>
            <input class="form-control" type="text" name="apmat" pattern="[A-Za-z áéíóúÁÉÍÓÚ]+" required><br>

            <label>Teléfono</label>
            <input class="form-control" type="tel" name="tel" required pattern="(([0-9]{1,3}( )?)?([0-9]{0,4})[ -]?([0-9]{0,4})"><br>

            <label style="display: inline-block">Tipo de usuario: &nbsp;&nbsp;&nbsp;</label>
            <select name="tipo" class="form-control">
                <option value="Profesor">Profesor</option>
                <option value="Alumno" selected>Alumno</option>
                <option value="Vigilante">Vigilante</option>
                <option value="Otro">Otro</option>
            </select>
            <br>

            <label id="tipoId" >Boleta</label>
            <input class="form-control" type="text" name="bole" required pattern="[0-9]{10}"><br>

            <label>Correo</label>
            <input class="form-control" type="email" name="correo" placeholder="ejemplo@email.com" required><br>

            <label>Crear Contraseña</label>
            <input class="form-control" type="password" name="pass" required minlength="5" maxlength="40"><br>

            <label>Verificar Contraseña</label>
            <input class="form-control" type="password" name="pass2" required minlength="5" maxlength="40"><br>
            <div class="form-group row">
                <div class="col-xs-6">
                    <a href="tablaUsuarios.php" class="btn btn-danger" role='button' style="width: 100%;">Cancelar</a>
                </div>
                <div class="col-xs-6">
                    <input class="form-control btn btn-primary" type="submit" value="Registrar">
                </div>
            </div>
        </form>
    </div>

</body>
</html>