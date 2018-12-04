<?php 
	include('config.php');
	session_start();

	$nickname = $_POST['user1'];
	$password = $_POST['pass1'];

	$query = "SELECT * FROM tb_conductor WHERE IDConductor ='".$nickname."' AND password ='".$password."'";
 
	if($resultado = $conexion->query($query)){
		if($resultado->num_rows>0){
			$ret = mysqli_fetch_array($resultado);
			$tipo = $ret['tipo'];
			$autorizado = $ret['autorizado']; 
			$_SESSION["user"] = $nickname;
			$_SESSION["nombre"] = $ret['nombre'];
			$_SESSION["apellidoPat"] = $ret['apellidoPat'];
			$_SESSION["apellidoMat"] = $ret['apellidoMat'];
			$_SESSION["correo"] = $ret['correo'];
			$_SESSION["telefono"] = $ret['telefono'];
			$_SESSION["boletaRFC"] = $ret['boletaRFC'];
			$_SESSION["tipo"] = $tipo;
			$_SESSION['autorizado'] = $autorizado;
			if($tipo  == "Admin"){
				header("Location: ../Administrador.php", true, 301);
			}
			else{
				if($autorizado == 1){
					header("Location: ../Usuario.php", true, 301);
				}
				else{
					header("Location: ../usuarioNoAutorizado.html", true, 301);
					exit();
				}
			exit();
			}
		}else{
			echo'<script>$("#info").text = "Usuario o contraseñas incorrectas";</script>';
			header("Location: ../iniciosesion.html", true, 301);
			exit();
		}
	}
?>