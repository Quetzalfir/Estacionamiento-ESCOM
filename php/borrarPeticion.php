<?php 
	include("config.php");
	session_start(); // se crea o reanuda la sesion actual
	$query = "DELETE FROM `tb_peticion` WHERE `noPeticion` = '".$_GET['noPeticion']."'";
	//consulta a base de datos
mysqli_query( $conexion, $query ) or die ( "Algo ha ido mal en la consulta a la base de datos");
	if($_SESSION['tipo'] == 'Admin'){
		header("Location: ../Administrador.php", true, 301);
	}
	else{
		header("Location: ../solicitudUser.php", true, 301);
	}
    mysqli_close( $conexion );
?>