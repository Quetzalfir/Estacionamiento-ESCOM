<?php 
	include('config.php');
	session_start();

	$nickname = $_POST['user1'];
	$password = $_POST['pass1'];

	$query = "SELECT * FROM tb_conductor WHERE IDConductor ='".$nickname."' AND password ='".$password."'";


	if($resultado = $conexion->query($query)){
		if($resultado->num_rows>0)
		{
			$_SESSION["user1"] = $nickname;
			header("Location: inicioconlogin.php", true, 301);
			exit();
		}else{
			echo'<script>alert("Usuario no valido");</script>';
			header("Location: index.html", true, 301);
			exit();
		}
	}
?>