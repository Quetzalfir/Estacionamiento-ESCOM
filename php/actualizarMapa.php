<?php 
	include("config.php");
	session_start();
	$query = "UPDATE `tb_mapa` SET `JSONModel`  = '".$_POST['JSONModel']."' WHERE `IDAdmin` = '".$_SESSION["user"]."'";
	mysqli_query( $conexion, $query ) or die ( "Algo ha ido mal en la consulta a la base de datos");
	echo $_POST['JSONModel'];
    mysqli_close( $conexion );
?>