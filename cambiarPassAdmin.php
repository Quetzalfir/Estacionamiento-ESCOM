<?php
session_start(); // se crea o reanuda la sesion actual
if(isset($_SESSION["tipo"])){
    if($_SESSION["tipo"] != "Admin"){ // si le usuario no es Admin
        header("Location: index.html", true, 301);
    }
}else{
    header("Location: iniciosesion.html", true, 301);
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta author="Azpeita Hernández Vladimir">
    <meta author="Huerta Alvarez Diana Alejandra">
    <meta author="Valencia Rodríguez Fernando Quetzalcóatl">
    <meta charset="UTF-8">
    <title>Inicio</title>
    <!-- Dependencias bootstrap -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $("#pass2").on("blur", function() {
                if ($("#pass").val() != $(this).val()) {
                    this.setCustomValidity("Las contraseñas no coinciden");
                } else {
                    this.setCustomValidity("");
                }
            });
            $("input[type=submit]").attr("disabled", "disabled");
        });

        $(document).on('keyup', '#apass', function(){
            var pass = $(this).val();
            esCorrecta(pass);
        });

        function esCorrecta(pass) {
            $.ajax({ // se actualiza dinamicamente con AJAX
                url : 'php/buscarPass.php',
                type : 'POST',
                dataType : 'html',
                data : { pwd: pass },
                })

                .done(function(resultado){
                    if(resultado == "si"){
                        $("#info").text("La contraseña es correcta");
                        $("input[type=submit]").removeAttr("disabled"); 
                        $("#info").css({'color':'#45932CFF'});
                    }
                    else{
                        $("#info").text("La contraseña es incorrecta");
                        $("input[type=submit]").attr("disabled", "disabled");
                        $("#info").css({'color':'#D1322DFF'});
                    }
            })
        }

    </script>

</head>

<body>

   <nav class="navbar navbar-inverse">
        <!-- barra de navegacion estandar responsiva ancho 100% -->
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
                <!-- extremo derecho de la barra -->
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
       <form action="php/cambiarPass.php" method="post">
           <label>Contraseña actual: </label><span id='info'> Esperando..</span>
           <input class="form-control" type="password" id="apass" placeholder="Contraseña actual" required autofocus>
           <label>Nueva contraseña</label>
           <input class="form-control" type="password" id="pass"  name='pass' placeholder="Nueva contraseña" required min="5">
           <label>Confirmar contraseña</label>
           <input class="form-control" type="password" id="pass2" placeholder="Confirmar contraseña" required min="5"><br>
           <div class="form-group row">
               <div class="col-xs-6">
                   <a href="Usuario.php" class="btn btn-danger" role="button" style="width: 100%;">Cancelar</a>
               </div>
               <div class="col-xs-6">
                   <input type="submit" class="form-control btn btn-primary" id="btn"></input>
               </div>
           </div>
       </form> <br>
   </div>

</body>
</html>