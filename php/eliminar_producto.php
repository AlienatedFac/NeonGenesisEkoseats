<?php 
	require 'conexion.php';

	$id_u= $_REQUEST['id_producto'];

	$sql="DELETE FROM productos WHERE id_producto=".$id_u;

	echo $consulta = $mysqli->query($sql);
?>