<?php 
    session_start();
    if(isset($_SESSION["tipo"])){
       
    }else{
        header("Location: iniciosesion.html", true, 301);
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
                <li><a href="#">Tabla automóviles</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $_SESSION['user'];?>  <img src="img/usuario.png" class="img-circle" alt="Cinque Terre" width="25" height="25"></a>
                    <ul class="dropdown-menu">
                        <li><a href="OpcionesUsuario.php">Configuración</a></li>
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
        <section>
            <form action="php/insertarReporte.php" method="post" enctype="multipart/form-data" class="form-horizontal" accept-charset="utf-8">    
                <label>Placa:</label>
                <input class="form-control" type="text" name="placas"> <br>
                <label style="display: inline-block">Tipo:&nbsp;&nbsp;&nbsp;</label>
                <select name="tipo" class="form-control">
                    <option value="Mal estacionado">Mal estacionado</option>
                    <option value="Choque">Choque</option>
                    <option value="Luces encendidas">Luces encendidas</option>
                    <option value="Otro">Otro</option>
                </select>
                <label>Descripción:</label>
                <textarea name="descripcion" class="form-control"></textarea><br>
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
        </section>
    </div>

</body>
</html>