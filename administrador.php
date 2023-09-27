<!DOCTYPE html>
<html>
<head>
  <title>Administración</title>
  <link rel="stylesheet" type="text/css" href="stylesadmin.css">

  <script src="html2pdf.bundle.min.js"></script>
  <script src="script.js"></script>
  <link rel="stylesheet" href="style.css">

</head>
<body>
    <nav>
    <!-- Navbar -->
    <div class="navbar">
        
        <div class="navbar-left">
            <div class="hospital-icon"></div>
            <div class="hospital-name">Hospital San Juan</div>
        </div>

    <div class="button-container">
      <a href="paginaprincipal.html" class="button">volver a inicio</a>
    </div>
    </nav>


  <input type="text" id="searchInput" placeholder="Buscar nombres...">

  <button id="btnCrearPdf">Click aquii</button>

  <center>
    <table id="dataTable">
      <thead>
        <tr>
          <th>Nombre</th>
          <th>Apellido</th>
          <th>DNI </th>
          <th>edad</th>
          <th>peso</th>
          <th>obra social</th>
          <th>medicacion</th>
          <th>sintomas</th>
          <th>Tipo llamada</th>
          <th>Area</th>
          <th>Enfermero</th>
          
          <th colspan="2">Operaciones</th>
        </tr>
      </thead>
      <tbody>
        <?php
          $conexion = new mysqli("localhost", "root", "", "olimpiadas");
          $query ="SELECT * FROM Paciente";
          $resultado = $conexion->query($query);
          while($row = $resultado->fetch_assoc()){
        ?>
          <tr>
            <td> <?php echo $row['nombre']; ?></td>
            <td> <?php echo $row['apellido']; ?></td>
            <td> <?php echo $row['DNI']; ?></td>
            <td> <?php echo $row['edad']; ?></td>
            <td> <?php echo $row['peso']; ?></td>
            <td> <?php echo $row['obra_social']; ?></td>
            <td> <?php echo $row['medicacion']; ?></td>
            <td> <?php echo $row['sintomas']; ?></td>
            <td> <?php echo $row['tipo_llamada']; ?></td>
            <td> <?php echo $row['area']; ?></td>
            <td> <?php echo $row['enfermero']; ?></td>
            <th><a href="elim.php?id=<?php echo $row['id']; ?>">Eliminar</th>
          </tr>

        <?php
            }
        ?>

      </tbody>

      <div class="button-container">
      <a href="nuevo.html" class="button">Nuevo Paciente</a>
      <a href="modificar.php?id=<?php echo $row['id']; ?>" class="button">Modificar</a>
      </div>

      
    </table>
  </center> 

  <div class="background-image"></div>
  



  <script src="scriptadmin.js"></script>
  
</html>