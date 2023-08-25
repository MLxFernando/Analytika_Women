<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #e5e5e5; /* Fondo Gris más claro */
            color: #333; /* Texto oscuro para contrastar */
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            background-color: #f2f2f2; /* Gris claro para el contenedor */
        }

        .report-title {
            text-align: center;
            margin-top: 20px;
            padding: 10px 0;
            background-color: #333; /* Gris Oscuro */
            font-size: 28px;
            border-radius: 5px;
            color: white; /* Texto blanco para contrastar */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
        }

        .table-container {
            margin-top: 20px;
            overflow-x: auto;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            background-color: white;
            border-radius: 5px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .table th,
        .table td {
            padding: 12px;
            border-bottom: 1px solid #dee2e6; /* Gris claro */
            text-align: center;
        }

        .table th {
            background-color: #6c757d; /* Gris */
            color: white;
            font-weight: bold;
        }

        .table tbody tr:hover {
            background-color: #f2f2f2;
        }

        .table tbody td {
            font-size: 16px;
            color: #333;
        }

        .table tbody td:first-child {
            font-weight: bold;
            color: #333; /* Texto oscuro */
        }

        .table tbody tr:nth-child(odd) {
            background-color: #f9f9f9;
        }

        .table tbody tr:nth-child(even) {
            background-color: #e9ecef; /* Gris muy claro */
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="report-title">
            Reporte de roles
        </div>
        <div class="table-container">
            <table class="table">
                <thead>
                        <tr>
                        <th>ID</th>
                        <th>NOMBRE</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($roles as $rol)
                    <tr>
                        <td>{{$rol->ROL_ID}}</td>
                        <td>{{$rol->ROL_NOMBRE}}</td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>
