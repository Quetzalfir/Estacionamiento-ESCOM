<?php 
	include("config.php"); // se inicia conexion a BD con la configuracion dada
	$query3 = "DELETE FROM `tb_reporte` WHERE `IDConductor` = '".$_GET['IDConductor']."'";
	$query2 = "DELETE FROM `tb_automovil` WHERE `IDConductor` = '".$_GET['IDConductor']."'";
	$query = "DELETE FROM `tb_conductor` WHERE `IDConductor` = '".$_GET['IDConductor']."'";
	echo $query;
	mysqli_query( $conexion, $query3 ) or die ( "Algo ha ido mal en la consulta a la base de datos2");
	mysqli_query( $conexion, $query2 ) or die ( "Algo ha ido mal en la consulta a la base de datos2");
	//consulta a base de datos
mysqli_query( $conexion, $query ) or die ( "Algo ha ido mal en la consulta a la base de datos1");
	header("Location: ../tablaUsuarios.php", true, 301);
mysqli_close( $conexion ); // se cierra conexion a BD
?>