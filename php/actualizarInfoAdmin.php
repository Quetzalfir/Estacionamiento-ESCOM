<?php 
	include("config.php"); // se inicia conexion a BD cin la configuracion dada
	session_start(); // se crea o reanuda la sesion actual
	$query = "UPDATE `tb_conductor` SET `nombre`='".$_POST['nombre']."',`apellidoPat`='".$_POST['appat']."',`apellidoMat`='".$_POST['apmat']."',`telefono`='".$_POST['tel']."',`correo`='".$_POST['correo']."',`boletaRFC`='".$_POST['bole']."' WHERE `IDConductor`= '".$_SESSION['user']."'";
	//consulta a base de datos
mysqli_query( $conexion, $query ) or die ( "Algo ha ido mal en la consulta a la base de datos");
	$_SESSION["nombre"] = $_POST['nombre'];
	$_SESSION["apellidoPat"] = $_POST['appat'];
	$_SESSION["apellidoMat"] = $_POST['apmat'];
	$_SESSION["correo"] = $_POST['correo'];
	$_SESSION["telefono"] = $_POST['tel'];
	$_SESSION["boletaRFC"] = $_POST['bole'];
	header("Location: ../Administrador.php", true, 301);
mysqli_close( $conexion ); // se cierra conexion a BD
    exit();
?>