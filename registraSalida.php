<?php 
    session_start();
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
    <meta charset="UTF-8">
    <title>Registro bitacora</title>
    <!-- Dependencias bootstrap -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $(".container form [name=noReporte]").hide();
            $("#lbl").hide();
            $("#alertMax").hide();
            $(".container form [name=sancion]").on("change", function() {
              var val = $(this).val();

              if (val == "0") {
                    $("#lbl").hide();
                    $("#alertMax").hide();
                    $(".container form [name=noReporte]").hide();
              } else {
                    $("#lbl").show();
                     $("#alertMax").show();
                    $(".container form [name=noReporte]").show();
              }
            });
        });
    </script>
</head>

<body>
    
      <nav class="navbar navbar-inverse">
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
            <label>Hora de salida</label> 
            <input class="form-control" type="time" name="horaSalida" min="7:00" max="23:00" required>
            <label>¿Tuvo algun reporte?</label>
            <select name="sancion" class="form-control">
              <option value="0">NO</option>
              <option value="1">SÍ</option>
            </select>
            <label id="lbl">No reporte</label> 
            <select class="form-control" name="noReporte" class="form-control">  
                <?php
                include("php/config.php");
                    $query = "SELECT `noReporte`, IDConductor FROM `tb_reporte`";
                    $resultado = $conexion->query($query);
                    while ($ret = mysqli_fetch_array($resultado)){
                        echo "<option value='".$ret['noReporte']."-".$ret['IDConductor']."' >".$ret['noReporte']."-".$ret['IDConductor']."</option>";
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
        </form><br>
        <div class="alert alert-info" id="alertMax">
            <strong>Nota:</strong> Primero tienes que hacer el reporte.
        </div>
    </div>

</body>
</html>