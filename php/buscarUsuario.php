<?php 
	include('config.php'); // hace la conexion a BD con la configuracion dada

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