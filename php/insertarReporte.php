<?php 
	include('config.php');
	session_start(); // se crea o reanuda la sesion actual
    if (!isset($_FILES["imagen"]) || $_FILES["imagen"]["error"] > 0){
        echo "No cargo la imagen.";
        $query = "SELECT `IDConductor` FROM `tb_automovil` WHERE `placas` = '".$_POST['placas']."'";
		$res = //consulta a base de datos
mysqli_query( $conexion, $query ) or die ( "1Algo ha ido mal en la consulta a la base de datos");
		if($res->num_rows>0){
			$ret = mysqli_fetch_array($res);
			$consulta = "INSERT INTO `tb_reporte`(`IDConductor`, `fechaReporte`, `tipo`, `descripcion`, `IDDenunciante`) VALUES ('".$ret['IDConductor']."','".date("Y/n/j")."','".$_POST['tipo']."','".$_POST['descripcion']."','".$_SESSION['user']."')";
		}else{
			$consulta = "INSERT INTO `tb_reporte`(`fechaReporte`, `tipo`, `descripcion`, `IDDenunciante`) VALUES ('".date("Y/n/j")."','".$_POST['tipo']."','".$_POST['descripcion']."+[Vehiculo no registrodo o placas incorrectas][Placas:".$_POST['placas']."]','".$_SESSION['user']."')";
		}
		$resultado = mysqli_query( $conexion, $consulta );
    }
    else{
        $permitidos = array("image/jpg", "image/jpeg", "image/gif", "image/png");
        $limite_kb = 16384;
        if (in_array($_FILES['imagen']['type'], $permitidos) && $_FILES['imagen']['size'] <= $limite_kb * 1024){
			$imagen_temporal = $_FILES['imagen']['tmp_name'];

			$fp = fopen($imagen_temporal, 'r+b');
			$data = fread($fp, filesize($imagen_temporal));
			fclose($fp);
			$data = mysqli_real_escape_string ($conexion, $data);
			$query = "SELECT `IDConductor` FROM `tb_automovil` WHERE `placas` = '".$_POST['placas']."'";
			$res = //consulta a base de datos
mysqli_query( $conexion, $query ) or die ( "1Algo ha ido mal en la consulta a la base de datos");
			if($res->num_rows>0){
				$ret = mysqli_fetch_array($res);
				$consulta = "INSERT INTO `tb_reporte`(`IDConductor`, `fechaReporte`, `tipo`, `descripcion`, `IDDenunciante`) VALUES ('".$ret['IDConductor']."','".date("Y/n/j")."','".$_POST['tipo']."','".$_POST['descripcion']."','".$_SESSION['user']."','".$data."')";
			}else{
			$consulta = "INSERT INTO `tb_reporte`(`fechaReporte`, `tipo`, `descripcion`, `IDDenunciante`, `imagen`) VALUES ('".date("Y/n/j")."','".$_POST['tipo']."','".$_POST['descripcion']."+[Vehiculo no registrodo o placas incorrectas][Placas:".$_POST['placas']."]','".$_SESSION['user']."','".$data."')";
			}
			$resultado = mysqli_query( $conexion, $consulta );
        }else{
            echo "Formato de archivo no permitido o excede el tamaño límite de $limite_kb Kbytes.";
        }
    }
    header("Location: ../reportarFalta.php", true, 301);
    exit();
    mysqli_close( $conexion );
 ?>