<?php 
	include("config.php");
	session_start(); // se crea o reanuda la sesion actual
	$query = "UPDATE `tb_conductor` SET `password`= '".$_POST['pass']."' WHERE `IDConductor` = '".$_SESSION['user']."'";
	mysqli_query( $conexion, $query ) or die ( "Algo ha ido mal en la consulta a la base de datos");
	if($_SESSION['tipo'] == 'Admin')
		header("Location: ../Administador.php", true, 301);
	else if($_SESSION['tipo'] == 'Admin')
		header("Location: ../Vigilante.php", true, 301);
	else
		header("Location: ../Usuario.php", true, 301);
    mysqli_close( $conexion );
?>