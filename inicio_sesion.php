<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>inicio de sesion</title>
    <link rel="stylesheet" type="text/css" href="css/pepita.css">
</head>
<body style="background-image: url(./img/foto.jpg);background-repeat: no-repeat;background-size: cover;">

    <div class="container">
        <header>
            <h1>Iniciar Sesión</h1>
        </header>

        <main>
            <form action="" method="post">
                <label>Usuario:</label>
                <input type="text" name="usuario" required>

                <label>Contraseña:</label>
                <input type="password" name="contraseña" required>
                
                <?php

                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $conexion = mysqli_connect("localhost", "root", "", "hospital");

                    if (isset($_POST['usuario']) && isset($_POST['contraseña'])) {
                        $usuario = $_POST['usuario'];
                        $contraseña = $_POST['contraseña'];

                        // Verificar en la tabla "InicioSesion"
                        $query_inicio = mysqli_query($conexion, "SELECT * FROM sesion WHERE usuario = '$usuario' AND contraseña = '$contraseña'");
                        $nr_inicio = mysqli_num_rows($query_inicio);

                        // Verificar en la tabla "inicio_usuario"
                        $query_usuarios = mysqli_query($conexion, "SELECT * FROM sesion WHERE usuario = '$usuario' AND contraseña = '$contraseña'");
                        $nr_usuarios = mysqli_num_rows($query_usuarios);

                        if ($nr_inicio == 1) {
                            echo "Bienvenido " . $usuario;
                            header("Location: index.php"); 
                        } elseif ($nr_usuarios == 1) {
                            echo "Bienvenido " . $usuario;
                            header("Location: index.php");
                        } else {
                            echo "Usuario o Contraseña incorrecta";
                        }
                    }
                }
                ?>
                <button type="submit" name="databoton">Enviar</button>
                <button><a style="color: rgb(255, 167, 72);text-decoration: none;" href="registro.php">Registrarse</a></button>
            </form>
        </main>
    </div>
</body>
</html>