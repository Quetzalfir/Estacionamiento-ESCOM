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

    <style>
        main form input {
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
        <a href="index.html"><img id="logo" src="img/escom.png"></a>
        <h2><a href="index.html">Estacionamiento ESCOM</a></h2>
    </section>
    <section name="user">
        <nav>
            <ul>
                <li><a href="MapaAdmin.php">Mapa</a></li>
                <li><a href="registraPersonal.php">Registrar Personal</a></li>
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
    <h3>Registrar Personal</h3>
    <section>
        <form action="insertarUsuario.php" method="get">
            <label>Nombre</label>
            <input type="text" name="nombre"><br>
            <label>Apellido Paterno</label>
            <input type="text" name="appat"><br>
            <label>Apellido Materno</label>
            <input type="text" name="apmat"><br>
            <label>Boleta</label>
            <input type="text" name="bole"><br>
            <label>CURP</label>
            <input type="text" name="curp"><br>
            <label>Teléfono</label>
            <input type="text" name="tel"><br>
            <label>Correo</label>
            <input type="text" name="correo"><br>
            <label style="display: inline-block">Tipo de usuario: &nbsp;&nbsp;&nbsp;</label>
            <select name="tipo">
                <option value="Alumno">Alumno</option>
                <option value="Profesor">Profesor</option>
                <option value="Otro">Otro</option>
            </select>
            <br>
            <label>Crear Contraseña</label>
            <input type="password" name="pass"><br>
            <label>Verificar Contraseña</label>
            <input type="password" name="pass2"><br>
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