<!DOCTYPE html>
<head>
    <title> Index de Imagenes </title>
    <link rel="stylesheet" href="estilogur.css">
    
</head>

<body>
    <div class="background-image"></div>
    <div class="button-container">
      <a href="paginaprincipal.html" class="button">Volver</a>
    </div>
    <?php
    $conexion = new mysqli("localhost", "root", "", "olimpiadas");


        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $dni = $_POST['dni'];
        $turno = $_POST['turno'];
        $tipo_llamada = $_POST['tipo_llamada'];
        $lugar = $_POST['lugar'];

        $query = "INSERT INTO secretaria VALUES(NULL,'$nombre', '$apellido','$dni','$turno', '$tipo_llamada','$lugar')";
        $resultado = $conexion->query($query);

    ?>

<div id="message-text-container">
        <p id="message-text"> REGISTRO GUARDADO </p>
    </div>

</body>
</html>