$(document).ready(function(){

	$("#actualizarResultados").click(function(){

		$.ajax({
			url: "php/service.php",
			dataType: "json",
			success: function(data){
				$("#resultados").html("");
				$.each(data,function(index){
					var ronda = data[index].ronda;
					var jugadores = data[index].jugadores;
					$("#resultados").append("<h2>Ronda "+ronda+"</h2>");
					$.each(jugadores,function(_index){
						$("#resultados").append("<p>Jugador: " + jugadores[_index].nombre + " - Puesto: " + jugadores[_index].puntos + "</p>");
					});
				});
			}
		})
	});
})