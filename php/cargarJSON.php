<?php
	include("config.php"); 
	session_start(); // se crea o reanuda la sesion actual
	$query = "SELECT `JSONModel` FROM `tb_mapa` WHERE `IDAdmin` = '".$_SESSION["user"]."'";
	if($resultado = $conexion->query($query)){
		if($resultado->num_rows>0)
		{
			$ret = mysqli_fetch_array($resultado);
			$JSONString = $ret['JSONModel'];
			echo $JSONString; 
		}else{
			echo '';
		}
	}
 ?>