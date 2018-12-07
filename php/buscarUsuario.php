<?php 
	include('config.php');

	$query = "SELECT `IDConductor` FROM `tb_conductor` WHERE `IDConductor` = '".$_POST["IDConductor"]."'";
	if($resultado = $conexion->query($query)){
		if($resultado->num_rows > 0) {
			echo "No disponible";
			exit();
		} else {
			echo "Disponible";
			exit();
		}
	}
?>