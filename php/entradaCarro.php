<?php 
	include('config.php');
	session_start(); // se crea o reanuda la sesion actual
	$query = "SELECT `IDConductor` FROM `tb_automovil` WHERE `placas` = '".$_POST['placas']."'";
	if($res = $conexion->query($query))
		if($res->num_rows>0)
			$ret = mysqli_fetch_array($res);
	
    $consulta = "INSERT INTO `tb_bitacora`(`horaEntrada`, `noCajon`, `IDConductor`, `fecha`, `sancion`, `IDVigilante`) VALUES ('".$_POST['horaEntrada']."','".$_POST['noCajon']."','".$ret['IDConductor']."','". date("Y/n/j") ."','0','".$_SESSION['user']."')";
    mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
	header("Location: ../bitacoraVig.php", true, 301);
mysqli_close( $conexion ); // se cierra conexion a BD
    exit();
 ?>