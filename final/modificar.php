<!DOCTYPE html>
<head>
    <title> Index de Imagenes </title>
    <link rel="stylesheet" href="modificar.css">
    
</head>
<body>
    <div class="background-image"></div>
    <div class="button-container" >
        <a href="administrador.php"><button class="button">Volver</button></a>
    </div>

    <div class="texto">
        <h2>MODIFICAR REGISTROS</h2>
    </div>
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
        <input type="text" REQUIRED name="genero"  value="<?php echo $row['genero'];  ?>"/><br/><br/>
        <input type="text" REQUIRED name="tipo_llamada"  value="<?php echo $row['tipo_llamada'];  ?>"/><br/><br/>
        <input type="text" REQUIRED name="area"  value="<?php echo $row['area'];  ?>"/><br/><br/>
        <input type="text" REQUIRED name="enfermero"  value="<?php echo $row['enfermero'];  ?>"/><br/><br/>
        <div>
            <input type="submit" class="buton" value="Aceptar">
        </div>
        
    </form>
    <?php
        }
    ?>
    </center>

    
    
</body>
</html>