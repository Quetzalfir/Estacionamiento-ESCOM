<?php 
	include("config.php");
	$query = "DELETE FROM `tb_reporte` WHERE `noReporte` = ".$_GET['noReporte']." AND `IDConductor` = '".$_GET['IDConductor']."'";
	mysqli_query( $conexion, $query ) or die ( "Algo ha ido mal en la consulta a la base de datos");
	header("Location: ../faltas.php", true, 301);
    mysqli_close( $conexion );
?>