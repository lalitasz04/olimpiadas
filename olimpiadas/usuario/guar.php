<?php
$conexion = new mysqli("localhost", "root", "", "olimpiadas");


    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "INSERT INTO usuario VALUES(NULL,'$username','$password')";
    echo $query;
    $resultado = $conexion->query($query);

?>