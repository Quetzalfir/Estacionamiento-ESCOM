<?php 
	include("config.php");
	session_start();
	$query = "DELETE FROM `tb_automovil` WHERE `placas` = '".$_GET['placas']."'";
	mysqli_query( $conexion, $query ) or die ( "Algo ha ido mal en la consulta a la base de datos");
	if($_SESSION['tipo'] == 'Admin'){
		header("Location: ../tablaAutoAdmin.php", true, 301);
	}
	else{
		header("Location: ../tablaAuto.php", true, 301);
	}
    mysqli_close( $conexion );
?>