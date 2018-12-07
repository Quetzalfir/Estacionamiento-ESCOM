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
    <script src="js/sorttable.js"></script>
    
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
        <!-- se optienen datos del usuario -->
        <h3>Bienvenido <?php echo $_SESSION['nombre'].' '.$_SESSION['apellidoPat'].' '.$_SESSION['apellidoMat']; ?></h3>
        <hr>
        <blockquote>
            En esta página puedes realziar reportes acerca de las infracciones o faltas que 
            se cometen en el estacionamiento de la ESCOM. <br>
            Por favor utiliza esta herramienta con responsabilidad, ya que los usuarios que 
            los usuarios que hagan mal uso de la misma serán sancionados.
            <footer>Atentamente la admistración de la ESCOM</footer>
        </blockquote>
        <br><hr><br>
        <h3>Actividad del usuario:</h3>
        <table class="table table-striped sortable">
            <tr>
                <th>IDBitacora</th>
                <th>Hora entrada</th>
                <th>Hora salida</th>
                <th>Número de cajon</th>
                <th>Fecha</th>
                <th>¿Tuvo sanción?</th>
                <th>Número reporte</th>  
                <th></th>
            </tr>
            <?php 
                include("php/config.php");
                $query = "SELECT `IDBitacora`, `horaEntrada`,`horaSalida`,`noCajon`,`fecha`,`sancion`,`noReporte`  FROM `tb_bitacora` WHERE `IDConductor` = '".$_SESSION['user']."'";
                
                $resultado = $conexion->query($query);
                while ($ret = mysqli_fetch_array($resultado)){ 
                    echo "<tr><td>".$ret['IDBitacora']."</td> <td>".$ret['horaEntrada']."</td><td>".$ret['horaSalida']."</td><td>".$ret['noCajon']."</td><td>".$ret['fecha']."</td><td>".(($ret['sancion'] == '1')?'SÍ':'NO')."</td><td>".$ret['noReporte']."</td><td><button type='button' class='btn btn-danger' data-toggle='modal' data-target='#myModal2' id='btnMapaCreado'> Ver sancion </button></td></tr> "; 
                    }
                 ?>       
        </table>
        <?php 
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
                                    $query = "SELECT `IDBitacora`, `horaEntrada`,`horaSalida`,`noCajon`,`fecha`,`sancion`,`noReporte`  FROM `tb_bitacora` WHERE `IDConductor` = '".$_SESSION['user']."'";
                                    
                                    $resultado = $conexion->query($query);
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
    </div>

</body>
</html>