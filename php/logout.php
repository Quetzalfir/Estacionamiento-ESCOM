<?php
session_start(); // se crea o reanuda la sesion actual
session_unset();
session_destroy();
header("Location: ../index.html", true, 301);
?>