<?php
	require 'conexion.php';
	if(!isset($_POST['nombre']) &&  !isset($_POST['descripcion']) && !isset($_POST['stock']) &&  !isset($_POST['precio']) &&  !isset($_POST['tipo_select'])){
		header("Location: ../NeonGenesisEkoseats/dashboardProductoEditar.php");
	}else{
			$allowedExts = array("gif", "jpeg", "jpg", "png");
			$temp = explode(".", $_FILES["file"]["name"]);
			$extension = end($temp);
			$imagen="";
			// $random=rand(1,999999);
			if ((($_FILES["file"]["type"] == "image/gif")
				|| ($_FILES["file"]["type"] == "image/jpeg")
				|| ($_FILES["file"]["type"] == "image/jpg")
				|| ($_FILES["file"]["type"] == "image/pjpeg")
				|| ($_FILES["file"]["type"] == "image/x-png")
				|| ($_FILES["file"]["type"] == "image/png"))){
				//Verificamos que sea una imagen
		  	if ($_FILES["file"]["error"] > 0){
		  		//verificamos que venga algo en el input file
		    	echo "Error numero: " . $_FILES["file"]["error"] . "<br>";
		    }else{
		    	//subimos la imagen

		    	$imagen= "images/1/11/".$_FILES["file"]["name"];
		    	if(file_exists("../images/1/11/".$_FILES["file"]["name"])){
		      		echo $_FILES["file"]["name"] . " Ya existe. ";
		      	}else{
		      		move_uploaded_file($_FILES["file"]["tmp_name"],
		      		"../images/1/11/".$_FILES["file"]["name"]);
		      		echo "Archivo guardado en ../images/1/11/".$_FILES["file"]["name"];
		      		$nombre=$_POST['nombre'];
					$descripcion=$_POST['descripcion'];
					$stock = $_POST['stock'];
					$precio=$_POST['precio'];
					$tipo = $_POST['tipo_select'];
					$Sql="UPDATE productos SET nombre_producto=".$nombre.",descripcion_producto=".$descripcion.",stock_producto=".$stock.",precio_producto=".$precio.",imagenes=".$imagen.",tipo_producto=".$tipo." WHERE id_producto=".$_POST['id_nuc'];
					$mysqli->query($Sql);
					header ("Location: ../dashboardProductoEditar.php");
		      }
		    }
		  }else{
		  echo "Formato no soportado";
		  }

		
	}
?>