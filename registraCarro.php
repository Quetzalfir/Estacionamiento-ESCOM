<?php 
    session_start();
    if(isset($_SESSION["tipo"])){
        if($_SESSION["tipo"] == "Alumno" || $_SESSION["tipo"] == "Profesor" || $_SESSION["tipo"] == "Vigilante" || $_SESSION["tipo"] == "Otro"){
            
        }else{
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
</head>

<body>

    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="Usuario.php">Estacionamiento ESCOM</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="Usuario.php">Inicio</a></li>
                <li><a href="notiUSR.php">Notificaciones</a></li>
                <li><a href="MapaUsuario.php">Mapa</a></li>
                <li><a href="reportarFaltaUser.php">Reportar Falta</a></li>
                <li><a href="#">Tabla automóviles</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $_SESSION['user'];?>  <img src="img/usuario.png" class="img-circle" alt="Cinque Terre" width="25" height="25"></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Configuración</a></li>
                        <li><a href="php/logout.php">Cerrar Sesión</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>  

<div class="container">
    <h3>Registar Automovil</h3>
    <section>
        <form action="php/insertarCarro.php" method="post">
            <label>Placa</label>
            <input type="text" name="placa"><br>
            <label style="display: inline-block">Tipo:&nbsp;&nbsp;&nbsp;</label>
            <select name="tipo">
                <option value="Automovil">Automovil</option>
                <option value="Camioneta">Camioneta</option>
                <option value="Motocicleta">Motocicleta</option>
                <option value="Otro">Otro</option>
            </select>
            <br>
            <label>Modelo</label>
            <input type="text" name="marca"><br>
            <label>Compañia</label>
            <input type="text" name="modelo"><br>
            <label>Color</label>
            <input type="color" name="color"><br>
            <label style="display: inline-block">¿Necesitas cajón de Discapacidad? &nbsp;&nbsp;&nbsp;</label>
            <select name="discapacidad">
                <option value="No">No</option>
                <option value="Sí">Sí</option>
            </select>
            <br>
            <input type="submit" value="Enviar">
        </form>

        <img src="img/entrada.jpg">
    </section>
</div>

<footer>
    <p>Valencia Rodriguez Fernando</p>
    <p>Azpeitia Hernánez Vladimir </p>
    <p>Huerta Alvarez Diana Alejandra</p>
</footer>


</body>
</html>