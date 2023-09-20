<?php
$conexion = new mysqli("localhost", "root", "", "olimpiadas");


    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $dni = $_POST['dni'];
    $turno = $_POST['turno'];
    $tipo_llamada = $_POST['tipo_llamada'];

    $query = "INSERT INTO secretaria VALUES(NULL,'$nombre', '$apellido','$dni','$turno', '$tipo_llamada')";
    echo $query;
    $resultado = $conexion->query($query);

?>