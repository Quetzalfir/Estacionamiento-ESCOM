<?php 
    session_start(); // se crea o reanuda la sesion actual
    if(isset($_SESSION["tipo"])){
       if($_SESSION["tipo"] != 'Admin'){ // si el usuario no es un admin
            header("Location: Usuario.php", true, 301);
       }
    }else{
        header("Location: index.html", true, 301);
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
        <h1>Reportar Falta</h1>
        <hr>
        <h3>Datos del infractor</h3>
        <form action="php/insertarReporte.php" method="post" enctype="multipart/form-data" class="form-horizontal" accept-charset="utf-8">    
            <label>Placa:</label>
            <input class="form-control" type="text" name="placas" pattern="[A-Z]{3}[-]\d{3}" required> <br>
            <label style="display: inline-block">Tipo:&nbsp;&nbsp;&nbsp;</label>
            <select name="tipo" class="form-control" required>
                <option value="Mal estacionado">Mal estacionado</option>
                <option value="Choque">Choque</option>
                <option value="Luces encendidas">Luces encendidas</option>
                <option value="Otro">Otro</option>
            </select>
            <label>Descripción:</label>
            <textarea name="descripcion" class="form-control" required></textarea><br>
            <label>Insertar imagen:</label> 
            <input class="form-control" type="file" name="imagen" accept="image/png, image/jpeg"> <br>
            <div class="form-group row">
                <div class="col-xs-6">
                    <a href="faltas.php" class="btn btn-danger" role="button" style="width: 100%;">Cancelar</a>
                </div>
                <div class="col-xs-6">
                    <input class="form-control btn btn-primary" type="submit" value="Realizar reporte">
                </div>
            </div>
        </form>
    </div>

</body>
</html>