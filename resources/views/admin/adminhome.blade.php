@extends('adminlte::page')

@section('content_header')
    <h1>PANEL ADMINISTRADOR</h1>
@stop

@section('content')
    <div class="container">
        <div class="row">
            @foreach(range(1, 10) as $index)
                <div class="col-md-6">
                    <canvas id="myChart{{ $index }}"></canvas>
                </div>
            @endforeach
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="{{ asset('vendor/chart.js/chart.min.css') }}">
    <style>
        .main-sidebar {
            background: linear-gradient(to bottom, pink, purple);
        }
        
        .main-sidebar .nav-sidebar .nav-link {
            color: black;
        }
        
        .main-sidebar .form-control {
            background-color: white;
        }

        [class*=sidebar-dark-] .nav-header {
            background-color: inherit;
            color: #000000;
        }

        [class*=sidebar-dark-] .nav-treeview>.nav-item>.nav-link {
            color: #000000;
        }
    </style>
@stop

@section('js')
@php

$dbHost = '127.0.0.1';
$dbName = 'analytika';
$dbUser = 'root';
$dbPassword = '';

// Establecer conexión a la base de datos
$conn = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPassword);

// Consulta de ejemplo para obtener los datos del gráfico 1
$query1 = "SELECT * FROM cliente";
$stmt1 = $conn->prepare($query1);
$stmt1->execute();
$data1 = $stmt1->fetchAll(PDO::FETCH_ASSOC);

// Consulta de ejemplo para obtener los datos del gráfico 2
$query2 = "SELECT * FROM bolsa_empleo";
$stmt2 = $conn->prepare($query2);
$stmt2->execute();
$data2 = $stmt2->fetchAll(PDO::FETCH_ASSOC); 

// Consulta de ejemplo para obtener los datos del gráfico 3
$query3 = "SELECT * FROM evento";
$stmt3 = $conn->prepare($query3);
$stmt3->execute();
$data3 = $stmt3->fetchAll(PDO::FETCH_ASSOC);

$colors = ['rgba(255, 99, 132, 0.5)', 'rgba(54, 162, 235, 0.5)', 'rgba(255, 206, 86, 0.5)', 'rgba(75, 192, 192, 0.5)', 'rgba(153, 102, 255, 0.5)', 'rgba(255, 159, 64, 0.5)', 'rgba(255, 0, 0, 0.5)', 'rgba(0, 255, 0, 0.5)', 'rgba(0, 0, 255, 0.5)', 'rgba(128, 128, 128, 0.5)'];
$titles = ['Clientes por Fecha', 'Empleos generados por Fecha', 'Eventos registrados por Fecha', 'Proyectos Completados', 'Nuevos Empleos Registrados', 'Nuevos Aliados', 'Nuevos Consultores', 'Valoración Promedio', 'Visitas diarias', 'Nuevos Cursos'];
$types = ['line', 'bar', 'radar', 'doughnut', 'polarArea', 'bar', 'pie', 'polarArea', 'line', 'bar'];
@endphp

@foreach (range(1, 10) as $index)
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var ctx = document.getElementById('myChart{{ $index }}').getContext('2d');
        var gradient = ctx.createLinearGradient(0, 0, 0, 400);
        gradient.addColorStop(0, '{{ $colors[$index - 1] }}');
        gradient.addColorStop(1, 'rgba(255, 255, 255, 0)');

        // Obtener los valores y fechas de la tabla correspondiente
        var data = [];
        var labels = [];

        @if ($index == 1)
        data = [
            @foreach ($data1 as $row)
                { value: '{{ $row['CLI_ID'] }}', date: '{{ $row['CLI_FECHA_REGISTRO'] }}' },
            @endforeach
        ];
        var groupedData = {};

        // Recorrer los datos y agrupar los valores por fecha
        data.forEach(function (record) {
            var date = record.date;
            if (!groupedData[date]) {
                groupedData[date] = [];
            }
            groupedData[date].push(record.value);
        });

        // Obtener las fechas y los conteos de los valores únicos
        var labels = [];
        var counts = [];

        for (var date in groupedData) {
            labels.push(date);
            counts.push(groupedData[date].length);
        }

        @elseif ($index == 2)
        data = [
            @foreach ($data2 as $row)
                { value: '{{ $row['BDE_ID'] }}', date: '{{ $row['BDE_FECHA_CREACION'] }}' },
            @endforeach
        ];
        var groupedData = {};

        // Recorrer los datos y agrupar los valores por fecha
        data.forEach(function (record) {
            var date = record.date;
            if (!groupedData[date]) {
                groupedData[date] = [];
            }
            groupedData[date].push(record.value);
        });

        // Obtener las fechas y los conteos de los valores únicos
        var labels = [];
        var counts = [];

        for (var date in groupedData) {
            labels.push(date);
            counts.push(groupedData[date].length);
        }
        @elseif ($index == 3)
        data = [
            @foreach ($data3 as $row)
                { value: '{{ $row['EVE_ID'] }}', date: '{{ $row['EVE_FECHA_EVENTO'] }}' },
            @endforeach
        ];
        var groupedData = {};

        // Recorrer los datos y agrupar los valores por fecha
        data.forEach(function (record) {
            var date = record.date;
            if (!groupedData[date]) {
                groupedData[date] = [];
            }
            groupedData[date].push(record.value);
        });

        // Obtener las fechas y los conteos de los valores únicos
        var labels = [];
        var counts = [];

        for (var date in groupedData) {
            labels.push(date);
            counts.push(groupedData[date].length);
        }
        @endif
        

        // Crear un objeto para agrupar los valores por fecha
        var groupedData = {};

        // Recorrer los datos y agrupar los valores por fecha
        data.forEach(function (record) {
            var date = record.date;
            if (!groupedData[date]) {
                groupedData[date] = [];
            }
            groupedData[date].push(record.value);
        });

        // Obtener las fechas y los conteos de los valores únicos
        var counts = [];

        for (var date in groupedData) {
            counts.push(groupedData[date].length);
        }

        var chart = new Chart(ctx, {
            type: '{{ $types[$index - 1] }}',
            data: {
                labels: labels,
                datasets: [{
                    label: '{{ $titles[$index - 1] }}',
                    data: counts,
                    backgroundColor: gradient,
                    borderColor: '{{ $colors[$index - 1] }}',
                    pointBackgroundColor: 'rgba(0, 0, 0, 10)',
                    pointBorderColor: 'rgba(255, 255, 255, 0)',
                    pointHoverBackgroundColor: '{{ $colors[$index - 1] }}',
                    pointHoverBorderColor: 'rgba(255, 255, 255, 0)',
                    borderWidth: 1,
                    fill: true
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: false,
                        min: 0,
                        stepSize: 1 // Asegurarse de que los valores del eje y sean enteros
                    }
                }
            }
        });
    });
</script>
    @endforeach
@stop
