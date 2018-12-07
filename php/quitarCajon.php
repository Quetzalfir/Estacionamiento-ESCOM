<?php 
	include("config.php"); // se inicia conexion a BD con la configuracion dada
	$query = "UPDATE `tb_conductor` SET `noCajon`= NULL  WHERE `IDConductor`= '".$_GET['IDConductor']."'";
	//echo $query."<br>";
	$query1 = "UPDATE `tb_cajon` SET `estado`= 0 WHERE `noCajon` = '".$_GET['noCajon']."'";
	//echo $query1."<br>";

	$query2 = "UPDATE `tb_peticion` SET `aprobada`= 0, `info`= 'Se te ha quitado la asignacion' WHERE `IDConductor` = '".$_GET['IDConductor']."'";
	//echo $query2."<br>";
	//consulta a base de datos
    mysqli_query( $conexion, $query ) or die ( "Algo ha ido mal en la consulta a la base de datos1");
	mysqli_query( $conexion, $query1 ) or die ( "Algo ha ido mal en la consulta a la base de datos2");
	mysqli_query( $conexion, $query2 ) or die ( "Algo ha ido mal en la consulta a la base de datos3");
	//header("Location: ../solicitudEliminada.php", true, 301);
	echo '
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
                <a class="navbar-brand" href="../Administrador.php">Estacionamiento ESCOM</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="../Administrador.php">Inicio</a></li>
                <li><a href="../MapaAdmin.php">Mapa</a></li>
                <li><a href="../tablaAutoAdmin.php">Automoviles</a></li>
                <li><a href="../tablaUsuarios.php">Usuarios</a></li>
                <li><a href="../faltas.php">Faltas</a></li>
                <li><a href="../bitacoraAdmin.php">Bitacora</a></li>
                <li><a href="../solicitudAdmin.php">Solicitudes de usuarios</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="../#"><?php echo $_SESSION["user"];?>  <img src="../img/usuario.png" class="img-circle" alt="Cinque Terre" width="25" height="25"></a>
                    <ul class="dropdown-menu">
                        <li><a href="../OpcionesAdmin.php">Configuración</a></li>
                        <li><a href="../cambiarPassAdmin.php">Cambiar contraseña</a></li>
                        <li><a href="../php/logout.php">Cerrar Sesión</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>  

    <div class="container">
        <h1>¡Se elimino correctamente la asignación del cajón.!</h1><br>
        <div class="alert alert-info">
          <strong>Informacion:</strong> Se notificara al usuario
        </div>
        <hr>
        <a href="../solicitudAdmin.php" class="form-control btn btn-info">Volver</a>
    </div>

</body>
</html>
	';
    exit();
?>