@extends('adminlte::page')

@section('content_header')
    <h1>PANEL ADMINISTRADOR</h1>
@stop

@section('content')
    <div class="container">
        <div class="row">
            @foreach(range(1, 10) as $index)
                <div class="col-md-4">
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
    <script src="{{ asset('vendor/chart.js/chart.min.js') }}"></script>
    @php
        $colors = ['rgba(255, 99, 132, 0.5)', 'rgba(54, 162, 235, 0.5)', 'rgba(255, 206, 86, 0.5)', 'rgba(75, 192, 192, 0.5)', 'rgba(153, 102, 255, 0.5)', 'rgba(255, 159, 64, 0.5)', 'rgba(255, 0, 0, 0.5)', 'rgba(0, 255, 0, 0.5)', 'rgba(0, 0, 255, 0.5)', 'rgba(128, 128, 128, 0.5)'];
        $titles = ['Clientes por mes', 'Usuarios Registrados', 'Ingresos por categoría', 'Proyectos Completados', 'Nuevos Empleos Registrados', 'Nuevos Aliados', 'Nuevos Consultores', 'Valoración Promedio', 'Visitas diarias', 'Nuevos Cursos'];
    @endphp
    @foreach(range(1, 10) as $index)
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                var ctx = document.getElementById('myChart{{ $index }}').getContext('2d');
                var gradient = ctx.createLinearGradient(0, 0, 0, 400);
                gradient.addColorStop(0, '{{ $colors[$index - 1] }}');
                gradient.addColorStop(1, 'rgba(255, 255, 255, 0)');
                var chart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: ['January', 'February', 'March', 'April', 'May', 'June'],
                        datasets: [{
                            label: '{{ $titles[$index - 1] }}',
                            data: [
                                {{ random_int(1, 20) }},
                                {{ random_int(1, 20) }},
                                {{ random_int(1, 20) }},
                                {{ random_int(1, 20) }},
                                {{ random_int(1, 20) }},
                                {{ random_int(1, 20) }}
                            ],
                            backgroundColor: gradient,
                            borderColor: '{{ $colors[$index - 1] }}',
                            pointBackgroundColor: '{{ $colors[$index - 1] }}',
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
                                beginAtZero: true
                            }
                        }
                    }
                });
            });
        </script>
    @endforeach
@stop
