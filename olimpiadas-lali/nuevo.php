<!DOCTYPE html>
<head>
    <title> NUEVO PACIENTE </title>
    <link rel="stylesheet" href="estilonuevo.css">
    
</head>

<body>
    <div class="background-image"></div>    
    <div class="button-container">
      <a href="administrador.php" class="button">Volver</a>
    </div>
    <h1>NUEVO PACIENTE</h1>
    <center><br/><br/><br/>

    <form action="guardar.php" method="POST" enctype="multipart/form-data">
        <input type="text" REQUIRED name="nombre" placeholder="Nombre..." value=""/><br/><br/>
        <input type="text" REQUIRED name="apellido" placeholder="Apellido..." value=""/><br/><br/>
        <input type="text" REQUIRED name="DNI" placeholder="DNI..." value=""/><br/><br/>
        <input type="text" REQUIRED name="edad" placeholder="Edad..." value=""/><br/><br/>
        <input type="text" REQUIRED name="peso" placeholder="Peso..." value=""/><br/><br/>
        <input type="text" REQUIRED name="obra_social" placeholder="Obra social..." value=""/><br/><br/>
        <input type="text" REQUIRED name="medicacion" placeholder="Medicacion..." value=""/><br/><br/>
        <input type="text" REQUIRED name="sintomas" placeholder="Sintomas..." value=""/><br/><br/>
        <input type="text" REQUIRED name="tipo_llamada" placeholder="Tipo de llamada..." value=""/><br/><br/>
        <input type="text" REQUIRED name="area" placeholder="Area..." value=""/><br/><br/>
        <input type="text" REQUIRED name="enfermero" placeholder="Enfermero..." value=""/><br/><br/>

        
        <input type="submit" class="button" value="Aceptar">
    </form>
    </center>

   
    <div class="background-image"></div>

    
</body>
</html>