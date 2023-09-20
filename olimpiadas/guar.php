<?php
$conexion = new mysqli("localhost", "root", "", "olimpiadas");

// Verifica si la conexión a la base de datos fue exitosa
if ($conexion->connect_error) {
    die("Error en la conexión a la base de datos: " . $conexion->connect_error);
}

// Obtiene los datos enviados desde el formulario
$username = $_POST['username'];
$password = $_POST['password'];

// Consulta SQL para buscar el usuario y la contraseña en la base de datos
$query = "SELECT * FROM usuario WHERE username = '$username' AND password = '$password'";
$resultado = $conexion->query($query);

// Verifica si se encontró un usuario con la contraseña proporcionada
if ($resultado->num_rows === 1) {
    // Usuario y contraseña son correctos, redirige al usuario a la página deseada
    header("Location: paginaprincipal.html");
    exit;
} else {
    // Si las credenciales son incorrectas, muestra un mensaje de error
    echo "Usuario o contraseña incorrectos. Inténtalo de nuevo.";
}

// Cierra la conexión a la base de datos
$conexion->close();
?>
