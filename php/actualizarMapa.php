<?php 
	include ("config");
	$query = "UPDATE `tb_mapa` SET `JSONModel`  = [],`imagenFondo` = [] WHERE `IDAdmin` = []";
	$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
    mysqli_close( $conexion );
?>