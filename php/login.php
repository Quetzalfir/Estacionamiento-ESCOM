<?php 
	include('config.php');
	session_start();

	$nickname = $_POST['user1'];
	$password = $_POST['pass1'];

	$query = "SELECT * FROM tb_conductor WHERE IDConductor ='".$nickname."' AND password ='".$password."'";
 
	if($resultado = $conexion->query($query)){
		if($resultado->num_rows>0)
		{
			$ret = mysqli_fetch_array($resultado);
			$tipo = $ret['tipo']; 
			$_SESSION["user"] = $nickname;
			$_SESSION["tipo"] = $tipo;
			if($tipo  == "Admin")
				header("Location: ../Administrador.php", true, 301);
			else
				header("Location: ../Usuario.php", true, 301);	
			exit();
		}else{
			echo'<script>alert("Usuario no valido");</script>';
			header("Location: ../iniciosesion.html", true, 301);
			exit();
		}
	}
?>