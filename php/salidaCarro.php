<?php 
	include('config.php');
	if($_POST['sancion'] == '0')
    	$consulta = "UPDATE `tb_bitacora` SET `horaSalida`= '".$_POST['horaSalida']."', `sancion`='".$_POST['sancion']."',`noReporte`= NULL WHERE `IDBitacora` = '".$_POST['IDBitacora']."'";
    else{
    	$consulta = "UPDATE `tb_bitacora` SET `horaSalida`= '".$_POST['horaSalida']."', `sancion`='".$_POST['sancion']."',`noReporte`= '".$_POST['noReporte']."' WHERE `IDBitacora` = '".$_POST['IDBitacora']."'";
    }	
    mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
	header("Location: ../bitacoraVig.php", true, 301);
    mysqli_close( $conexion );
    exit();
 ?>