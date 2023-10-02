<!DOCTYPE html>
<html>
<head>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
  <link rel="stylesheet" href="pdf.css">
</head>
<body>
  <div>
      <a href="administrador.php" class="button">Volver</a>
  </div>
  <div class="texto">
    <h1>Registro de pacientes</h1>
  </div>
  <center>
    <table border="2">
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
          </tr>

        <?php
            }
        ?>

      </tbody>
    </table>
    <div class="button-container">
      <button id="btnCrearPdf" class="button">Crear PDF de la Tabla</button>
    </div>
  </center>
  
  
  <script>
  document.addEventListener("DOMContentLoaded", () => {
  const $boton = document.querySelector("#btnCrearPdf");
  $boton.addEventListener("click", () => {
    const $tablaParaConvertir = document.querySelector("table");

    // Duplicar la tabla para mantenerla en el documento original
    const $tablaCopia = $tablaParaConvertir.cloneNode(true);

    // Crear un contenedor div para centrar la tabla
    const $contenedor = document.createElement("div");
    $contenedor.style.display = "flex";
    $contenedor.style.justifyContent = "center";
    $contenedor.style.alignItems = "center";
    $contenedor.style.height = "100%"; // Opcional: Ajusta la altura del contenedor

    // Agregar la tabla duplicada al contenedor
    $contenedor.appendChild($tablaCopia);

    html2pdf()
      .set({
        margin: 10,
        filename: 'tabla.pdf',
        image: { type: 'jpeg', quality: 0.98 },
        html2canvas: { scale: 2 },
        jsPDF: { unit: "mm", format: "a4", orientation: 'landscape' }
      })
      .from($contenedor) // Ahora convierte el contenedor, que contiene la tabla centrada
      .save()
      .catch(err => console.log(err));
    });
  });

 
  </script>
  <div class="background-image"></div>
</body>
</html>

