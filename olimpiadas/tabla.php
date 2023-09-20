<!DOCTYPE html>
<html>
<head>
  <title>Tabla de Datos</title>
  <style>
    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }

    table, th, td {
      border: 1px solid black;
      padding: 10px;
      text-align: left;
    }

    th {
      background-color: #f2f2f2;
    }
  </style>
</head>
<body>

<h2>Tabla de Datos</h2>

<table>
  <thead>
    <tr>
      <th>Nombre</th>
      <th>Apellido</th>
      <th>DNI</th>
      <th>Edad</th>
      <th>Peso</th>
      <th>Obra Social</th>
      <th>Medicación</th>
      <th>Síntomas</th>
    </tr>
  </thead>
  <tbody>
    <?php
    // Ejemplo de datos, puedes reemplazarlos con datos de una base de datos
    $datos = array(
      array("John", "Doe", "12345678", 30, 75, "OSDE", "Aspirina", "Dolor de cabeza"),
      array("Jane", "Smith", "87654321", 25, 62, "Swiss Medical", "Paracetamol", "Fiebre")
    );

    // Mostrar los datos en la tabla
    foreach ($datos as $fila) {
      echo "<tr>";
      for ($i = 0; $i < count($fila); $i++) {
        echo "<td>{$fila[$i]}</td>";
      }
      echo "</tr>";
    }
    ?>
  </tbody>
</table>

</body>
</html>
