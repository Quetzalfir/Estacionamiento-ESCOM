<?php 
	include('config.php');
	session_start();
    $consulta = "INSERT INTO `tb_bitacora`(`horaEntrada`, `noCajon`, `IDConductor`, `fecha`, `sancion`, `IDVigilante`) VALUES ('"$_POST['horaEntrada']"','','','','','')";
    $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
	header("Location: ../tablaUsuarios.php", true, 301);
    exit();
    mysqli_close( $conexion );
 ?>