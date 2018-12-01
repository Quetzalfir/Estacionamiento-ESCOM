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
    <h3>Faltas</h3>
    <section>
        <table>
            <tr>
                <td>Id conductor</td>
            </tr>
            <tr>
                <td>Fecha</td>
            </tr>
            <tr>
                <td>Descripción</td>
            </tr>
            <tr>
                <td>Denunciante</td>
            </tr>

        </table>
        
    </section>
</main>

<footer>
    <p>Valencia Rodriguez Fernando</p>
    <p>Azpeitia Hernánez Vladimir </p>
    <p>Huerta Alvarez Diana Alejandra</p>
</footer>


</body>
</html>