<?php
	if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){

		session_start();

		require 'conexion.php';
		sleep(2);
		$mysqli->set_charset('utf8');

		$user = $mysqli->real_escape_string($_POST['input_usuario']);
		$pass = $mysqli->real_escape_string($_POST['input_contra']);

		if($nueva_consulta = $mysqli->prepare("SELECT id_usuario,nombre_usuario FROM usuarios WHERE correo_usuario = ? AND clave_usuario = ?")){

			$nueva_consulta->bind_param('ss', $user, $pass);
			$nueva_consulta->execute();
			$resultado = $nueva_consulta->get_result();

			if($resultado->num_rows == 1){
				$datos = $resultado->fetch_assoc();
				echo json_encode(array('error' => false,'id_usuario' => $datos['id_usuario'] , 'nombre_usuario' => $datos['nombre_usuario']));
					$_SESSION['id_usuario'] = $datos['id_usuario'];
					$_SESSION['nombre_usuario'] = $datos['nombre_usuario'];
			}else{
				echo json_encode(array('error' => true));
			}
			$nueva_consulta->close();
		}
	}

?>