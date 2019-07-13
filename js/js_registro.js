$(document).on('submit','#form_registro',function(event){
	event.preventDefault();

	$.ajax({
		url: '../../NeonGenesisEkoseats/php/clase_registro.php',
		type: 'POST',
		dataType: 'json',
		data: $(this).serialize(),
		beforesend: function(){

		}
	})
	.done(function(respuesta) {
		console.log(respuesta);
		if(respuesta.error){
			if(respuesta.correo){
				$("#nombre").val("");
				$("#apellidos").val("");
				$("#correo").val("");
				$("#error_msg_correo").addClass("error_correo_again_not");
			}
		}else{
			location.href ="../../NeonGenesisEkoseats/login.php";
		}
	})
	.fail(function(resp) {
		console.log(resp.responseText);
	})
	.always(function() {
		console.log("complete");
	});
	
});