<?php 

	if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){

		require 'conexion.php';
		sleep(2);
		$mysqli->set_charset('utf8');

		$nombre = $mysqli->real_escape_string($_POST['input_nombre']);
		$apellido = $mysqli->real_escape_string($_POST['input_apellidos']);
		$correo = $mysqli->real_escape_string($_POST['input_correo']);
		$pass = $mysqli->real_escape_string($_POST['input_contra']);
		$pass2 = $mysqli->real_escape_string($_POST['input_contra2']);

		$flag = false;

			$consulta = $mysqli->query("SELECT correo_usuario FROM usuarios");
            while($resultado = mysqli_fetch_assoc($consulta)){
                if($correo == $resultado['correo_usuario']){
                	echo json_encode(array('error' => true, 'correo' => true));
                	$flag = true;
                	break;
                }
            }	
            if($flag == false){
            	if($apellido != ""){
            		$sql="INSERT INTO usuarios(nombre_usuario,apellidos_usuario,correo_usuario,clave_usuario) 
						values('$nombre','$apellido','$correo','$pass')";

						$result=mysqli_query($mysqli,$sql);
						echo json_encode(array('error' => false));
            	}else{
            		$sql="INSERT INTO usuarios(nombre_usuario,correo_usuario,clave_usuario) 
						values('$nombre','$correo','$pass')";

						$result=mysqli_query($mysqli,$sql);
						echo json_encode(array('error' => false));
            	}
            }
		}
?>