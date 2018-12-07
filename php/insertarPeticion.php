<?php 
	include('config.php');
	session_start(); // se crea o reanuda la sesion actual
    $query = "INSERT INTO `tb_peticion`(`IDAdmin`, `IDConductor`,`aprobada`) VALUES ('admin','".$_SESSION['user']."',0)";
    $resultado = //consulta a base de datos
mysqli_query( $conexion, $query ) or die ( "Algo ha ido mal en la consulta a la base de datos");
	header("Location: ../solicitudUser.php", true, 301);
mysqli_close( $conexion ); // se cierra conexion a BD
    exit();

 ?>
