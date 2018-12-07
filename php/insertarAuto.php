<?php 
	include('config.php'); // hace la conexion a BD con la configuracion dada
	session_start(); // se crea o reanuda la sesion actual
    $consulta = "INSERT INTO `tb_automovil`(`placas`, `IDConductor`, `tipo`, `modelo`, `compania`, `colorAutomovil`) VALUES ('".$_POST['placas']."','".$_SESSION['user']."','".$_POST['tipo']."','".$_POST['modelo']."','".$_POST['compania']."','".$_POST['colorAutomovil']."')";
    $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
	header("Location: ../tablaAuto.php", true, 301);
mysqli_close( $conexion ); // se cierra conexion a BD
    exit();

 ?>