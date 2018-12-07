<?php 
	include("config.php");
	session_start(); // se crea o reanuda la sesion actual
	if($_GET['value'] == '1'){
		$query = "UPDATE `tb_conductor` SET `autorizado`= 0 WHERE `IDConductor` = '".$_GET['IDConductor']."'";
	}else{
		$query = "UPDATE `tb_conductor` SET `autorizado`= 1 WHERE `IDConductor` = '".$_GET['IDConductor']."'";
	}
	
	//consulta a base de datos
mysqli_query( $conexion, $query ) or die ( "Algo ha ido mal en la consulta a la base de datos");
	header("Location: ../tablaUsuarios.php", true, 301);
    mysqli_close( $conexion );
?>