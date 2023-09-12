<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Registro</title>
    <link rel="stylesheet" type="text/css" href="css/pepita.css">
</head>
<body style="background-image: url(./img/foto.jpg);background-repeat: no-repeat;background-size: cover;">
	
	<?php include("conexion.php"); ?>

	<div class="container">
        <header>
            <h1>Registro</h1>
        </header>
		
		<main>
			<form action="insertar_datos.php" method="POST">
				<div>
					<label> Nombre: </label>
					<input type="text" name="nombre" placeholder=" Campo obligatorio" required>
				</div>
				<div>
					<label> Apellido: </label>
					<input type="text" name="apellido" placeholder=" Campo obligatorio" required>
				</div>
				<div>
					<label> DNI: </label>
					<input type="text" name="dni" placeholder=" Campo obligatorio" required>
				</div>
				<div>
					<label> edad: </label>
					<input type="text" name="edad" placeholder=" Campo obligatorio" required>
				</div>
				<div>
					<label> peso: </label>
					<input type="text" name="peso" placeholder=" Campo obligatorio" required>
				</div>
                <div>
					<label> obra social: </label>
					<input type="text" name="obra_social" placeholder=" Campo obligatorio" required>
				</div>
                <div>
					<label> medicacion: </label>
					<input type="text" name="medicacion" placeholder=" Campo obligatorio" required>
				</div>
                <div>
					<label> area: </label>
					<input type="text" name="area" placeholder=" Campo obligatorio" required>
				</div>
                <div>
					<label> enferemero: </label>
					<input type="text" name="enfermero" placeholder=" Campo obligatorio" required>
				</div>
				<div>
					<button type="submit" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Enviar</button>
				</div>
			</form>
		</main>
	</div>
<!-- Seccion añadida -->

    <!-- <script src="js/registroP.js"></script> -->
</body>
</html>

