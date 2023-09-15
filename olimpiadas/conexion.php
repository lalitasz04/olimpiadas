
<?php
    $conexion = new mysqli("localhost", "root", "", "olimpiadas");


    if($conexion){
        echo "conexion exitosa";
    }
    else{
        echo "conexion no exitosa";
    }
?>