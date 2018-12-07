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
    <title>Bitacora</title>
    <!-- Dependencias bootstrap -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/sorttable.js"></script>
    
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

    <div class="container-fluid">
        <h1>Bitacora del estacionamiento</h1>
        <table class="table table-striped sortable">
            <tr>
                <th>IDBitacora</th>
                <th>Hora entrada</th>
                <th>Hora salida</th>
                <th>Número de cajon</th>
                <th>Fecha</th>
                <th>¿Tuvo sanción?</th>
                <th>Número reporte</th> 
                <th>IDConductor</th>  
                <th></th>
                <th></th>
            </tr>
            <?php 
                include("php/config.php"); // se acre la conexion a la BD con la configuracion dada
                $query = "SELECT `IDBitacora`, `horaEntrada`,`horaSalida`,`noCajon`,`fecha`,`sancion`,`noReporte`, IDConductor  FROM `tb_bitacora` WHERE IDVigilante = '".$_SESSION['user']."' ORDER BY fecha DESC";
                
                $resultado = $conexion->query($query); // se hace la busqueda en la base de datos
                while ($ret = mysqli_fetch_array($resultado)){ 
                    echo "<tr><td>".$ret['IDBitacora']."</td> <td>".$ret['horaEntrada']."</td><td>".$ret['horaSalida']."</td><td>".$ret['noCajon']."</td><td>".$ret['fecha']."</td><td>".(($ret['sancion'] == '1')?'SÍ':'NO')."</td><td>".$ret['noReporte']."</td><td>".$ret['IDConductor']."</td><td><a href='registraSalida.php?IDBitacora=".$ret['IDBitacora']."&horaEntrada=".$ret['horaEntrada']."&IDConductor=".$ret['IDConductor']."' class = 'btn btn-success' role='button'>Registra Salida</a></td><td>".(($ret['sancion'] == '1')?"<button type='button' class='btn btn-danger' data-toggle='modal' data-target='#myModal2' id='btnMapaCreado'> Ver sancion </button>":"<button type='button' class='btn btn-danger' data-toggle='modal' data-target='#myModal2' id='btnMapaCreado' disabled> Ver sancion </button>")."</td></tr> "; 
                    }
                 ?>       
        </table>
        <?php 
            // script prara visualizar los detalles del reporte
            echo "
                        <div class='modal' id='myModal2' style='margin-top:150px;'>
                          <div class='modal-dialog modal-lg'>
                            <div class='modal-content'>

                      <!-- Modal Header -->
                      <div class='modal-header'>
                        <h3 class='modal-title'>Visualizar reporte</h3>
                        <button type='button' class='close' data-dismiss='modal'>&times;</button>
                      </div>

                      <!-- Modal body -->
                      <div class='modal-body'>
                          <table class='table table-striped table-condensed'>
                            <tr>
                                <th>Placas</th>
                                <th>Tipo</th>
                                <th>Modelo</th>
                                <th>Compañia</th>
                                <th>Color</th>
                                <th></th>
                                <th></th>
                            </tr>
                          ";
                            $query = "SELECT `IDBitacora`, `horaEntrada`,`horaSalida`,`noCajon`,`fecha`,`sancion`,`noReporte`  FROM `tb_bitacora` ORDER BY fecha";
                            
                            $resultado = $conexion->query($query); // se hace la busqueda en la base de datos
                            $ret = mysqli_fetch_array($resultado);
                            $query2 = "SELECT * FROM tb_reporte WHERE noReporte = '".$ret['noReporte']."'";
                            $resultado2 = $conexion->query($query2);
                            while ($ret2 = mysqli_fetch_array($resultado2)){ 
                                echo "<tr><td>".$ret2['noReporte']."</td> <td>".$ret2['fechaReporte']."</td><td>".$ret2['tipo']."</td><td>".$ret2['descripcion']."</td><td> <img style='width: 50px; height: 50px;'' src='data:image/jpeg;base64,". base64_encode($ret2['imagen']). "'/> </td></tr>"; 
                            } 
                          echo "
                          </table>
                      </div>
                      <div class='modal-footer'>
                            <button type='button' class='btn btn-danger' data-dismiss='modal'>Cerrar</button>
                      </div>

                    </div>
                  </div>
                </div>";
         ?>
         <a href="registrarBitacora.php" class='btn btn-success' role='button'>Nuevo registro</a>
    </div>

</body>
</html>