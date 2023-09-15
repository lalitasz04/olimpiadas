<?php
    include("conexion.php");

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $DNI = $_POST['DNI'];
    $edad = $_POST['edad'];
    $peso = $_POST['peso'];
    $obra_social = $_POST['obra_social'];
    $medicacion = $_POST['medicacion'];
    $area = $_POST['area'];
    $enfermero = $_POST['enfermero'];

    $query = "INSERT INTO Paciente VALUES(NULL,'$nombre', '$apellido','$DNI','$edad', '$peso','$obra_social','$medicacion','$area','$enfermero')";
    echo $query;
    $resultado = $conexion->query($query);

?>