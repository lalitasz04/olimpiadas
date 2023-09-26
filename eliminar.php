<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="eliminar.css">
</head>
<body>
    <div class="background-image"></div>
    <?php
    $conexion = new mysqli("localhost", "root", "", "olimpiadas");

    $id = $_REQUEST['id']; 

  
    $query = "DELETE FROM Paciente WHERE id = '$id'";
    $resultado = $conexion->query($query);

    if($resultado){
        header(Location: administrador.php);
    }
    else{
        echo " No se elimino";
    }
    ?>
</body>
</html>
