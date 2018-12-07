<?php 
	include('config.php');
	session_start(); // se crea o reanuda la sesion actual
	$query = "SELECT COUNT(*) AS num FROM `tb_automovil` WHERE `IDConductor` = '".$_SESSION['user']."'";
	if($resultado = $conexion->query($query)){
		$ret = mysqli_fetch_array($resultado);
		echo $ret['num'];
	}
?>