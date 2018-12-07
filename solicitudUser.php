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
    <title>Tabla de autos</title>
    <!-- Dependencias bootstrap -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/sorttable.js"></script>
    
    <script type="text/javascript">
        function disponible() {
            $("#alertMax").hide();
            $.ajax({
                url : 'php/contarNoti.php',
                type : 'POST',
                dataType : 'html',
            }).done(function(resultado){
                if(parseInt(resultado, 10) >= 1){
                    console.log(resultado);
                    $("#btnNC").click(function () {$("#alertMax").show();$("#alertMax").hide(5000);return false;});
                }
                else{
                    console.log(resultado);
                    $("#btnNC").unbind('click');
                }
            });
        }
        window.addEventListener('load', disponible, false);
    </script>
</head>
<bodu>

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
                <li><a href="tablaAuto.php">Tabla automóviles</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
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
        <h1>Realizar solicitud para asignación de cajón para discapacitado</h1>
        <div class="alert alert-info">
          <strong>Informacion:</strong> Una vez aprobado tu solicitud deberas dirigirte a gestión escolar para 
          entregar los papeles corresponidentes. (Recuerda que contamos con un número límitado de cajones)
        </div>
        <hr>
        <table class="table table-striped sortable">
            <tr>
                <th>Número de petición</th>
                <th>Estado</th>
                <th>Información</th>
                <th></th>
            </tr>
            <?php 
                include("php/config.php");
                $query = "SELECT `noPeticion`, `aprobada`, `info` FROM `tb_peticion` WHERE `IDConductor`= '".$_SESSION['user']."'";
                $resultado = $conexion->query($query);
                while ($ret = mysqli_fetch_array($resultado)){ 
                    echo "<tr><td>".$ret['noPeticion']."</td><td>".(($ret['aprobada'] == '1')?'Aprobada':'No aprobada')."</td><td>".$ret['info']."</td><td> <button type='button' class='btn btn-danger' data-toggle='modal' data-target='#myModal2' id='btnMapaCreado'>
                          Cancelar</button></td></tr>
                        <div class='modal' id='myModal2' style='margin-top:150px;'>
                          <div class='modal-dialog'>
                            <div class='modal-content'>

                              <!-- Modal Header -->
                              <div class='modal-header'>
                                <h3 class='modal-title'>Cancelar petición</h3>
                                <button type='button' class='close' data-dismiss='modal'>&times;</button>
                              </div>

                              <!-- Modal body -->
                              <div class='modal-body'>
                                <h5>¿Deseas cancelar la petición?</h5>
                                <form class='form-horizontal' action=' method='get' accept-charset='utf-8'>
                                    <a href='php/borrarPeticion.php?noPeticion=".$ret['noPeticion']."' role ='button' class='btn btn-success'>SÍ</a>
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
        <a href="php/insertarPeticion.php" class="btn btn-success" role="button" id='btnNC'>Solicitar cajón para discapacitado</a>
        
        <div class="alert alert-danger" id="alertMax">
            <strong>Error:</strong> Solo puedes enviar una solictud.
        </div>
    </div>
</body>
</html>