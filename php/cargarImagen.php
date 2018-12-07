<?php
	include("config.php"); 
	session_start(); // se crea o reanuda la sesion actual
	$query = "SELECT `imagenFondo` FROM `tb_mapa` WHERE `IDAdmin` = '".$_SESSION["user"]."'";
	if($resultado = $conexion->query($query)){
		if($resultado->num_rows>0)
		{
			$ret = mysqli_fetch_array($resultado);
			$imagenURL = $ret['imagenFondo'];
			echo base64_encode($imagenURL); 
		}else{
			echo "";
		}
	}
 ?>