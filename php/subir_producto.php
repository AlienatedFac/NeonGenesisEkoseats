<?php
	require 'conexion.php';
	if(!isset($_POST['nombre']) &&  !isset($_POST['descripcion']) && !isset($_POST['stock']) &&  !isset($_POST['precio']) &&  !isset($_POST['tipo_select'])){
		header("Location: ../NeonGenesisEkoseats/dashboardProductoCrear.php");
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
					$Sql="insert into productos (nombre_producto,descripcion_producto, stock_producto, precio_producto,imagenes,tipo_producto, id_usuario) values(
							'".$nombre."',
							'".$descripcion."',
							'".$stock."',
							'".$precio."',
							'".$imagen."',
							'".$tipo."',
								1)";
					$mysqli->query($Sql);
					header ("Location: ../dashboardProductoCrear.php");
		      }
		    }
		  }else{
		  echo "Formato no soportado";
		  }

		
	}
?>