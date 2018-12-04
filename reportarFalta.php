<?php 
    session_start();
    if(isset($_SESSION["tipo"])){
       
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

    <style>
        main form input, textarea{
            border: 1px solid #869CA7;
            -webkit-box-shadow: 0px 0px 9px -1px rgba(179,179,179,1);
            -moz-box-shadow: 0px 0px 9px -1px rgba(179,179,179,1);
            box-shadow: 0px 0px 9px -1px rgba(179,179,179,1);
        }

        main form input[type=submit], main form input[type=reset] {
            display: inline-block;
            width: 100px;
            height: 30px;
            margin: 0 20px;
            margin-top: 20px;
            font-weight: bolder;
        }

        main form input[type=submit] {
            background-color: #6fed74;
        }

        main h3 {
            padding-top: 50px;
            margin-bottom: 8px;
            font-size: x-large;
        }

        main form label {
            margin-top: 5px;
            display: block;
        }

        main section {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        main .bg section img {
            width: 40%;
            height: auto;
            flex-basis: 40%;
        }

        main section form {
            box-sizing: border-box;
            padding: 0 30px;
            box-sizing: border-box;
            padding-bottom: 50px;
            padding-top: 10px;
        }
    </style>
</head>

<body>

<header>
    <section name="index">
        <a href="Usuario.php"><img id="logo" src="img/escom.png"></a>
        <h2><a href="Usuario.php">Estacionamiento ESCOM</a></h2>
    </section>
    <section name="user">
        <nav>
            <ul>
                <li><a href="mapaUsuario.php">Mapa</a></li>
                <li><a href="reportarFalta.php">Reportar falta</a></li>
                <li><a href="registraCarro.php">Registrar Auto</a></li>
            </ul>
        </nav>
        <!--------------------------------------------------------------------------------------------------->
    <div class="sesion2">
            <button class="logout"><a href="php/logout.php">Cerrar Sesión</a></button>
        </div>
    </section>
</header>

<main>
    <h3>Reportar Falta</h3>
    <section>
        <form class="form1" action="php/insertarReporte.php" style="border: 1px;" method="post" enctype="multipart/form-data">
            <h3>Datos del infractor</h3>
            <label>Placa:</label>
            <input type="text" name="placas"> <br>
            <label style="display: inline-block">Tipo:&nbsp;&nbsp;&nbsp;</label>
            <select name="tipo">
                <option value="Mal estacionado">Mal estacionado</option>
                <option value="Choque">Choque</option>
                <option value="Luces encendidas">Luces encendidas</option>
                <option value="Otro">Otro</option>
            </select>
            <label>Descripción:</label>
            <textarea name="descripcion" rows="4" cols="50"></textarea><br>
            <label>Insertar imagen:</label> 
            <input type="file" name="imagen" accept="image/png, image/jpeg"> <br>
            <input type="reset" value="Reset">
            <input type="submit" value="Enviar">
        </form>

        <img src="img/entrada.jpg">
    </section>
</main>

<footer>
    <p>Valencia Rodriguez Fernando</p>
    <p>Azpeitia Hernánez Vladimir </p>
    <p>Huerta Alvarez Diana Alejandra</p>
</footer>


</body>
</html>