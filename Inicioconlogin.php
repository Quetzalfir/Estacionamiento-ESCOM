<?php session_start();?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inicio</title>

    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>

<body>

<header>
    <section name="index">
        <a href="inicioconlogin.php"><img id="logo" src="img/escom.png"></a>
        <h2><a href="inicioconlogin.php">Estacionamiento ESCOM</a></h2>
    </section>
    <section name="user">
        <nav>
            <ul>
                <li><a href="">Inicio</a></li>
                <li><a href="">Reporte</a>
                    <ul>
                        <li><a href="">Hacer reporte</a></li>
                    </ul>
                </li>
                <li><a href="">Usuario</a>
                    <ul>
                        <li><a href="">Reportes realizados</a></li>
                        <li><a href="">Mi reportess</a></li>
                    </ul>
                </li>
                <li><a href="">Sesión</a>
                    <ul>
                        <li><a href="logout.php">Cerrar sesión</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </section>
</header>

<main>
    <h4 style="text-align: center;padding-top: 50px;">¡Bienvenido <?php echo $_SESSION["user1"] ?> !</h4>
</main>

<footer>

</footer>


</body>
</html>