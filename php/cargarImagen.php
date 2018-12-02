<?php
	include("config.php"); 
	session_start();
	$query = "SELECT `imagenFondo` FROM `tb_mapa` WHERE `IDAdmin` = '".$_SESSION["user"]."'";
	if($resultado = $conexion->query($query)){
		if($resultado->num_rows>0)
		{
			$ret = mysqli_fetch_array($resultado);
			$tipo = $ret['imagenFondo'];
			echo base64_encode($tipo); 
		}else{
			echo "not_source";
		}
	}
 ?>