<?php
$conexion = new mysqli("localhost", "root", "", "olimpiadas");


if ($conexion->connect_error) {
    die("Error en la conexión a la base de datos: " . $conexion->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $username = $_POST['username'];
    $password = $_POST['password'];

    
    $query = "INSERT INTO usuario (username, password) VALUES ('$username', '$password')";

    if ($conexion->query($query) === TRUE) {
       
        echo "Datos guardados";
    } else {
        
        echo "Error al guardar los datos: " . $conexion->error;
    }
}

$conexion->close();
?>
