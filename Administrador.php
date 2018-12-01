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
    <script type="text/javascript">
        //document.getElementById("tipoUsuario").style.visibility = "hidden";
    </script>
    <link rel="stylesheet" type="text/css" href="css/main.css">

    <style>
        html {
            background-color: #ffffff;
        }

        .bg {
            background: url(img/dsc00409.jpg) no-repeat center center fixed;
            background-size: 100% auto;
            width: 100%;
            -webkit-box-shadow: 0px 0px 38px 30px rgba(0,0,0,0.75);
            -moz-box-shadow: 0px 0px 38px 30px rgba(0,0,0,0.75);
            box-shadow: 0px 0px 38px 30px rgba(0,0,0,0.75);
            position: sticky;
            top: 10vh;
            min-height: 125vh;
        }

        .bg > img {
            width: 100%;
        }

        .blur, .blur2 {
            background-image: url(img/dsc00409_blur.jpg);
            color: white;
            text-shadow: 0px 0px 4px #000000;
        }

        .blur2 {
            background-image: url(img/dsc00409_blur2.jpg);
        }

        main h1 {
            font-size: xx-large;
            padding-top: 80px;
        }

        main h3 {
            font-size: large;
        }

        main .bg section {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        main .bg section img {
            width: 30%;
            height: auto;
            flex-basis: 30%;
        }

        main .bg section div {
            box-sizing: border-box;
            padding: 0 30px;
        }

        main .bg section h3 {
            padding: 15px 5px;
            -webkit-border-radius: 20px;
            -moz-border-radius: 20px;
            border-radius: 20px;

            text-shadow: 0px 0px 2px rgba(0,0,0,0.8);

            background: -moz-linear-gradient(top, rgba(0,32,58,0) 0%, rgba(0,32,58,0.3) 30%, rgba(0,32,58,0.3) 70%, rgba(0,32,58,0) 100%);
            background: -webkit-linear-gradient(top, rgba(0,32,58,0) 0%,rgba(0,32,58,0.3) 30%,rgba(0,32,58,0.3) 70%,rgba(0,32,58,0) 100%);
            background: linear-gradient(to bottom, rgba(0,32,58,0) 0%,rgba(0,32,58,0.3) 30%,rgba(0,32,58,0.3) 70%,rgba(0,32,58,0) 100%);
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#0000203a', endColorstr='#0000203a',GradientType=0 );
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
    <div class="bg">
        <img src="img/dsc00409.jpg" style="visibility: hidden;" />
    </div>
    <div class="bg blur">
        <h1>¡ Bienvenido Administrador!</h1>
        <h2>Inicio de sesión exitoso</h2>
        <section>
            <img src="img/peaje1.png">
            <div>
                <h3>Esta página es para ayudarnos a tener un estacionamiento más seguro y eficaz</h3>
                <h3>Cualquier persona en la comunidad que conforma a la ESCOM puede ayudar</h3>
                <h3>Si observas alguna anomalía en el estacionamiento, puedes reportarla en ésta página</h3>
                <h3>Pero antes por favor inicia sesión o registrate para continuar</h3>
                <h3>Te pedimos que denuncies de manera honesta ya que se le hará seguimiento</h3>
                <h3>Ninguno de tus datos será revelado al público</h3>
            </div>
        </section>
    </div>

    <div class="bg blur2">
        <h1>Mapa</h1>

        <section>
            <div>
                <h3>Ayúdate del mapa del estacionamiento</h3>
                <h3>para ubicarte, reportar tus faltas</h3>
                <h3>y ver los lugares disponibles</h3>
            </div>
            <img src="img/map1.png">
        </section>
    </div>

    <div class="bg blur2">
        <h1>Acerca de :</h1>

        <section>
            <img src="img/info1.png">
            <div>
                <h3>Este proyecto está hecho para ayudar en el funcionamiento correcto del estacionamiento perteneciente a la escuela</h3>
                <h3>Con una administración ordenada podremos hacer que el manejo de éste sea adecuado para una convivencia sana entre toda la comunidad</h3>
                <h3>Si todos ayudamos a seguir las reglas y a aprender de nuestros errores, el estacionamiento de ESCOM, podrá funcionar de manera óptima</h3>
            </div>
        </section>
    </div>
</main>

<footer>
    <p>Valencia Rodriguez Fernando</p>
    <p>Azpeitia Hernánez Vladimir </p>
    <p>Huerta Alvarez Diana Alejandra</p>
</footer>


</body>
</html>