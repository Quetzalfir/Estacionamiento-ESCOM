<?php 
	include('config.php');
	session_start(); // se crea o reanuda la sesion actual
	$query = "SELECT COUNT(*) AS num FROM `tb_cajon` WHERE `tipoCajon` = 'Discapacitado' AND `estado` = 1";
	if($resultado = $conexion->query($query)){
		$ret = mysqli_fetch_array($resultado); // convierte el resultado en un arreglo
		echo $ret['num'];
	}
	exit();
?>