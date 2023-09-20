<?php
    $conexion = new mysqli("localhost", "root", "", "olimpiadas");

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $DNI = $_POST['DNI'];
    $edad = $_POST['edad'];
    $peso = $_POST['peso'];
    $obra_social = $_POST['obra_social'];
    $medicacion = $_POST['medicacion'];
    $sintomas = $_POST['sintomas'];
    $tipo_llamada= $_POST['tipo_llamada'];
    $area = $_POST['area'];
    $enfermero = $_POST['enfermero'];


    

    $query = "INSERT INTO Paciente VALUES(NULL,'$nombre', '$apellido','$DNI','$edad', '$peso','$obra_social','$medicacion','$sintomas','$tipo_llamada','$area','$enfermero')";
    $resultado = $conexion->query($query);
    echo $query;

?>