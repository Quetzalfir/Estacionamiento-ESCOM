<?php
	include("config.php"); // se inicia conexion a BD cin la configuracion dada
	session_start(); // se crea o reanuda la sesion actual
	$query = "SELECT `imagenFondo` FROM `tb_mapa` WHERE `IDAdmin` = '".$_SESSION["user"]."'";
	if($resultado = $conexion->query($query)){
		if($resultado->num_rows>0) {
			$ret = mysqli_fetch_array($resultado); // convierte el resultado en un arreglo
			$imagenURL = $ret['imagenFondo'];
			echo base64_encode($imagenURL); 
		} else {
			echo "";
		}
	}
 ?>