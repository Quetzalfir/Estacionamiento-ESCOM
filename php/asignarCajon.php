<?php 
	include("config.php");
	$query = "UPDATE `tb_conductor` SET `noCajon`= '".$_POST['noCajon']."'  WHERE `IDConductor`= '".$_POST['IDConductor']."'";
	$query1 = "UPDATE `tb_cajon` SET `estado`= 1 WHERE `noCajon` = '".$_POST['noCajon']."'";
	$query2 = "UPDATE `tb_peticion` SET `aprobada`= 1, `info`= '".$_POST['noCajon']."' WHERE `IDConductor` = '".$_POST['IDConductor']."'";
	mysqli_query( $conexion, $query ) or die ( "Algo ha ido mal en la consulta a la base de datos");
	mysqli_query( $conexion, $query1 ) or die ( "Algo ha ido mal en la consulta a la base de datos");
	mysqli_query( $conexion, $query2 ) or die ( "Algo ha ido mal en la consulta a la base de datos");
	header("Location: ../solicitudAdmin.php", true, 301);
    mysqli_close( $conexion );
?>