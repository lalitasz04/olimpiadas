<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    
    <form class="form">
        <h2 class="form__title"></h2>

        <h1> Registro</h1>

        <div class="form__container">
            <div class="form__group">
                <input type="text" id="name" class="form__input" placeholder="Campo obligatorio" >
                <label for="name" class="form__label">Nombre</label>
                <span class="form__line"></span>
            </div>
            <div class="form__group">
                <input type="text" id="apellido" class="form__input" placeholder="Campo obligatorio" >
                <label for="apellido" class="form__label">Apellido</label>
                <span class="form__line"></span>
            </div>
            <div class="form__group">
                <input type="text" id="DNI" class="form__input" placeholder="Campo obligatorio" >
                <label for="DNI" class="form__label">DNI</label>
                <span class="form__line"></span>
            </div>
            <div class="form__group">
                <input type="text" id="Edad" class="form__input" placeholder="Campo obligatorio" >
                <label for="Edad" class="form__label">Edad</label>
                <span class="form__line"></span>
            </div>
            <div class="form__group">
                <input type="text" id="Peso" class="form__input" placeholder="Campo obligatorio" >
                <label for="Peso" class="form__label">Peso</label>
                <span class="form__line"></span>
            </div>
            <div class="form__group">
                <input type="text" id="Obra_social" class="form__input" placeholder="Campo obligatorio" >
                <label for="Obra_social" class="form__label">Obra social</label>
                <span class="form__line"></span>
            </div>
            <div class="form__group">
                <input type="text" id="Medicacion" class="form__input" placeholder="Campo obligatorio" >
                <label for="Medicacion" class="form__label">Medicacion</label>
                <span class="form__line"></span>
            </div>
            <div class="form__group">
                <input type="text" id="Area" class="form__input" placeholder="Campo obligatorio" >
                <label for="Area" class="form__label">Area</label>
                <span class="form__line"></span>
            </div>
            <div class="form__group">
                <input type="text" id="Enfermero" class="form__input" placeholder="Campo obligatorio" >
                <label for="Enfermero" class="form__label">Enfermero</label>
                <span class="form__line"></span>
            </div>

            <div>
                <div>
					
                    <button type="submit" data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="mi-boton">Mi Botón</button>
				</div>
        </div>
        
    </form>
    <?php
        include("guardar.php");
    ?>

</body>
</html>