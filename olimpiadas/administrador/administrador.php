<!DOCTYPE html>
<html>
<head>
  <title>Mi Página</title>
  <link rel="stylesheet" type="text/css" href="styles.css">

</head>
<body>
  <nav class="navbar">
    <div class="logo">
      <img src="logo.png" alt="Logo">
    </div>
    <div class="nav-links">
      <button><a href="otra_pagina.php">Otra Página</a></button>
    </div>
  </nav>

  <div class="content">
    <div class="search-bar">
      <input type="text" id="searchInput" placeholder="Buscar en la tabla">
    </div>
  <center>
    <table>
      <thead>
        <tr>
          <th>Numero de identificacion  </th> 
          <th>Nombre  </th>
          <th>Apellido  </th>
          <th>DNI </th>
          <th>edad  </th>
          <th>peso  </th>
          <th>obra social </th>
          <th>medicacion  </th>
          <th>sintomas  </th>
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
            <td> <?php echo $row['dni']; ?></td>
            <td> <?php echo $row['edad']; ?></td>
            <td> <?php echo $row['peso']; ?></td>
            <td> <?php echo $row['obra social']; ?></td>
            <td> <?php echo $row['medicacion']; ?></td>
            <td> <?php echo $row['sintomas']; ?></td>
            <th><a href="modificar.php?id=<?php echo $row['id']; ?>">Modificar</th>
            <th><a href="eliminar.php?id=<?php echo $row['id']; ?>">Eliminar</th>
          </tr>


        <?php
            }
        ?>

      </tbody>
          
    </table>
  </center> 

    

  <script src="script.js"></script>
</body>
</html>
