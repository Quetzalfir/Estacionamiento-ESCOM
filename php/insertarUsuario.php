<?php 
	include('config.php');
	session_start();
    $consulta = "INSERT INTO `tb_conductor` (`IDConductor`, `nombre`, `apellidoPat`, `apellidoMat`, `telefono`, `correo`, `boletaRFC`, `tipo`, `password`, `fechaRegistro`, `autorizado`, `noCajon`) VALUES ('".$_POST["IDConductor"]."', '".$_POST["nombre"]."', '".$_POST["appat"]."', '".$_POST["apmat"]."', '".$_POST["tel"]."', '".$_POST["correo"]."', '".$_POST["bole"]."', '".$_POST["tipo"]."', '".$_POST["pass"]."', '". date("Y/n/j") ."', 0, NULL);";
    $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
	if(isset($_SESSION['user']))
		header("Location: ../tablaUsuarios.php", true, 301);
  	else
		header("Location: ../usuarioRegistrado.html", true, 301);
    exit();
    mysqli_close( $conexion );
 ?>