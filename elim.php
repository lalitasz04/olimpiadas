<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Datos</title>
    <link rel="stylesheet" href="eliminar.css">
</head>
<body>
    <div class="background-image"></div>
    <div id="message-container" class="hidden">
        <p id="message-text">Se pudo eliminar correctamente.</p>
    </div>
    <?php
    $conexion = new mysqli("localhost", "root", "", "olimpiadas");

    $id = $_REQUEST['id']; 

    $query = "DELETE FROM Paciente WHERE id = '$id'";
    $resultado = $conexion->query($query);

    if($resultado){
        echo "<script>showMessage();</script>";
    }
    else{
        echo " No se eliminó";
    }
    ?>

    <script src="script.js"></script>
</body>
</html>  
