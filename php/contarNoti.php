<?php 
	include('config.php'); // hace la conexion a BD con la configuracion dada
	session_start(); // se crea o reanuda la sesion actual
	$query = "SELECT COUNT(*) AS num FROM `tb_peticion` WHERE `IDConductor` = '".$_SESSION['user']."'";
	if($resultado = $conexion->query($query)){
		$ret = mysqli_fetch_array($resultado); // convierte el resultado en un arreglo
		echo $ret['num'];
	}
?>