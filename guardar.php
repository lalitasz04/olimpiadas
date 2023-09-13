<?php
    include("conexion-1.php");

    $nombre = $_POST['nombre'];
    $apellido = $POST['apellido']
    $DNI = $POST['DNI']
    $edad = $POST['edad']
    $obra_social = $POST['obra_social']
    $medicacion = $POST['medicacion']
    $Olimpiadas = addslashes(file_get_contents($_FILES['Olimpiadas']['tmp_name']));

    $query = "INSERT INTO Paciente(nombre,apellido,DNI,edad,peso,obra_social,medicacion) VALUES('$nombre', '$apellido','$DNI','$edad', '$peso','$obra_social','$medicacion','$Olimpiadas')";
    $resultado = $conexion->query($query);

?>