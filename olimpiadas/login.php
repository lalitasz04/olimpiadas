<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<title>Inicio de secion</title>
<body>
    <img class="wave" scr="img/login.php">
    <div class="container">
        <div class="img">
        </div>
        <div class="login-content">
            <form method="POST" action="">
                <img scr="img/usuario.png">
                <h2 class="title">BIENVENIDO</h2>

                <?php
                include "controlador_login.php";
                ?>

                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <h5>usuario</h5>
                        <input id="usuario" type="text" class="input" name="usuario">
                    </div>
                </div>

                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div> 
                    <div class="div">
                        <h5>Contraseña</h5>
                        <input type="password" id="input" class="input" name="password">
                    </div>
                </div>
                <div class="view">
                    <div class="fas fa-eye verPassword" onclick="vista()" id="verPassword"></div>
                </div>

                <div class="text-center">
                    <a class="font-italic isai5" href="">Olvide mi contraseña</a>
                    <a class="ont-italic isai5" href="registro.php">Regristrarse</a>
                </div>
                <input name="btningresar" class="btn" type="submit" value="INICIAR SECION">
            </form>
        </div>   
    </div>
</body>