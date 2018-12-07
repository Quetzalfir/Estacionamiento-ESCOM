<?php 
	include("config.php"); // se inicia conexion a BD con la configuracion dada
	$query = "UPDATE `tb_conductor` SET `IDConductor`='".$_POST['IDConductor']."',`nombre`='".$_POST['nombre']."',`apellidoPat`='".$_POST['appat']."',`apellidoMat`='".$_POST['apmat']."',`telefono`='".$_POST['tel']."',`correo`='".$_POST['correo']."',`boletaRFC`='".$_POST['bole']."',`tipo`='".$_POST['tipo']."',`password`='".$_POST['pass']."' WHERE `IDConductor`= '".$_POST['IDConductor']."'";
	//consulta a base de datos
mysqli_query( $conexion, $query ) or die ( "Algo ha ido mal en la consulta a la base de datos");
	header("Location: ../tablaUsuarios.php", true, 301);
mysqli_close( $conexion ); // se cierra conexion a BD
?>