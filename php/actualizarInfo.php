<?php 
	include("config.php");
	session_start();
	$query = "UPDATE `tb_conductor` SET `nombre`='".$_POST['nombre']."',`apellidoPat`='".$_POST['appat']."',`apellidoMat`='".$_POST['apmat']."',`telefono`='".$_POST['tel']."',`correo`='".$_POST['correo']."',`boletaRFC`='".$_POST['bole']."',`tipo`='".$_POST['tipo']."' WHERE `IDConductor`= '".$_SESSION['user']."'";
	mysqli_query( $conexion, $query ) or die ( "Algo ha ido mal en la consulta a la base de datos");
	$_SESSION["nombre"] = $_POST['nombre'];
	$_SESSION["apellidoPat"] = $_POST['appat'];
	$_SESSION["apellidoMat"] = $_POST['apmat'];
	$_SESSION["correo"] = $_POST['correo'];
	$_SESSION["telefono"] = $_POST['tel'];
	$_SESSION["boletaRFC"] = $_POST['bole'];
	$_SESSION["tipo"] = $_POST['tipo'];
	header("Location: ../Usuario.php", true, 301);
    mysqli_close( $conexion );
    exit();
?>