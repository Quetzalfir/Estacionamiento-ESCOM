<?php 
	include("config.php");
	$query = "DELETE FROM `tb_conductor` WHERE `IDConductor`= '".$_GET['IDConductor']."'";
	mysqli_query( $conexion, $query ) or die ( "Algo ha ido mal en la consulta a la base de datos");
	header("Location: ../tablaUsuarios.php", true, 301);
    mysqli_close( $conexion );
?>