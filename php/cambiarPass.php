<?php 
	include("config.php"); // se inicia conexion a BD cin la configuracion dada
	session_start(); // se crea o reanuda la sesion actual
	$query = "UPDATE `tb_conductor` SET `password`= '".$_POST['pass']."' WHERE `IDConductor` = '".$_SESSION['user']."'";
	//consulta a base de datos
mysqli_query( $conexion, $query ) or die ( "Algo ha ido mal en la consulta a la base de datos");
	if($_SESSION['tipo'] == 'Admin')
		header("Location: ../Administador.php", true, 301);
	else if($_SESSION['tipo'] == 'Vigilante')
		header("Location: ../Vigilante.php", true, 301);
	else
		header("Location: ../Usuario.php", true, 301);
mysqli_close( $conexion ); // se cierra conexion a BD
?>