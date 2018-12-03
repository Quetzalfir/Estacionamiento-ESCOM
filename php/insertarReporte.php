<?php 
	include('config.php');
	session_start();
    if (!isset($_FILES["imagen"]) || $_FILES["imagen"]["error"] > 0){
        echo "Ha ocurrido un error.";
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
			$res = mysqli_query( $conexion, $query ) or die ( "1Algo ha ido mal en la consulta a la base de datos");
			$ret = mysqli_fetch_array($res);
			echo $ret['IDConductor']."<BR>";

			$consulta = "INSERT INTO `tb_reporte`(`IDConductor`, `fechaReporte`, `tipo`, `descripcion`, `IDDenunciante`, `imagen`) VALUES ('".$ret['IDConductor']."','".date("Y/n/j")."','".$_POST['tipo']."','".$_POST['descripcion']."','".$_SESSION['user']."','".$data."')";
			echo $consulta;
			$resultado = mysqli_query( $conexion, $consulta );
			header("Location: ../reportarFalta.php", true, 301);
        }else{
            echo "Formato de archivo no permitido o excede el tamaño límite de $limite_kb Kbytes.";
        }
    }

    exit();
    mysqli_close( $conexion );
 ?>