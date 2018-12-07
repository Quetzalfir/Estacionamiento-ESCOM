<?php 
    session_start(); // se crea o reanuda la sesion actual
    if(isset($_SESSION["tipo"])){
        if($_SESSION["tipo"] == "Alumno" || $_SESSION["tipo"] == "Profesor" || $_SESSION["tipo"] == "Vigilante" || $_SESSION["tipo"] == "Otro"){
          // si la sesion ya fue iniciada
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
    <title>Tabla de autos</title>
    <!-- Dependencias bootstrap -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/sorttable.js"></script>
    <script type="text/javascript">
        function disponible() { // validacion de campo dinamica
            $("#alertMax").hide();
            $.ajax({ // se actualiza dinamicamente con AJAX
                url : 'php/contarAutos.php',
                type : 'POST',
                dataType : 'html',
            }).done(function(resultado){
                if(parseInt(resultado, 10) >= 2){
                    console.log(resultado);
                    $("#btnNC").click(function () {$("#alertMax").show();$("#alertMax").hide(5000);return false;});
                } else {
                    console.log(resultado);
                    $("#btnNC").unbind('click');
                }
            });
        }
        window.addEventListener('load', disponible, false);
    </script>
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
        <h1>Tabla de automóviles de <?php echo $_SESSION['user']; ?></h1>
        <div class="alert alert-info">
          <strong>Informacion:</strong> Recuerda que sólo puedes registrar dos automóviles.
        </div>
        <hr>
        <!-- css tabla, y js sortable para ordenar por columnas -->
<table class="table table-striped sortable">
            <thead>
                <tr>
                    <th>Placas</th>
                    <th>Tipo</th>
                    <th>Modelo</th>
                    <th>Compañia</th>
                    <th>Color</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include("php/config.php"); // se acre la conexion a la BD con la configuracion dada
                    $query = "SELECT `placas`, `IDConductor`, `tipo`, `modelo`, `compania`, `colorAutomovil` FROM `tb_automovil` WHERE `IDConductor` = '".$_SESSION['user']."'";
                    $resultado = $conexion->query($query); // se hace la busqueda en la base de datos
                    $i = 1;
                    while ($ret = mysqli_fetch_array($resultado)){ // se llena la tabla con los datos obtenidos de la consulta
                        echo "<tr><td>".$ret['placas']."</td><td>".$ret['tipo']."</td><td>".$ret['modelo']."</td><td>".$ret['compania']."</td><td><input type='color' value = '".$ret['colorAutomovil']."' disabled></td><td><a class='btn btn-primary' role='button' href='actualizarAutoUser.php?placas=".$ret['placas']."&IDConductor=".$ret['IDConductor']."&tipo=".$ret['tipo']."&modelo=".$ret['modelo']."&compania=".$ret['compania']."&colorAutomovil=".$ret['colorAutomovil']."'>Editar</a></td><td> <button type='button' class='btn btn-danger' data-toggle='modal' data-target='#myModal".$i."' id='btnMapaCreado'>
                              Eliminar</button></td></tr>
                            <div class='modal' id='myModal".$i."' style='margin-top:150px;'>
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
                    $i++;
                    }
                 ?>
            </tbody>
        </table >
        <a href="registraCarro.php" class="btn btn-success" role="button" id='btnNC'>Agregar Nuevo Coche</a>
        
        <div class="alert alert-danger" id="alertMax">
            <strong>Error:</strong> Solo puedes ingresar dos automóviles.
        </div>
    </div>
</body>
</html>