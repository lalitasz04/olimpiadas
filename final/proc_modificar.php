<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificado Exitoso</title>
    <link rel="stylesheet" href="modificarpro.css">
</head>
    <body>
        <div>
            <a href="administrador.php"><button class="button">Volver</button></a>
        </div>
        <div class="background-image"></div>

        <div id="message-text-container">
            <p id="message-text"> El dato se modifico correctamente</p>
        </div>

    </body>
</html>
<?php
$conexion = new mysqli("localhost", "id20458182_lali", "Lali1234$", "id20458182_olimpiadas");


$id = $_REQUEST['id']; 

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$DNI = $_POST['DNI'];
$edad = $_POST['edad'];
$peso = $_POST['peso'];
$obra_social = $_POST['obra_social'];
$medicacion = $_POST['medicacion'];
$sintomas = $_POST['sintomas'];
$tipo_llamada = $_POST['tipo_llamada'];
$area = $_POST['area'];
$enfermero = $_POST['enfermero'];




$query = "UPDATE Paciente SET nombre='$nombre', apellido='$apellido', DNI='$DNI',edad='$edad',peso=$peso,obra_social='$obra_social',medicacion='$medicacion',sintomas='$sintomas',tipo_llamada='$tipo_llamada',area='$area',enfermero='$enfermero' WHERE id = '$id'";
$resultado = $conexion->query($query);


?>

