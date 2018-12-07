<?php 
    session_start(); // se crea o reanuda la sesion actual
    if(isset($_SESSION["tipo"])){
        if($_SESSION["tipo"] != "Admin"){ // si le usuario no es Admin
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
    <title>Solicitud Admin</title>
    <!-- Dependencias bootstrap -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/sorttable.js"></script>
     <script type="text/javascript">
        function disponible() { // validacion de campo dinamica
            $("#alertMax").hide();
            $.ajax({ // se actualiza dinamicamente con AJAX
                url : 'php/contarCajones.php',
                type : 'POST',
                dataType : 'html',
            }).done(function(resultado){

                if(parseInt(resultado, 10) >= 5){
                    console.log(resultado);
                    $("#asignar").click(function () {$("#alertMax").show();$("#alertMax").hide(5000);return false;});
                }
                else{
                    console.log(resultado);
                    $("#asignar").unbind('click');
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
                <!-- extremo derecho de la barra -->
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
        <h1>Solicitudes de cajones para discapacitados</h1>
        <div class="alert alert-info">
          <strong>Informacion:</strong> Recuerda que contamos con un número límitado de cajones. 
        </div>
        <hr>
        <!-- css tabla, y js sortable para ordenar por columnas -->
<table class="table table-striped sortable">
            <tr>
                <th>Número de petición</th>
                <th>ID de conductor</th>
                <th>Estado</th>
                <th>Cajón asignado</th>
                <th></th>
            </tr>
            <?php 
                include("php/config.php"); // se acre la conexion a la BD con la configuracion dada
                $query = "SELECT `noPeticion`, IDConductor, `aprobada`, `info` FROM `tb_peticion` ";
                $resultado = $conexion->query($query); // se hace la busqueda en la base de datos

                $i = 1;
                while ($ret = mysqli_fetch_array($resultado)){ // se llena la tabla con los datos obtenidos de la consulta
                    $query2 = "SELECT noCajon FROM `tb_cajon` WHERE estado = '0' AND `tipoCajon` = 'Discapacitado' ";           
                    $resultado2 = $conexion->query($query2);
                    echo "
                        
                        <tr><td>".$ret['noPeticion']."</td><td>".$ret['IDConductor']."</td><td>".(($ret['aprobada'] == '1')?'Aprobada':'No aprobada')."</td><td>".$ret['info']."</td><td>".(($ret['aprobada'] == '1')?"<a role='button' class='btn btn-danger' href ='php/quitarCajon.php?noCajon=".$ret['info']."&IDConductor=".$ret['IDConductor']."'>
                          Quitar asignación</a>":"<button type='button' class='btn btn-primary' data-toggle='modal' id='asignar' data-target='#myModal".$i."'>
                          Asigar cajón</button>")." </td></tr>
                        <div class='modal' id='myModal".$i."' style='margin-top:150px;'>
                          <div class='modal-dialog'>
                            <div class='modal-content'>

                              <!-- Modal Header -->
                              <div class='modal-header'>
                                <h3 class='modal-title'>Asignar cajón</h3>
                                <button type='button' class='close' data-dismiss='modal'>&times;</button>
                              </div>

                              <!-- Modal body -->
                              <div class='modal-body'>
                                <h5>Selecciona uno de los cajones disponibles: </h5>
                                <form class='form-horizontal'  method='post' accept-charset='utf-8' action='php/asignarCajon.php'>
                                    <label>Nombre de usuario:</label>
                                    <input class='form-control' type='text' name='IDConductor' value='".$ret['IDConductor']."' readonly>
                                    <label>Número del cajón:</label>
                                    <select name='noCajon' class='form-control'>";
                                        while ($ret2 = mysqli_fetch_array($resultado2)){
                                            echo "<option value='".$ret2['noCajon']."' >".$ret2['noCajon']."</option>";
                                        }
                                    echo "</select><br>
                                     <div class='form-group row'>
                                        <div class='col-xs-6'>
                                            <button class='form-control btn btn-danger' data-dismiss='modal'>Cancelar</button>
                                        </div>
                                        <div class='col-xs-6'>
                                            <input class='form-control btn btn-primary' type='submit' value='Asignar cajon'>
                                        </div>
                                    </div>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                    
                    ";
                    $i++; 
                } 
             ?>
        </table >
        
        <div class="alert alert-danger" id="alertMax">
            <strong>Error:</strong> Ya no hay cajones disponibles.
        </div>
    </div>
</body>
</html>