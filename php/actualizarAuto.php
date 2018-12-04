<?php 
	include("config.php");
	session_start();
	$query = "UPDATE `tb_automovil` SET `tipo`= '".$_POST['tipo']."',`modelo`= '".$_POST['modelo']."',`compania`= '".$_POST['compania']."',`colorAutomovil`= '".$_POST['colorAutomovil']."' WHERE `placas` = '".$_POST['placas']."'";
	mysqli_query( $conexion, $query ) or die ( "Algo ha ido mal en la consulta a la base de datos");
	if($_SESSION['tipo'] == 'Admin')
		header("Location: ../tablaAutoAdmin.php", true, 301);
    else
		header("Location: ../tablaAuto.php", true, 301);
    mysqli_close( $conexion );
?>