<script>

$(function() {
   
	$('#nl_contenedor_coleccion').load('/nl/ajax/coleccion.php', function( response, status, xhr ) {
		console.log("cargando");
		if ( status == "error" ) {
			var msg = "Error en la carga: ";
			$( "#error" ).html( msg + xhr.status + " " + xhr.statusText );
		}
	});

	$('#nl_contenedor_coleccion').on('click', '.trigger', function() {

		console.log($(this).attr('id'));

		var id = $(this).attr('id');

		var form = $('<form method="post" action="objeto.php"><input type="hidden" name="id" value='+id+'></form>')
		$(document.body).append(form);

		form.submit();

	});

});

</script>


