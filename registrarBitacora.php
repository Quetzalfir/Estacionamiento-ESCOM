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
    <title>Registro bitacora</title>
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
        <h3>Registrar en bitacora</h3>
        <hr>
        <form action="php/entradaCarro.php" method="post" accept-charset="utf-8" class="form-horizontal">
            <label>Hora de entrada</label> 
            <input class="form-control" type="time" name="horaEntrada" min="7:00" max="23:00" required>
            <label>Cajon donde se estaciono</label> 
            <select name="noCajon" class="form-control">  
                <?php
                include("php/config.php"); // se acre la conexion a la BD con la configuracion dada
                    $query = "SELECT `noCajon` FROM `tb_cajon` WHERE `tipoCajon` != 'Discapacitado' AND `estado` = '0'";
                    $resultado = $conexion->query($query); // se hace la busqueda en la base de datos
                    while ($ret = mysqli_fetch_array($resultado)){ // se llena la tabla con los datos obtenidos de la consulta
                        echo "<option value='".$ret['noCajon']."' >".$ret['noCajon']."</option>";
                    }
                ?>
            </select>
            <label>Placas del carro</label> 
            <select name="placas" class="form-control">  
                <?php
                include("php/config.php"); // se acre la conexion a la BD con la configuracion dada
                    $query = "SELECT `placas` FROM `tb_automovil`";
                    $resultado = $conexion->query($query); // se hace la busqueda en la base de datos
                    while ($ret = mysqli_fetch_array($resultado)){ // se llena la tabla con los datos obtenidos de la consulta
                        echo "<option value='".$ret['placas']."' >".$ret['placas']."</option>";
                    }
                ?>
            </select><br>
            <div class="form-group row">
                <div class="col-xs-6">
                    <a href="bitacoraVig.php" class="btn btn-danger" role='button' style="width: 100%;">Cancelar</a>
                </div>
                <div class="col-xs-6">
                    <input class="form-control btn btn-primary" type="submit" value="Registrar">
                </div>
            </div>
        </form>
    </div>

</body>
</html>