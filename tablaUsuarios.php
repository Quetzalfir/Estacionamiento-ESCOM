<?php 
    session_start();
    if(isset($_SESSION["tipo"])){
        if($_SESSION["tipo"] != "Admin"){
            header("Location: index.html", true, 301);
        }
    }else{
        header("Location: index.html", true, 301);
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
        <a href="Administrador.php"><img id="logo" src="img/escom.png"></a>
        <h2><a href="Administrador.php">Estacionamiento ESCOM</a></h2>
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
    <h3>Tabla de usuarios</h3>
    <section>
        <table style="border: 1px solid black;">
            <tr> 
                 <th>IDConductor</th> 
                 <th>Nombre</th> 
                 <th>Apellido paterno</th> 
                 <th>Apellido materno</th> 
                 <th>Telefono</th>
                 <th>Correo</th>
                 <th>Boleta o RFC</th>
                 <th>Tipo</th>
                 <th>Password</th>
                 <th>Fecha de registro</th>
                 <th>Autorizado</th>
                 <th>No Cajon<th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            <?php 
                include("php/config.php");
                $query = "SELECT * FROM `tb_conductor` WHERE `tipo` != 'Admin'";
                $resultado = $conexion->query($query);
                while ($ret = mysqli_fetch_array($resultado)){ 
                    echo "<tr><td>".$ret['IDConductor']."</td><td>".$ret['nombre']."</td> <td>".$ret['apellidoPat']."</td><td>".$ret['apellidoMat']."</td><td>".$ret['telefono']."</td><td>".$ret['correo']."</td><td>".$ret['boletaRFC']."</td><td>".$ret['tipo']."</td><td>".$ret['password']."</td><td>".$ret['fechaRegistro']."</td><td>". (($ret['autorizado'] == 0)?'No':'Si') ."</td><td>".$ret['noCajon']."</td><td><button><a href='php/autorizar.php?IDConductor=".$ret['IDConductor']."&value=".$ret['autorizado']."'>" . (($ret['autorizado'] == 0)?'Permitir Acceso':'Negar Acesso') . "</a></button></td><td><button><a href='actualizarPersonal.php?IDConductor=".$ret['IDConductor']."&nombre=".$ret['nombre']."&apellidoPat=".$ret['apellidoPat']."&apellidoMat=".$ret['apellidoMat']."&telefono=".$ret['telefono']."&correo=".$ret['correo']."&boletaRFC=".$ret['boletaRFC']."&tipo=".$ret['tipo']."&password=".$ret['password']."'>Editar</a></button></td><td><button><a href=''>Eliminar</a></button></td></tr>"; 
                } 
             ?>
        </table>

    </section>
        <div>
        <button><a href="registraPersonal.php">Agregar usuario</a></button>
    </div>
</main>

<footer>
    <p>Valencia Rodriguez Fernando</p>
    <p>Azpeitia Hernánez Vladimir </p>
    <p>Huerta Alvarez Diana Alejandra</p>
</footer>


</body>
</html>