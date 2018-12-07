<?php 
	include("config.php"); // se inicia conexion a BD con la configuracion dada
	$query = "UPDATE `tb_reporte` SET `fechaReporte`='".$_POST['fechaReporte']."',`tipo`='".$_POST['tipo']."',`descripcion`='".$_POST['descripcion']."',`IDDenunciante`='".$_POST['IDDenunciante']."' WHERE `noReporte` = ".$_POST['noReporte']." AND `IDConductor` = '".$_POST['IDConductor']."'";
	//consulta a base de datos
mysqli_query( $conexion, $query ) or die ( "Algo ha ido mal en la consulta a la base de datos");
	header("Location: ../faltas.php", true, 301);
    mysqli_close( $conexion );
?>