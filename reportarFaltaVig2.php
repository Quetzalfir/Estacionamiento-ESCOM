<?php 
    session_start(); // se crea o reanuda la sesion actual
    if(isset($_SESSION["tipo"])){
        if($_SESSION["tipo"] != "Vigilante"){
            header("Location: index.html", true, 301);
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
              <a class="navbar-brand" href="Vigilante.php">Estacionamiento ESCOM</a>
          </div>
          <ul class="nav navbar-nav">
              <li><a href="Vigilante.php">Inicio</a></li>
              <li><a href="MapaVigilante.php">Mapa</a></li>
              <li><a href="reportarFaltaVig.php">Reportar falta</a></li>
              <li><a href="bitacoraVig.php">Bitacora</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
              <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $_SESSION['user'];?>  <img src="img/usuario.png" class="img-circle" alt="Cinque Terre" width="25" height="25"></a>
                  <ul class="dropdown-menu">
                      <li><a href="OpcionesVig.php">Configuración</a></li>
                      <li><a href="cambiarPassVig.php">Cambiar Contraseña</a></li>
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
            <input class="form-control" type="text" name="placas" pattern="[A-Z]{3}[-]\d{3}" readonly value=<?php echo "'".$_GET['placas']."'"; ?>> <br>
            <label style="display: inline-block">Tipo:&nbsp;&nbsp;&nbsp;</label>
            <select name="tipo" class="form-control">
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
                    <a href="bitacoraVig.php" class="btn btn-danger" role="button" style="width: 100%;">Cancelar</a>
                </div>
                <div class="col-xs-6">
                    <input class="form-control btn btn-primary" type="submit" value="Realizar reporte">
                </div>
            </div>
        </form>
    </div>

</body>
</html>