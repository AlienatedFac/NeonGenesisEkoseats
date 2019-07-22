<?php 
	require 'conexion.php';

	$id_u= $_REQUEST['param1'];
	$id_p= $_REQUEST['param2'];
	$can= $_REQUEST['param3'];

	$sql="INSERT INTO carrito(id_usuario,id_producto,cantidad) 
						values('$id_u','$id_p','$can')";

	echo $consulta = $mysqli->query($sql);
?>