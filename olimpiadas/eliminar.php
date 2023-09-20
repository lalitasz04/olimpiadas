<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="eliminar.css">
    <style>
        nav {
            background: (0,0,0);
            overflow: hidden;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1px;
            color: azure;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 0 10px;
        }

        .contenido {
            padding: 20px;
        }
        nav a:hover {
            color: #FFA52C;
        }

        .boton {
            background-color: #FFA58C;
            border: none;
            color: black;
            padding: 5px 10px; 
            text-align: center;
            text-decoration: none;
            font-size: 15px;
            cursor: pointer;
            transition transform 0.3s, box-shadow 0.3s;
        }

        .boton:hover {
            transform :translateY(-3px);
            box-shadow: 0px 4px 6px (0,0,0, 0.5);
        }
    </style>
</head>
<body>
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