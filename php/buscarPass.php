<?php 
	session_start();
	if ($_SESSION['pwd'] == $_POST['pwd']) 
		echo 'si';
	else
		echo 'no';
?>