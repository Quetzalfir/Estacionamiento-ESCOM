<?php 
	include('config.php');
	session_start();
	$query = "SELECT COUNT(*) AS num FROM `tb_peticion` WHERE `IDConductor` = '".$_SESSION['user']."'";
	if($resultado = $conexion->query($query)){
		$ret = mysqli_fetch_array($resultado);
		echo $ret['num'];
	}
?>