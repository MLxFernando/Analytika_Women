<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
        }

        .table th,
        .table td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: center;
            background-color: #e6f2ff; /* Cambiamos el fondo a un azul claro */
            color: black; /* Cambiamos el color de texto a negro */
        }

        .table th {
            background-color: #333333;
            color: white;
            font-weight: bold;
        }

        .table tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <table class="table">
                    <thead>
                        <tr>
                        <th>ID</th>
                        <th>NOMBRE</th>
                        <th>DESCRIPCION</th>
                        <th>FECHA CREACION</th>
                        <th>FECHA ELIMINACION</th>
                        <th>POSTULANTES</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($empleos as $empleo)
                    <tr>
                        <td>{{$empleo->BDE_ID}}</td>
                        <td>{{$empleo->BDE_NOMBRE}}</td>
                        <td>{{$empleo->BDE_DESCRIPCION}}</td>
                        <td>{{$empleo->BDE_FECHA_CREACION}}</td>
                        <td>{{$empleo->BDE_FECHA_ELIMINACION}}</td>
                        <td>{{$empleo->BDE_POSTULANTES}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>

