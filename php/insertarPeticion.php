<?php 
	include('config.php');
	session_start();
    $query = "INSERT INTO `tb_peticion`(`IDAdmin`, `IDConductor`,`aprobada`) VALUES ('admin','".$_SESSION['user']."',0)";
    $resultado = mysqli_query( $conexion, $query ) or die ( "Algo ha ido mal en la consulta a la base de datos");
	header("Location: ../solicitudUser.php", true, 301);
    exit();
    mysqli_close( $conexion );
 ?>