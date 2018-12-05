<?php 
	$usuario = "root";
    $contrasena = "";  // en mi caso tengo contraseña pero en casa caso introducidla aquí.
    $servidor = "localhost";
    $basededatos = "db_estacionamiento";
    $conexion = mysqli_connect( $servidor, $usuario, $contrasena ) or die ("ERROR DB: No se ha podido conectar al servidor de Base de datos");
    $db = mysqli_select_db( $conexion, $basededatos ) or die ( "ERROR DB: No se pudo conectrar con la pase de datos" );
 ?>