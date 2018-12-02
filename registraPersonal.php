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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
     <script>
        $(document).ready(function() {
            $("main form [name=tipo]").on("change", function() {
                var val = $(this).val();

                if (val == "Alumno") {
                    $("#tipoId").text("Boleta");
                } else {
                    $("#tipoId").text("RFC");
                }
            });

            $("main form [name=pass2]").on("blur", function() {
                if ($("main form [name=pass]").val() != $(this).val()) {
                    this.setCustomValidity("Las contraseñas no coinciden");
                } else {
                    this.setCustomValidity("");
                }
            });
        });

        function disponible(nickname) {
            $.ajax({
                url : 'php/buscarUsuario.php',
                type : 'POST',
                dataType : 'html',
                data : { IDConductor: nickname },
                })

                .done(function(resultado){
                if(resultado == "Disponible"){
                    $("#disponible").text(resultado);
                    $("#disponible").css({'color':'#45932CFF'});
                }
                else{
                    $("#disponible").text(resultado);
                    $("#disponible").css({'color':'#D1322DFF'});
                }

            })
        }

    $(document).on('keyup', '#IDConductor', function(){
        var nickname = $(this).val();
        disponible(nickname);
    });
    </script>
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
        <form class="form1" action="php/insertarUsuario.php" method="post">
            <label>Nickname (<span id="disponible" style="color:#45932CFF;">Disponible</span>)</label> 
            <input type="text" name="IDConductor" pattern="[A-Za-z0-9]+" required id="IDConductor" minlength="5" maxlength="20"><br>
            <label>Nombre(s)</label>
            <input type="text" name="nombre" required pattern="[A-Za-z áéíóúÁÉÍÓÚ]+"><br>

            <label>Apellido Paterno</label>

            <input type="text" name="appat" pattern="[A-Za-z áéíóúÁÉÍÓÚ]+" required><br>

            <label>Apellido Materno</label>
            <input type="text" name="apmat" pattern="[A-Za-z áéíóúÁÉÍÓÚ]+" required><br>

            <label>Teléfono</label>
            <input type="tel" name="tel" required pattern="[0-9]{10}"><br>

            <label style="display: inline-block">Tipo de usuario: &nbsp;&nbsp;&nbsp;</label>
            <select name="tipo">
                <option value="Alumno">Alumno</option>
                <option value="Profesor">Profesor</option>
                <option value="Vigilante">Vigilante</option>
                <option value="Otro">Otro</option>
            </select>
            <br>

            <label id="tipoId" >Boleta</label>
            <input type="text" name="bole" required pattern="[0-9]{10}"><br>

            <label>Correo</label>
            <input type="email" name="correo" placeholder="ejemplo@email.com" required><br>

            <label>Crear Contraseña</label>
            <input type="password" name="pass" required minlength="5" maxlength="40"><br>

            <label>Verificar Contraseña</label>
            <input type="password" name="pass2" required minlength="5" maxlength="40"><br>

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