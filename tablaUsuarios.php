<?php 
    session_start(); // se crea o reanuda la sesion actual
    if(isset($_SESSION["tipo"])){
        if($_SESSION["tipo"] != "Admin"){ // si le usuario no es Admin
            header("Location: index.html", true, 301);
        }
    }else{
        header("Location: index.html", true, 301);
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta author="Azpeita Hernández Vladimir">
    <meta author="Huerta Alvarez Diana Alejandra">
    <meta author="Valencia Rodríguez Fernando Quetzalcóatl">
    <meta charset="UTF-8">
    <title>Tabla Usuarios</title>
    <!-- Dependencias bootstrap -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/sorttable.js"></script>


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
    <div class="container-fluid">
        <h3>Tabla de usuarios</h3>
        <hr>
        <!-- css tabla, y js sortable para ordenar por columnas -->
<table class="table table-striped sortable">
            <thead>
                <tr>
                    <th>IDConductor</th>
                    <th>Nombre</th>
                    <th>Apellido paterno</th>
                    <th>Apellido materno</th>
                    <th>Telefono</th>
                    <th>Correo</th>
                    <th>Boleta o RFC</th>
                    <th>Tipo</th>
                    <th>Fecha de registro</th>
                    <th>Autorizado</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include("php/config.php"); // se acre la conexion a la BD con la configuracion dada
                    $query = "SELECT * FROM `tb_conductor` WHERE `tipo` != 'Admin' AND IDConductor != 'SIN CUENTA' ORDER BY fechaRegistro DESC";
                    $resultado = $conexion->query($query); // se hace la busqueda en la base de datos
                    while ($ret = mysqli_fetch_array($resultado)){ // se llena la tabla con los datos obtenidos de la consulta
                        echo "<tr><td>".$ret['IDConductor']."</td><td>".$ret['nombre']."</td> <td>".$ret['apellidoPat']."</td><td>".$ret['apellidoMat']."</td><td>".$ret['telefono']."</td><td>".$ret['correo']."</td><td>".$ret['boletaRFC']."</td><td>".$ret['tipo']."</td><td>".$ret['fechaRegistro']."</td><td>". (($ret['autorizado'] == 0)?'No':'Si') ."</td><td><a class='btn btn-info' role='button' href='php/autorizar.php?IDConductor=".$ret['IDConductor']."&value=".$ret['autorizado']."'>" . (($ret['autorizado'] == 0)?'Permitir Acceso':'Negar Acesso') . "</a></td><td><a class='btn btn-primary' role='button' href='actualizarPersonal.php?IDConductor=".$ret['IDConductor']."&nombre=".$ret['nombre']."&apellidoPat=".$ret['apellidoPat']."&apellidoMat=".$ret['apellidoMat']."&telefono=".$ret['telefono']."&correo=".$ret['correo']."&boletaRFC=".$ret['boletaRFC']."&tipo=".$ret['tipo']."&password=".$ret['password']."'>Editar</a></td><td><a href='confirmDeleteUSR.php?IDConductor=".$ret['IDConductor']."' class='btn btn-danger' role='button'>Eliminar</a></td></tr>";
                    }
                 ?>
            </tbody>
        </table>
        <!-- link para registrar usuario -->
<a href="registraPersonal.php" class="btn btn-success" role="button">Agregar usuario</a>

    </div>

</body>
</html>