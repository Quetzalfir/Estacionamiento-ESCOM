<?php 
	include('config.php');
	session_start();
    $consulta = "INSERT INTO `tb_automovil`(`placas`, `IDConductor`, `tipo`, `modelo`, `compania`, `colorAutomovil`) VALUES ('".$_POST['placas']."','".$_SESSION['user']."','".$_POST['tipo']."','".$_POST['modelo']."','".$_POST['compania']."','".$_POST['colorAutomovil']."')";
    $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
	header("Location: ../tablaAuto.php", true, 301);
    exit();
    mysqli_close( $conexion );
 ?>