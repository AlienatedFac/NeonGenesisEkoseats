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

		}else{
			
		}
	})
	.fail(function(resp) {
		console.log(resp.responseText);
	})
	.always(function() {
		console.log("complete");
	});
	
});