<?php 
    session_start();
    if(isset($_SESSION["tipo"])){
        if($_SESSION["tipo"] != "Admin"){
            header("Location: Usuario.php", true, 301);
        }             
    }else{
        header("Location: index.html", true, 301);
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tabla de reportes</title>
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
                <li><a href="#">Automoviles</a></li>
                <li><a href="tablaUsuarios.php">Usuarios</a></li>
                <li><a href="faltas.php">Faltas</a></li>
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
        <h3>Reportes</h3>
        <table class="table table-striped">
            <tr> 
                <th>Número Reporte</th> 
                 <th>IDConductor</th> 
                 <th>Fecha Reporte</th> 
                 <th>Tipo</th> 
                 <th>Descripcion</th> 
                 <th>IDDenunciante</th>
                 <th>Imágen</th>
                 <th></th>
                 <th></th>
            </tr>
            <?php 
                include("php/config.php");
                $query = "SELECT * FROM tb_reporte  ORDER BY fechaReporte ASC";
                $resultado = $conexion->query($query);
                while ($ret = mysqli_fetch_array($resultado)){ 
                    echo "<tr><td>".$ret['noReporte']."</td><td>".$ret['IDConductor']."</td> <td>".$ret['fechaReporte']."</td><td>".$ret['tipo']."</td><td>".$ret['descripcion']."</td><td>".$ret['IDDenunciante']."</td><td> <img style='width: 50px; height: 50px;'' src='data:image/jpeg;base64,". base64_encode($ret['imagen']). "'/> </td> <td><a class='btn btn-success' role='button' href='actualizarFalta.php?noReporte=".$ret['noReporte']."&IDConductor=".$ret['IDConductor']."&fechaReporte=".$ret['fechaReporte']."&tipo=".$ret['tipo']."&descripcion=".$ret['descripcion']."&IDDenunciante=".$ret['IDDenunciante']."'>Editar</a></td> <td><a href='confirmDeleteReport.php?noReporte=".$ret['noReporte']."&IDConductor=".$ret['IDConductor']."' class='btn btn-danger' role='button'>Eliminar</a></td> </tr>"; 
                } 
             ?>
        </table>
        <a href="reportarFalta.php" class="btn btn-success" role="button">Agregar reporte</a>
    </div>

</body>
</html>