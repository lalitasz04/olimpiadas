<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Datos</title>
    <link rel="stylesheet" href="eliminar.css">
</head>
<body>
    <div>
        <a href="administrador.php"><button class="button">Volver</button></a>
    </div>
    <div class="background-image"></div>

    <div id="message-text-container">
        <p id="message-text"> El dato se elimino correctamente</p>
    </div>

    <?php
    $conexion = new mysqli("localhost", "root", "", "olimpiadas");

    $id = $_REQUEST['id']; 

    $query = "DELETE FROM Paciente WHERE id = '$id'";
    $resultado = $conexion->query($query);
  
    ?>

</body>
</html>

