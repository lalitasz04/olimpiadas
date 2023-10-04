<!DOCTYPE html>
<html>
<head>
  <title>Administración</title>
  <link rel="stylesheet" type="text/css" href="stylesadmin.css">

  <script src="html2pdf.bundle.min.js"></script>
  <link rel="stylesheet" href="style.css">

</head>
<body>
    <nav>
    <!-- Navbar -->
    <div class="navbar">
        
        <div class="navbar-left">
            <div class="hospital-icon"></div>
            <div class="hospital-name">Hospital de Tucumán</div>
        </div>

    <div class="button-container">
      <a href="paginaprincipal.html" class="button">volver a inicio</a>
    </div>
    </nav>

 

  <!-- Lista desplegable de opciones de filtrado -->
  <label for="filtro">Filtrar por:</label>
  <select id="filtro">
    <option value="todos">Todos</option>
    <option value="nombre">Nombre</option>
    <option value="apellido">Apellido</option>
    <option value="DNI">Dni</option>
    <option value="edad">Edad</option>
    <option value="peso">Peso</option>
    <option value="obra_social">Obra Social</option>
    <option value="medicacion">Medicacion</option>
    <option value="sintomas">Sintomas</option>
    <option value="genero">Genero</option>
    <option value="tipo_llamada">Tipo de llamada</option>
    <option value="area">Area</option>
    <option value="enfermero">Enfermero</option>
  </select>
    
    <!-- Cuadro de entrada para filtrar -->

  <input type="text" class="btn" id="filtroInput" placeholder="Ingrese el valor de filtrado">
  <a href="hacerpdf.php" class="boton">Crear PDF</a>



  <center>
    <table id="dataTable">
      <thead>
        <tr>
          <th>Nombre</th>
          <th>Apellido</th>
          <th>DNI </th>
          <th>Edad</th>
          <th>Peso</th>
          <th>Obra social</th>
          <th>Medicacion</th>
          <th>Sintomas</th>
          <th>Genero</th>
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
            <td> <?php echo $row['genero']; ?></td>
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

  <script>
      const filtroSelect = document.getElementById("filtro");
      const filtroInput = document.getElementById("filtroInput");

      filtroSelect.addEventListener("change", filtrarTabla);
      filtroInput.addEventListener("input", filtrarTabla);

      function filtrarTabla() {
          const filtro = filtroSelect.value;
          const valor = filtroInput.value.toLowerCase();
          const table = document.getElementById("dataTable");
          const rows = table.getElementsByTagName("tr");

          for (let i = 1; i < rows.length; i++) {
              const row = rows[i];
              const cells = row.getElementsByTagName("td");
              let text = '';

              if (filtro === "nombre") {
                  text = cells[0].textContent || cells[0].innerText;
              } else if (filtro === "apellido") {
                  text = cells[1].textContent || cells[1].innerText;
              } else if (filtro === "DNI") {
                  text = cells[2].textContent || cells[2].innerText;
              } else if (filtro === "edad") {
                  text = cells[3].textContent || cells[3].innerText;
              } else if (filtro === "peso") {
                  text = cells[4].textContent || cells[4].innerText;
              } else if (filtro === "obra_social") {
                  text = cells[5].textContent || cells[5].innerText;
              } else if (filtro === "medicacion") {
                  text = cells[6].textContent || cells[6].innerText;
              } else if (filtro === "sintomas") {
                  text = cells[7].textContent || cells[7].innerText;
              } else if (filtro === "genero") {
                  text = cells[8].textContent || cells[8].innerText;
              } else if (filtro === "tipo_llamada") {
                  text = cells[9].textContent || cells[9].innerText;
              } else if (filtro === "area") {
                  text = cells[10].textContent || cells[10].innerText;
              } else if (filtro === "enfermero") {
                  text = cells[11].textContent || cells[11].innerText;
              } else {
                  text = Array.from(cells).map(cell => cell.textContent || cell.innerText).join("");
              }

              if (filtro === "todos" || text.toLowerCase().includes(valor)) {
                  row.style.display = "";
              } else {
                  row.style.display = "none";
              }
          }
      }
    </script>


  <script src="scriptadmin.js"></script>
  
</html>
