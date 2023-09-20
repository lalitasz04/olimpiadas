<?php
$conexion = new mysqli("localhost", "root", "", "olimpiadas");

// Verifica si la conexión a la base de datos fue exitosa
if ($conexion->connect_error) {
    die("Error en la conexión a la base de datos: " . $conexion->connect_error);
}

// Verifica si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtiene los datos enviados desde el formulario
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Consulta SQL para insertar el nuevo usuario en la base de datos
    $query = "INSERT INTO usuario (username, password) VALUES ('$username', '$password')";

    if ($conexion->query($query) === TRUE) {
        // Datos guardados, muestra un mensaje de confirmación
        echo "Datos guardados";
    } else {
        // Si hay un error en la inserción, muestra un mensaje de error
        echo "Error al guardar los datos: " . $conexion->error;
    }
}

// Cierra la conexión a la base de datos
$conexion->close();
?>
