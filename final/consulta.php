<!DOCTYPE html>
<html>
<head>
    <title>Registro de Llamadas</title>
    <link rel="stylesheet" href="estilollamada.css">
</head>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<body>
    <div class="button-container">
      <a href="paginaprincipal.html" class="button">Volver</a>
    </div>
    <div class="background-image"></div>
    <div class="text"><h1>Registro de Llamadas</h1></div>
    
    <?php
    $conexion = new mysqli("localhost", "root", "", "olimpiadas");

    // Verifica si se ha enviado el formulario de filtrado
    if (isset($_POST['filtro'])) {
        $filtro = $_POST['filtro'];

        // Modifica la consulta SQL para aplicar el filtro o mostrar todo
        if ($filtro === 'todo') {
            $sql = "SELECT * FROM llamadas";
        } else {
            $sql = "SELECT * FROM llamadas WHERE origen = '$filtro'";
        }
    } else {
        // Consulta SQL para obtener todas las llamadas
        $sql = "SELECT * FROM llamadas";
    }

   

    // Ejecuta la consulta
    $result = $conexion->query($sql);

    if ($result->num_rows > 0) {
        echo "<table border='1'>";
        echo "<tr><th>ID</th><th>Genero</th><th>Duración</th><th>Tipo</th><th>Atendido</th><th>Fecha y Hora</th><th>Id_area</th><th>Origen</th><th>Lugar</th></tr>";
        
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>".$row["id_llamada"]."</td>";
            echo "<td>".$row["genero"]."</td>";
            echo "<td>".$row["duracion"]." minutos</td>";
            echo "<td>".$row["tipo"]."</td>";
            echo "<td>".$row["atendido"]."</td>";
            echo "<td>".$row["fecha_hora"]."</td>";
            echo "<td>".$row["area"]."</td>";
            echo "<td>".$row["origen"]."</td>";
            echo "<td>".$row["lugar"]."</td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "No hay llamadas registradas.";
    }
     
    if ($filtro === 'todo') {
        $queryTiempoRespuesta = "SELECT AVG(duracion) AS tiempo_promedio FROM llamadas ";
    } else {
        $queryTiempoRespuesta = "SELECT AVG(duracion) AS tiempo_promedio FROM llamadas where origen = '$filtro'";
    }

    $resultadoTiempoRespuesta = $conexion->query($queryTiempoRespuesta);

    if (!$resultadoTiempoRespuesta) {
       die("Error en la consulta de tiempo de respuesta promedio: " . $conexion->error);
    }

    // Obtener el tiempo de respuesta promedio
    $tiempoPromedio = 0;
    if ($fila = $resultadoTiempoRespuesta->fetch_assoc()) {
        $tiempoPromedio = $fila["tiempo_promedio"];

    }

    // Consulta para obtener la asignación de pacientes
    $queryAsignacionPacientes = "SELECT genero, COUNT(*) AS cantidad FROM Paciente GROUP BY genero";
    $resultadoAsignacionPacientes = $conexion->query($queryAsignacionPacientes);

    if (!$resultadoAsignacionPacientes) {
        die("Error en la consulta de asignación de pacientes: " . $conexion->error);
    }

    // Crear un array para almacenar los datos de asignación de pacientes
    $asignacionPacientesData = [];
    while ($fila = $resultadoAsignacionPacientes->fetch_assoc()) {
        $asignacionPacientesData[] = [
            'genero' => $fila['genero'],
            'cantidad' => $fila['cantidad']
        ];
    }


    ?>

    <!-- Filtro -->

    <!-- Formulario de filtrado -->
    <form method="POST" action="">
        <label>Filtrar por Tipo:</label>
        <button type="submit" class="boton-enviar" name="filtro" value="emergencia">Emergencia</button>
        <button type="submit" class="boton-enviar" name="filtro" value="normal">Normal</button>
        <button type="submit" class="boton-enviar" name="filtro" value="todo">Todo</button>

        <!-- Menú desplegable para las áreas -->
        
    </form>
    <div style="width: 50%;">
        <canvas id="graficoTiempoRespuesta"></canvas>
    </div>
    <script>
        // Configurar el gráfico de barras
        var ctxTiempoRespuesta = document.getElementById('graficoTiempoRespuesta').getContext('2d');
        var tiempoRespuestaChart = new Chart(ctxTiempoRespuesta, {
            type: 'bar',
            data: {
                labels: ['Tiempo de Respuesta Promedio'],
                datasets: [{
                    label: 'Tiempo Promedio (minutos)',
                    data: [<?php echo $tiempoPromedio; ?>],
                    backgroundColor: '#080435bb',
                    borderColor: '#080435bb',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</body>
</html>



