<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
  <div class="background-image"></div>
    
  <div class="login-container">
    <h2>Hospital de Tucumán</h2>

    <form action="guarusuario.php" method="POST"  enctype="multipart/form-data" class="form" >
        <label for="username">Usuario</label>
        <input type="text" id="username" name="username" placeholder="Campo obligatorio" required ><br><br>
        
        <label for="password">Contraseña</label>
        <input type="password" id="password" name="password" placeholder="Campo obligatorio" required><br><br>

        <input class="btn" type="submit" name="register" value="Enviar" >
        <button type="button"  class="boton" onclick="location.href='registro.php';">Registrarse</button>

    </form>
  </div>
</body>
</html>
