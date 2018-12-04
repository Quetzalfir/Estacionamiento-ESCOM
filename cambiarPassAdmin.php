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
    <!-- Dependencias bootstrap -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        function init(argument) {
            $("#alertMax").hide();
            $("#alertMax2").hide();       
        }

        $( "#btn" ).click(function() {
            $.ajax({
                url : 'php/pass.php',
                type : 'POST',
                dataType : 'html',
                data : { pwd: alumnos },
            }).done(function(resultado){
                if(parseInt(resultado, 10) >= 2){
                    
                }
                else{

                }
            });
        });
        window.addEventListener('load', init, false);
    </script>
</head>

<body>
    
     <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="Administrador.php">Estacionamiento ESCOM</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="Administrador.php">Inicio</a></li>
                <li><a href="MapaAdmin.php">Mapa</a></li>
                <li><a href="tablaAutoAdmin.php">Automoviles</a></li>
                <li><a href="tablaUsuarios.php">Usuarios</a></li>
                <li><a href="faltas.php">Faltas</a></li>
                <li><a href="bitacoraAdmin.php">Bitacora</a></li>
                <li><a href="solicitudAdmin.php">Solicitudes de usuarios</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $_SESSION['user'];?>  <img src="img/usuario.png" class="img-circle" alt="Cinque Terre" width="25" height="25"></a>
                    <ul class="dropdown-menu">
                        <li><a href="OpcionesAdmin.php">Configuración</a></li>
                        <li><a href="cambiarPassAdmin.php">Cambiar contraseña</a></li>
                        <li><a href="php/logout.php">Cerrar Sesión</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>  

    <div class="container">
        <h3>Cambiar contraseña actual</h3>
        <hr>
            <label>Contraseña actual</label>
            <input class="form-control" type="password" id="apass" placeholder="Contraseña actual">
            <label>Nueva contraseña</label>
            <input class="form-control" type="password" id="pass" placeholder="Nueva contraseña">
            <label>Confirmar contraseña</label>
            <input class="form-control" type="password" id="pass2" placeholder="Confirmar contraseña"><br>
            <div class="form-group row">
                <div class="col-xs-6">
                    <a href="Usuario.php" class="btn btn-danger" role="button" style="width: 100%;">Cancelar</a>
                </div>
                <div class="col-xs-6">
                    <button class="form-control btn btn-primary" id="btn" type="submit"></button>
                </div>
            </div>
            <div class="alert alert-danger" id="alertMax">
                <strong>Error:</strong> Solo puedes ingresar dos automóviles.
            </div>
            <div class="alert alert-danger" id="alertMax2">
                <strong>Error:</strong> Las contraseñas no coiciden
            </div>
    </div>

</body>
</html>