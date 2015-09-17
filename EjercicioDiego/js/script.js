$(document).ready(function(){ 


$("#grado").change(function() {
			var gradoVal = $("#grado").val();
			$.ajax({
				method: "POST",
				url: "ajaxPrincipal.php",
				data: { grado: gradoVal}
			})

			.done(function( msg ) {
				$("#resultado").html(msg);
			});
		});


		$("#resultado").change(function() {
			var gradoVal = $("#curso").val();
			var grado3 = $("#grado").val();
			$.ajax({
				method: "POST",
				url: "ajaxPrincipal.php",
				data: { curso: gradoVal, grado3: grado3}
			})

			.done(function( msg ) {
				$("#segundoresultado").html(msg);
			});
		});

		$("#segundoresultado").change(function() {
			var gradoVal = $("#materia").val();
			var nombre = $("#nombre").val();
			var apellido = $("#apellido").val();
			var valor= $("#valor").val();
			var grado2= $("#grado").val();

			$.ajax({
				method: "POST",
				url: "ajaxPrincipal.php",
				data: { materia: gradoVal,
						nombre: nombre,
						apellido: apellido,
						valor: valor,
						grado2: grado2

				}
			})

			.done(function( msg ) {
				$("#tercerresultado").html(msg);
			});
		});


});