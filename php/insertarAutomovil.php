<?php 
	include('config.php'); // hace la conexion a BD con la configuracion dada
    $consulta = "";
    $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
	header("Location: ../tablaUsuarios.php", true, 301);
mysqli_close( $conexion ); // se cierra conexion a BD
    exit();

 ?>