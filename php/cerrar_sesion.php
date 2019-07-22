<?php 
	session_start();
	unset($_SESSION['id_usuario']);
	unset($_SESSION['nombre_usuario']);
	session_destroy();
	header('Location: ../../NeonGenesisEkoseats/index.php');

?>