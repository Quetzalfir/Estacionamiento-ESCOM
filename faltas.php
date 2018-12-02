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
        <table border="1">
            <tr> 
                <th>Número Reporte</th> 
                 <th>IDConductor</th> 
                 <th>Fecha Reporte</th> 
                 <th>Tipo</th> 
                 <th>Descripcion</th> 
                 <th>IDDenunciante</th>
                 <th>Imágen</th>
            </tr>
            <?php 
                include("php/config.php");
                $query = "SELECT * FROM tb_reporte";
                $resultado = $conexion->query($query);
                while ($ret = mysqli_fetch_array($resultado)){ 
                    echo "<tr><td>".$ret['noReporte']."</td><td>".$ret['IDConductor']."</td> <td>".$ret['fechaReporte']."</td><td>".$ret['tipo']."</td><td>".$ret['descripcion']."</td><td>".$ret['IDDenunciante']."</td><td> <img style='width: 50px; height: 50px;'' src='data:image/jpeg;base64,". base64_encode($ret['imagen']). "'/> </td> </tr>"; 
                } 
             ?>
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