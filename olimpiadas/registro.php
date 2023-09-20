<!DOCTYPE html>
<html>
<head>
  <title>Registrarse</title>
  <link rel="stylesheet" type="text/css" href="styless.css">
</head>
<body>
    
  <div class="login-container">
    <h2>REGISTRARSE</h2>

    <form action="Guar.php" method="POST"  enctype="multipart/form-data" class="form" >
        <label for="username">Nombre</label>
        <input type="text" id="username" name="username" placeholder="Campo obligatorio" required ><br><br>
        
        <label for="password">Contraseña</label>
        <input type="password" id="password" name="password" placeholder="Campo obligatorio" required><br><br>

        <input class="btn" type="submit" name="register" value="Enviar" >
        <button type="button"  class="boton" onclick="location.href='usuario.php';">volver</button>

    </form>
  </div>
  <script src="script.js"></script>
</body>
</html>
