<?php 
	include("config.php");
	$query = "UPDATE `tb_conductor` SET `noCajon`= NULL  WHERE `IDConductor`= '".$_GET['IDConductor']."'";
	//echo $query."<br>";
	$query1 = "UPDATE `tb_cajon` SET `estado`= 0 WHERE `noCajon` = '".$_GET['noCajon']."'";
	//echo $query1."<br>";

	$query2 = "UPDATE `tb_peticion` SET `aprobada`= 0, `info`= '' WHERE `IDConductor` = '".$_GET['IDConductor']."'";
	//echo $query2."<br>";
	mysqli_query( $conexion, $query ) or die ( "Algo ha ido mal en la consulta a la base de datos1");
	mysqli_query( $conexion, $query1 ) or die ( "Algo ha ido mal en la consulta a la base de datos2");
	mysqli_query( $conexion, $query2 ) or die ( "Algo ha ido mal en la consulta a la base de datos3");
	header("Location: ../solicitudAdmin.php", true, 301);
    mysqli_close( $conexion );
?>