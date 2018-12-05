<?php 
	include('config.php');
	session_start();
	$query = "SELECT COUNT(*) AS num FROM `tb_cajon` WHERE `tipoCajon` = 'Discapacitado' AND `estado` = 1";
	if($resultado = $conexion->query($query)){
		$ret = mysqli_fetch_array($resultado);
		echo $ret['num'];
	}
	exit();
?>