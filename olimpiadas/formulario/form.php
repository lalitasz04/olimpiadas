<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    
    <form action="gur.php" method="POST"  enctype="multipart/form-data" class="form" >
    
        <h2 class="form__title"></h2>

        <h1> Registro</h1>

        <div class="form__container">
            <div class="form__group">
                <input type="text" id="nombre" name="nombre" class="form__input" placeholder="Campo obligatorio" >
                <label for="nombre" class="form__label">Nombre</label>
                <span class="form__line"></span>
            </div>
            <div class="form__group">
                <input type="text" id="apellido" name="apellido" class="form__input" placeholder="Campo obligatorio" >
                <label for="apellido" class="form__label">Apellido</label>
                <span class="form__line"></span>
            </div>
            <div class="form__group">
                <input type="text" id="dni" name="dni" class="form__input" placeholder="Campo obligatorio" >
                <label for="dni" class="form__label">DNI</label>
                <span class="form__line"></span>
            </div>
            <div class="form__group">
                <input type="text" id="turno" name="turno" class="form__input" placeholder="Campo obligatorio" >
                <label for="turno" class="form__label">Turno</label>
                <span class="form__line"></span>
            </div>
            <div class="form__group">
                <input type="text" id="lugar" name="lugar" class="form__input" placeholder="Campo obligatorio" >
                <label for="lugar" class="form__label">Lugar</label>
                <span class="form__line"></span>
            </div>
            <div class="form__group">
                <input type="text" id="tipo_llamada" name="tipo_llamada" class="form__input" placeholder="Campo obligatorio" >
                <label for="tipo_llamada" class="form__label">Tipo de llamada</label>
                <span class="form__line"></span>
            </div>

     
        <div>
            <input class="btn" type="submit" name="register" value="Enviar" >
        </div>
        
        
    </form>

</body>
</html>