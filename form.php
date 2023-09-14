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
                <input type="text" id="DNI" name="DNI" class="form__input" placeholder="Campo obligatorio" >
                <label for="DNI" class="form__label">DNI</label>
                <span class="form__line"></span>
            </div>
            <div class="form__group">
                <input type="text" id="edad" name="edad" class="form__input" placeholder="Campo obligatorio" >
                <label for="edad" class="form__label">Edad</label>
                <span class="form__line"></span>
            </div>
            <div class="form__group">
                <input type="text" id="peso" name="peso" class="form__input" placeholder="Campo obligatorio" >
                <label for="peso" class="form__label">Peso</label>
                <span class="form__line"></span>
            </div>
            <div class="form__group">
                <input type="text" id="obra_social" name="obra_social" class="form__input" placeholder="Campo obligatorio" >
                <label for="obra_social" class="form__label">Obra social</label>
                <span class="form__line"></span>
            </div>
            <div class="form__group">
                <input type="text" id="medicacion" name="medicacion" class="form__input" placeholder="Campo obligatorio" >
                <label for="medicacion" class="form__label">Medicacion</label>
                <span class="form__line"></span>
            </div>
            <div class="form__group">
                <input type="text" id="area" name="area" class="form__input" placeholder="Campo obligatorio" >
                <label for="area" class="form__label">Area</label>
                <span class="form__line"></span>
            </div>
            <div class="form__group">
                <input type="text" id="enfermero" name="enfermero" class="form__input" placeholder="Campo obligatorio" >
                <label for="enfermero" class="form__label">Enfermero</label>
                <span class="form__line"></span>
            </div>

        <div>
            <input class="btn" type="submit" name="register" value="Enviar" >
        </div>
        
    </form>

</body>
</html>