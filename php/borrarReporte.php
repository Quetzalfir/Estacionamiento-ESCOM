<?php 
	include("config.php"); // se inicia conexion a BD con la configuracion dada
	$query = "DELETE FROM `tb_reporte` WHERE `noReporte` = ".$_GET['noReporte'];
	//consulta a base de datos
mysqli_query( $conexion, $query ) or die ( "Algo ha ido mal en la consulta a la base de datos");
	header("Location: ../faltas.php", true, 301);
mysqli_close( $conexion ); // se cierra conexion a BD
?>