<?php
    $conexion = new mysqli("localhost", "root", "", "olimpiadas");

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
    echo $query;

    if($resultado){
        header(Location: administrador.php);
    }
    else{
        echo " No se modifico";
    }
?>