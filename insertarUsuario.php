<?php 
	include('config.php');
    $consulta = "INSERT INTO `tb_conductor` (`IDConductor`, `nombre`, `apellidoPat`, `apellidoMat`, `telefono`, `correo`, `boletaRFC`, `tipo`, `password`, `fechaRegistro`, `autorizado`, `noCajon`) VALUES ('".$_POST["IDConductor"]."', '".$_POST["nombre"]."', '".$_POST["appat"]."', '".$_POST["apmat"]."', '".$_POST["tel"]."', '".$_POST["correo"]."', '".$_POST["bole"]."', '".$_POST["tipo"]."', '".$_POST["pass"]."', '". date("Y/n/j") ."', 0, NULL);";
    $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
    mysqli_close( $conexion );
 ?>