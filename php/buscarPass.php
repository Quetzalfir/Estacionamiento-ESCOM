<?php 
	session_start(); // se crea o reanuda la sesion actual
	if ($_SESSION['pwd'] == $_POST['pwd']) 
		echo 'si';
	else
		echo 'no';
?>