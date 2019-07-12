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

		//se valida si puso la contra dos veces
		if($pass != $pass2){
			echo json_encode(array('error' => true, 'contra_no' => true));
		}else{
			//si ingreso un apellido
			if($apellido != ""){
				if($nueva_consulta = $mysqli->prepare("SELECT id_usuario,nombre_usuario FROM usuarios WHERE correo_usuario = ? AND clave_usuario = ?")){

					$nueva_consulta->bind_param('ss', $user, $pass);
					$nueva_consulta->execute();
					$resultado = $nueva_consulta->get_result();

					if($resultado->num_rows == 1){
						$datos = $resultado->fetch_assoc();
						echo json_encode(array('error' => false,'id_usuario' => $datos['id_usuario'] , 'nombre_usuario' => $datos['nombre_usuario']));
					}else{
						echo json_encode(array('error' => true));
					}
					$nueva_consulta->close();
				}
			}else{
				//esta es la opcion por si ingresa un apellido

			}
		}
	}
?>