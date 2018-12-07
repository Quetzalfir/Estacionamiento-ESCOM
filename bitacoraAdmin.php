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
    <title>Bitacora</title>
    <!-- Dependencias bootstrap -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/sorttable.js"></script>

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

<div class="container-fluid">
    <h1>Bitacora general del estacionamiento</h1>
    <hr>
    <!-- css tabla, y js sortable para ordenar por columnas -->
<table class="table table-striped sortable">
        <thead>
            <tr>
                <th>IDBitacora</th>
                <th>Hora entrada</th>
                <th>Hora salida</th>
                <th>Número de cajon</th>
                <th>Fecha</th>
                <th>¿Tuvo sanción?</th>
                <th>Número reporte</th>
                <th>IDVigilante</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
            include("php/config.php"); // se acre la conexion a la BD con la configuracion dada
            $query = "SELECT `IDBitacora`, `horaEntrada`,`horaSalida`,`noCajon`,`fecha`,`sancion`,`noReporte`,IDVigilante  FROM `tb_bitacora` ORDER BY fecha";

            $resultado = $conexion->query($query); // se hace la busqueda en la base de datos
            while ($ret = mysqli_fetch_array($resultado)) {
                echo "<tr><td>" . $ret['IDBitacora'] . "</td> <td>" . $ret['horaEntrada'] . "</td><td>" . $ret['horaSalida'] . "</td><td>" . $ret['noCajon'] . "</td><td>" . $ret['fecha'] . "</td><td>" . (($ret['sancion'] == '1') ? 'SÍ' : 'NO') . "</td><td>" . $ret['noReporte'] . "</td><td>" . $ret['IDVigilante'] . "</td><td><button type='button' class='btn btn-danger' data-toggle='modal' data-target='#myModal2' id='btnMapaCreado'> Ver sancion </button></td></tr> ";
            }
            ?>
        </tbody>
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
                                        <th>Número reporte</th>
                                        <th>Fecha</th>
                                        <th>Tipo de falta</th>
                                        <th>Descripción</th>
                                        <th>Foto</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                  ";
    $query = "SELECT `IDBitacora`, `horaEntrada`,`horaSalida`,`noCajon`,`fecha`,`sancion`,`noReporte`  FROM `tb_bitacora` ORDER BY fecha";

    $resultado = $conexion->query($query); // se hace la busqueda en la base de datos
    $ret = mysqli_fetch_array($resultado); // convierte el resultado en un arreglo
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