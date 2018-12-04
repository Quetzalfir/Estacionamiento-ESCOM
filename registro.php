<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inicio</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/registro.js"></script>
</head>

<body>

    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.html">Estacionamiento ESCOM</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="index.html" class="active">Inicio</a></li>
                <li><a href="acercade.html">Acerca de</a></li>
                <li><a href="mapa1.php">Mapa interactivo</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="registro.php"><span class="glyphicon glyphicon-user"></span> Registrarse </a></li>
                <li><a href="iniciosesion.html"><span class="glyphicon glyphicon-log-in"></span> Iniciar Sesión </a></li>
            </ul>
        </div>
    </nav>

    
    <div class="container">
        <h3>Registro de Usuario</h3>
        <form class="form1" action="php/insertarUsuario.php" method="post" accept-charset="utf-8" class="form-horizontal">
            <label>Nickname (<span id="disponible" style="color:#45932CFF;">Disponible</span>)</label> 
            <input class="form-control" type="text" name="IDConductor" pattern="[A-Za-z0-9]+" required id="IDConductor" minlength="5" maxlength="20"><br>
            <label>Nombre(s)</label>
            <input class="form-control" type="text" name="nombre" required pattern="[A-Za-z áéíóúÁÉÍÓÚ]+"><br>

            <label>Apellido Paterno</label>

            <input class="form-control" type="text" name="appat" pattern="[A-Za-z áéíóúÁÉÍÓÚ]+" required><br>

            <label>Apellido Materno</label>
            <input class="form-control" type="text" name="apmat" pattern="[A-Za-z áéíóúÁÉÍÓÚ]+" required><br>

            <label>Teléfono</label>
            <input class="form-control" type="tel" name="tel" required pattern="[0-9]{10}"><br>

            <label style="display: inline-block">Tipo de usuario: &nbsp;&nbsp;&nbsp;</label>
            <select name="tipo" class="form-control">
                <option value="Alumno">Alumno</option>
                <option value="Profesor">Profesor</option>
                <option value="Otro">Otro</option>
            </select>
            <br>

            <label id="tipoId" >Boleta</label>
            <input class="form-control" type="text" name="bole" required pattern="[0-9]{10}"><br>

            <label>Correo</label>
            <input class="form-control" type="email" name="correo" placeholder="ejemplo@email.com" required><br>

            <label>Crear Contraseña</label>
            <input class="form-control" type="password" name="pass" required minlength="5" maxlength="40"><br>

            <label>Verificar Contraseña</label>
            <input class="form-control" type="password" name="pass2" required minlength="5" maxlength="40"><br>

            <input class="form-control btn btn-primary" type="submit" value="Enviar">
        </form>
    
    </div>

</body>
</html>