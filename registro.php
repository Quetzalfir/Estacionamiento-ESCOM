<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inicio</title>
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/form1.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


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
            width: 40%;
            height: auto;
            flex-basis: 40%;
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
        <a href="index.html"><img id="logo" src="img/escom.png"></a>
        <h2><a href="index.html">Estacionamiento ESCOM</a></h2>
    </section>
    <section name="user">
        <nav>
            <ul>
                <li><a href="mapa1.php">Mapa</a></li>
            </ul>
        </nav>
        <!--------------------------------------------------------------------------------------------------->
        <div class="sesion" style="float:right">
            <button class="regbtn"><a href="registro.php">Registrarse</a></button>
        </div>
        <div class="sesion2">
             <button class="logbtn"><a href="iniciosesion.html">Iniciar Sesión</a></button>
        </div>
    </section>
</header>

<main>
    <h3>Registro de Usuario</h3>
    <section>
        <form class="form1" action="php/insertarUsuario.php" method="get">
            <label>Nickname (<span id="disponible" style="color:#45932CFF;"></span>)</label> 
            <input type="text" name="IDConductor" pattern="[A-Za-z áéíóúÁÉÍÓÚ]+" required id="IDConductor"><br>
            <label>Nombre(s)</label>
            <input type="text" name="nombre" required><br>

            <label>Apellido Paterno</label>

            <input type="text" name="appat" pattern="[A-Za-z áéíóúÁÉÍÓÚ]+" required><br>

            <label>Apellido Materno</label>
            <input type="text" name="apmat" pattern="[A-Za-z áéíóúÁÉÍÓÚ]+" required><br>

            <label>Teléfono</label>
            <input type="text" name="tel" required><br>

            <label style="display: inline-block">Tipo de usuario: &nbsp;&nbsp;&nbsp;</label>
            <select name="tipo">
                <option value="Alumno">Alumno</option>
                <option value="Profesor">Profesor</option>
                <option value="Otro">Otro</option>
            </select>
            <br>

            <label id="tipoId" >Boleta</label>
            <input type="text" name="bole" required><br>

            <label>Correo</label>
            <input type="email" name="correo" placeholder="ejemplo@email.com" required><br>

            <label>Crear Contraseña</label>
            <input type="password" name="pass" required><br>

            <label>Verificar Contraseña</label>
            <input type="password" name="pass2" required><br>

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