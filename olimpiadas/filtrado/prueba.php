<!DOCTYPE html>
<html>
<head>
    <title>Tipo de Llamadas</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Tipo de Llamadas</h1>

    <table id="tipoLlamadas">
        <tr>
            <th>Llamada</th>
        </tr>
        <tr>
            <td>Emergencia</td>
        </tr>
        <tr>
            <td>Normal</td>
        </tr>
        <tr>
            <td>Todo</td>
        </tr>
    </table>

    <button onclick="filtrarLlamadas('Emergencia')">Emergencia</button>
    <button onclick="filtrarLlamadas('Normal')">Normal</button>
    <button onclick="mostrarTodasLlamadas()">Todo</button>

    <script>
        function filtrarLlamadas(tipo) {
            const table = document.getElementById('tipoLlamadas');
            const rows = table.getElementsByTagName('tr');

            for (let i = 1; i < rows.length; i++) {
                const cell = rows[i].getElementsByTagName('td')[0];
                if (cell) {
                    const llamadaTipo = cell.innerText;
                    rows[i].style.display = llamadaTipo === tipo ? '' : 'none';
                }
            }
        }

        function mostrarTodasLlamadas() {
            const table = document.getElementById('tipoLlamadas');
            const rows = table.getElementsByTagName('tr');

            for (let i = 1; i < rows.length; i++) {
                rows[i].style.display = '';
            }
        }
    </script>
</body>
</html>

