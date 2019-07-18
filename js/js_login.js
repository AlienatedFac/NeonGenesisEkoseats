$(document).on('submit','#form_sesion',function(event){
	event.preventDefault();

	$.ajax({
		url: '../../NeonGenesisEkoseats/php/clase_login.php',
		type: 'POST',
		dataType: 'json',
		data: $(this).serialize(),
		beforesend: function(){

		}
	})
	.done(function(respuesta) {
		console.log(respuesta);
		if(!respuesta.error){
			location.href = "../../NeonGenesisEkoseats/index.php";
		}else{
			$("#correo").val("");
			$("#contra").val("");
			$("#error_msg_login").addClass("error_not");
		}
	})
	.fail(function(resp) {
		console.log(resp.responseText);
	})
	.always(function() {
		console.log("complete");
	});
	
});