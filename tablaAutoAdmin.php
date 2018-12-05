<?php 
    session_start();
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
    <meta charset="UTF-8">
    <title>Tabla de autos</title>
    <!-- Dependencias bootstrap -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
        <h1>Tabla de automóviles</h1>
        <hr>
        <table class="table table-striped">
            <tr>
                <th>Placas</th>
                <th>IDConductor</th>
                <th>Tipo</th>
                <th>Modelo</th>
                <th>Compañia</th>
                <th>Color</th>
                <th></th>
                <th></th>
            </tr>
            <?php 
                include("php/config.php");
                $query = "SELECT `placas`, `IDConductor`, `tipo`, `modelo`, `compania`, `colorAutomovil` FROM `tb_automovil` GROUP BY `IDConductor`";
                $resultado = $conexion->query($query);
                while ($ret = mysqli_fetch_array($resultado)){ 
                    echo "<tr><td>".$ret['placas']."</td><td>".$ret['IDConductor']."</td> <td>".$ret['tipo']."</td><td>".$ret['modelo']."</td><td>".$ret['compania']."</td><td><input type='color' value = '".$ret['colorAutomovil']."' disabled></td><td><a class='btn btn-primary' role='button' href='actualizarAuto.php?placas=".$ret['placas']."&IDConductor=".$ret['IDConductor']."&tipo=".$ret['tipo']."&modelo=".$ret['modelo']."&compania=".$ret['compania']."&colorAutomovil=".$ret['colorAutomovil']."'>Editar</a></td><td> <button type='button' class='btn btn-danger' data-toggle='modal' data-target='#myModal2' id='btnMapaCreado'>
                          Eliminar</button></td></tr>
                        <div class='modal' id='myModal2' style='margin-top:150px;'>
                          <div class='modal-dialog'>
                            <div class='modal-content'>

                              <!-- Modal Header -->
                              <div class='modal-header'>
                                <h3 class='modal-title'>Eliminar automóvil</h3>
                                <button type='button' class='close' data-dismiss='modal'>&times;</button>
                              </div>

                              <!-- Modal body -->
                              <div class='modal-body'>
                                <h5>¿Desea borrar el coche de placas <b>".$ret['placas']."</b> del usuario <b>".$ret['IDConductor']."</b>?</h5>
                                <form class='form-horizontal' action=' method='get' accept-charset='utf-8'>
                                    <a href='php/borrarAuto.php?placas=".$ret['placas']."' role ='button' class='btn btn-success'>SÍ</a>
                                    <button type='button' class='btn btn-danger' data-dismiss='modal'>No</button>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                    
                    "; 
                } 
             ?>
                
        </table >
    </div>
</body>
</html>