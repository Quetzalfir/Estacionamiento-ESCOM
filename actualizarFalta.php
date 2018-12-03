<?php 
    session_start();
    if(isset($_SESSION["tipo"])){
        if($_SESSION["tipo"] != "Admin"){
            header("Location: index.html", true, 301);
        }
    }else{
        header("Location: iniciosesion.html", true, 301);
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inicio</title>
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/form1.css">

    <style>
        main h3 {
            padding-top: 50px;
            margin-bottom: 8px;
            font-size: x-large;
        }

        main section {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        main .bg section img {
            widtd: 40%;
            height: auto;
            flex-basis: 40%;
        }
        table{
            border:1px solid black;
        }
    </style>
</head>

<body>

<header>
    <section name="index">
        <a href="administrador.php"><img id="logo" src="img/escom.png"></a>
        <h2><a href="administrador.php">Estacionamiento ESCOM</a></h2>
    </section>
    <section name="user">
        <nav>
            <ul>
                <li><a href="MapaAdmin.php">Mapa</a></li>
                <li><a href="tablaUsuarios.php">Tabla de usuarios</a></li>
                <li><a href="faltas.php">Faltas</a></li>
            </ul>
        </nav>
        <!--------------------------------------------------------------------------------------------------->
        <div class="sesion2">
            <button class="logout"><a href="php/logout.php">Cerrar Sesión</a></button>
        </div>
    </section>
</header>
<main>
    <h3>Reportes</h3>
    <section>
        <form class="form1" action="php/actualizarReporte.php" style="border: 1px;" method="post">
        <?php 
            echo '           
                <h3>Datos del infractor</h3>
                <label>Número reporte:</label>
                <input type="text" name="noReporte" value="'.$_GET['noReporte'].'" readonly="readonly"> <br>
                <label>ID del infractor:</label>
                <input type="text" name="IDConductor" value="'.$_GET['IDConductor'].'" readonly="readonly"> <br>
                <label>Fecha de la infracción</label>
                <input type="text" name="fechaReporte" value="'.$_GET['fechaReporte'].'"> <br>
                <label style="display: inline-block">Tipo:&nbsp;&nbsp;&nbsp;</label>
                <select name="tipo">';
                switch ($_GET['tipo']) {
                    case 'Mal estacionado':
                    echo '
                    <option value="Mal estacionado" selected>Mal estacionado</option>
                    <option value="Choque">Choque</option>
                    <option value="Luces encendidas">Luces encendidas</option>
                    <option value="Otro">Otro</option>';
                    break;
                    case 'Choque':
                    echo '
                    <option value="Mal estacionado">Mal estacionado</option>
                    <option value="Choque" selected>Choque</option>
                    <option value="Luces encendidas">Luces encendidas</option>
                    <option value="Otro">Otro</option>';
                    break;
                     case 'Luces encendidas':
                    echo '
                    <option value="Mal estacionado">Mal estacionado</option>
                    <option value="Choque">Choque</option>
                    <option value="Luces encendidas" selected>Luces encendidas</option>
                    <option value="Otro">Otro</option>';
                    break;
                     case 'Otro':
                    echo '
                    <option value="Mal estacionado">Mal estacionado</option>
                    <option value="Choque">Choque</option>
                    <option value="Luces encendidas">Luces encendidas</option>
                    <option value="Otro" selected>Otro</option>';
                    break;
                } 
                echo '</select>
                <label>Descripción de la infracción</label>
                <textarea name="descripcion" rows="4" cols="50">'.$_GET['descripcion'].'</textarea><br>
                 <label>ID del denunciante</label>
                <input type="text" name="IDDenunciante" value="'.$_GET['IDDenunciante'].'"> <br>
                <button><a href="faltas.php">Cancelar</a></button>
                <input type="submit" value="Editar">
            ';
         ?>
        </form>
    </section>
</main>
<footer>
    <p>Valencia Rodriguez Fernando</p>
    <p>Azpeitia Hernánez Vladimir </p>
    <p>Huerta Alvarez Diana Alejandra</p>
</footer>


</body>
</html>