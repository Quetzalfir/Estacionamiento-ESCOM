<?php
    include("config.php");
    session_start();
    if (!isset($_FILES["imagen"]) || $_FILES["imagen"]["error"] > 0){
        echo "Ha ocurrido un error.";
    }
    else{
        $permitidos = array("image/jpg", "image/jpeg", "image/gif", "image/png");
        $limite_kb = 16384;
        if (in_array($_FILES['imagen']['type'], $permitidos) && $_FILES['imagen']['size'] <= $limite_kb * 1024){
            $imagen_temporal = $_FILES['imagen']['tmp_name'];

            // Leemos el contenido del archivo temporal en binario.
            $fp = fopen($imagen_temporal, 'r+b');
            $data = fread($fp, filesize($imagen_temporal));
            fclose($fp);

            //Podríamos utilizar también la siguiente instrucción en lugar de las 3 anteriores.
            // $data=file_get_contents($imagen_temporal);

            // Escapamos los caracteres para que se puedan almacenar en la base de datos correctamente.
           $data = mysqli_real_escape_string ($conexion, $data);

            // Insertamos en la base de datos.
            mysqli_query( $conexion, "UPDATE `tb_mapa` SET `imagenFondo` = '".$data."' WHERE `IDAdmin` = '".$_SESSION['user']."'" ) or die ( "Algo ha ido mal en la consulta a la base de datos");
            header("Location: ../MapaAdmin.php", true, 301);
        }else{
            echo "Formato de archivo no permitido o excede el tamaño límite de $limite_kb Kbytes.";
        }
    }
?>