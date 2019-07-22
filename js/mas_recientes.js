$(document).ready(function(){
	$('#mas_recientes').load('../NeonGenesisEkoseats/ajax/mas_recientes.php');
	

	$('#boton_agregar_carrito').click(function() {
		id_usuario = $('#id_usuario').val();	
		id_producto = $('#id_producto').val();
		cantidad = $('#cantidad_producto').val();

		$.ajax({
			url: '../NeonGenesisEkoseats/php/insercion_carrito.php',
			type: 'post',
			// dataType: 'default: Intelligent Guess (Other values: xml, json, script, or html)',
			data: {param1: id_usuario, param2: id_producto, param3: cantidad},
			success:function(r){
				if(r==1){
					$('#mas_recientes').load('../NeonGenesisEkoseats/ajax/mas_recientes.php');
					alertify.success("Agregado con Exito.");
				}else{
					alertify.error("Error al Agregar.");
				}
			}
		});
	});
});

function agregarDatosModal(datos){
	d=datos.split('||');
	id=d[0];
	$('#nombre').val(d[1]);
	$('#id_producto').val(d[0]);
}