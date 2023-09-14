<?php
$nombre =  $_POST['nombre'];
$apellido =  $_POST['apellido'];
$correo =  $_POST['correo'];
$usuario =  $_POST['usuario'];
$contraseña =  $_POST['contraseña'];

//include("conexion.php");
$conexion = mysqli_connect("localhost","root","","PepitaLaPistolera") or exit ("No se pudo rei");
$insertar= "INSERT INTO `inicio_usuario` VALUES (NULL,'Cliente', '$nombre','$apellido','$correo','$usuario','$contraseña')";

mysqli_query($conexion,$insertar);
header("Location:index.php")
?>