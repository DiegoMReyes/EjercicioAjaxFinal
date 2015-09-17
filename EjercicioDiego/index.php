<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio</title>


	<script src="js/jquery-1.11.3.js"></script>
	<script src="js/script.js"></script>
</head>


<body  >
<center>

 

			<h3>Ingrese los datos del alumno</h3>

				<form  method="POST">

				

				<label><strong>Ingrese los nombres</strong></label>
				<input  name="nombre" id="nombre" placeholder="Ingresa los nombres" required/><br>
				<label><strong>Ingrese los apellidos</strong></label>
				<input  name="apellido" id="apellido" placeholder="Ingresa los apellidos"required/><br>
				<label><strong>Ingrese el valor inicial</strong></label>
				<input   type="number" name="valor" id="valor" placeholder="Ingresa el valor" required/><br><br>

				  

				<strong>Seleccione Grado </strong>
				<select id="grado" name="grado" required>
						
						<option value="">Seleccione Grado</option>
						<option value="primero">Primero</option>
						<option value="segundo">Segundo</option>

				</select>

				<div id="resultado" ></div>
				<div id="segundoresultado"></div>

				<div id="tercerresultado"></div>

				 


				</form>
 

 


</body>
</html>