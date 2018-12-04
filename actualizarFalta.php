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
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $_SESSION['user'];?>  <img src="img/usuario.png" class="img-circle" alt="Cinque Terre" width="25" height="25"></a>
                    <ul class="dropdown-menu">
                        <li><a href="OpcionesAdmin.php">Configuración</a></li>
                        <li><a href="php/logout.php">Cerrar Sesión</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <h3>Reportes</h3>
        <form action="php/actualizarReporte.php"  method="post" accept-charset="utf-8" class="form-horizontal">
        <?php 
            echo '           
                <h3>Datos del infractor</h3>
                <label>Número reporte:</label>
                <input class="form-control" type="text" name="noReporte" value="'.$_GET['noReporte'].'" readonly="readonly"> <br>
                <label>ID del infractor:</label>
                <input class="form-control" type="text" name="IDConductor" value="'.$_GET['IDConductor'].'" readonly="readonly"> <br>
                <label>Fecha de la infracción</label>
                <input class="form-control" type="text" name="fechaReporte" value="'.$_GET['fechaReporte'].'"> <br>
                <label style="display: inline-block">Tipo:&nbsp;&nbsp;&nbsp;</label>
                <select name="tipo" class="form-control">';
                switch ($_GET['tipo']) {
                    case 'Mal estacionado':
                    echo '
                    <option value="Mal estacionado" selected>Mal estacionado</option>
                    <option value="Choque">Choque</option>
                    <option value="Luces encendidas">Luces encendidas</option>
                    <option value="Otro">Otro</option>';
                    break;
                    case 'Choque':
                    echo '
                    <option value="Mal estacionado">Mal estacionado</option>
                    <option value="Choque" selected>Choque</option>
                    <option value="Luces encendidas">Luces encendidas</option>
                    <option value="Otro">Otro</option>';
                    break;
                     case 'Luces encendidas':
                    echo '
                    <option value="Mal estacionado">Mal estacionado</option>
                    <option value="Choque">Choque</option>
                    <option value="Luces encendidas" selected>Luces encendidas</option>
                    <option value="Otro">Otro</option>';
                    break;
                     case 'Otro':
                    echo '
                    <option value="Mal estacionado">Mal estacionado</option>
                    <option value="Choque">Choque</option>
                    <option value="Luces encendidas">Luces encendidas</option>
                    <option value="Otro" selected>Otro</option>';
                    break;
                } 
                echo '</select>
                <label>Descripción de la infracción</label>
                <textarea name="descripcion" rows="4" cols="50" class="form-control">'.$_GET['descripcion'].'</textarea><br>
                 <label>ID del denunciante</label>
                <input class="form-control" type="text" name="IDDenunciante" value="'.$_GET['IDDenunciante'].'"> <br>
                <div class="form-group row">
                <div class="col-xs-6">
                    <a href="faltas.php" class="btn btn-danger" role="button" style="width: 100%;">Cancelar</a>
                </div>
                <div class="col-xs-6">
                    <input type="submit" value="Actualizar" class="form-control btn btn-primary">
                </div>
                </div>
            ';
         ?>
        </form>
    </div>

</body>
</html>