<?php 
	include("config.php");
	session_start(); // se crea o reanuda la sesion actual
	$query = "UPDATE `tb_mapa` SET `JSONModel`  = '".$_POST['JSONModel']."' WHERE `IDAdmin` = '".$_SESSION["user"]."'";
	//consulta a base de datos
mysqli_query( $conexion, $query ) or die ( "Algo ha ido mal en la consulta a la base de datos");
    mysqli_close( $conexion );
?>