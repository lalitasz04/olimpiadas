<!DOCTYPE html>
<head>
    <title> Index de Imagenes </title>
    <link rel="stylesheet" href="modificar.css">
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
    <nav>
        <a href="administrador.php"><button class="boton">Volver</button></a>
    </nav>
            <?php
            $conexion = new mysqli("localhost", "root", "", "olimpiadas");
            $query ="SELECT * FROM Paciente";
            $resultado = $conexion->query($query);
            while($row = $resultado->fetch_assoc()){
            ?>

    <center><br/><br/><br/>
    <form action="proc_modificar.php?id=<?php echo $row['id']; ?> " method="POST" enctype="multipart/form-data">
        <input type="text" REQUIRED name="nombre" value="<?php echo $row['nombre'];  ?>"/><br/><br/>
        <input type="text" REQUIRED name="apellido" value="<?php echo $row['apellido'];  ?>"/><br/><br/>
        <input type="text" REQUIRED name="DNI"  value="<?php echo $row['DNI'];  ?>"/><br/><br/>
        <input type="text" REQUIRED name="edad" value="<?php echo $row['edad'];  ?>"/><br/><br/>
        <input type="text" REQUIRED name="peso" value="<?php echo $row['peso'];  ?>"/><br/><br/>
        <input type="text" REQUIRED name="obra_social"  value="<?php echo $row['obra_social'];  ?>"/><br/><br/>
        <input type="text" REQUIRED name="medicacion"  value="<?php echo $row['medicacion'];  ?>"/><br/><br/>
        <input type="text" REQUIRED name="sintomas"  value="<?php echo $row['sintomas'];  ?>"/><br/><br/>
        <input type="submit" value="Aceptar">
    </form>
    <?php
        }
    ?>
    </center>
    
    
</body>
</html>