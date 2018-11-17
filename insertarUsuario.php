<?php 
	 $usuario = "root";
    $contrasena = "";  // en mi caso tengo contraseña pero en casa caso introducidla aquí.
    $servidor = "localhost";
    $basededatos = "db_estacionmiento";
    $conexion = mysqli_connect( $servidor, $usuario, $contrasena ) or die ("No se ha podido conectar al servidor de Base de datos");
    $db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );
    /*$consulta = "INSERT INTO usuario (CURP, nombre, apellidoPat, apellidoMat, correo, telefono, fechaRegistro, rfc, noBoleta, tipoUsuario) VALUES ("."'$_GET[]curp', '$nombre', '$appat', '$apmat', '$correo', '$tel', '2018-11-12', '$rfc', '$bole', '$tipo');";*/
    $consulta = "INSERT INTO `usuario` (`CURP`, `nombre`, `apellidoPat`, `apellidoMat`, `correo`, `telefono`, `fechaRegistro`, `password`, `noBoleta`, `tipoUsuario`, `AUTOMOVIL1`, `AUTOMOVIL2`) VALUES ('".$_GET["curp"]."', '".$_GET["nombre"]."', '".$_GET["appat"]."', '".$_GET["apmat"]."', '".$_GET["correo"]."', '".$_GET["tel"]."', '".date ("j/n/Y") ."', '".$_GET["pass"]."', '".$_GET["bole"]."', '".$_GET["tipo"]."', NULL, NULL);";
    echo $consulta;
    $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
    mysqli_close( $conexion );

 ?>