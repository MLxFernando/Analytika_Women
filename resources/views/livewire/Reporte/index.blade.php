@extends('adminlte::page')

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
@section('content')
    <!-- Aquí va el contenido específico de tu vista -->
    <div class="container">
        <h1>Reportes</h1>
        <br>

        <div class="row">
            <div class="col-md-6">
                <div class="info-box">
                    <span class="info-box-icon bg-blue"><i class="fas fa-file-alt"></i></span>
                    <div class="info-box-content">
                        <p class="info-box-text">Reporte listado de roles</p>
                        <a href="/Rolpdf" class="btn btn-primary btn-block">PDF</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="info-box">
                    <span class="info-box-icon bg-blue"><i class="fas fa-users"></i></span>
                    <div class="info-box-content">
                        <p class="info-box-text">Reporte Listado Usuarios</p>
                        <a href="/Gerentepdf" class="btn btn-primary btn-block">PDF</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="info-box">
                    <span class="info-box-icon bg-blue"><i class="fas fa-user"></i></span>
                    <div class="info-box-content">
                        <p class="info-box-text">Reporte información clientes</p>
                        <a href="/Clientepdf" class="btn btn-primary btn-block">PDF</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="info-box">
                    <span class="info-box-icon bg-blue"><i class="fas fa-building"></i></span>
                    <div class="info-box-content">
                        <p class="info-box-text">Reporte listado aliados</p>
                        <a href="/AdminAliadopdf" class="btn btn-primary btn-block">PDF</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="info-box">
                    <span class="info-box-icon bg-blue"><i class="fas fa-briefcase"></i></span>
                    <div class="info-box-content">
                        <p class="info-box-text">Reporte Bolsa de empleo</p>
                        <a href="/BolsaEmpleopdf" class="btn btn-primary btn-block">PDF</a>
                    </div>
                </div>
            </div>

<div class="position-fixed" style="bottom: 20px; right: 20px;">
            <button onclick="window.location.href='/redirects'" class="btn btn-primary">Volver</button>
        </div>
    

            <!-- Agrega más reportes aquí -->

        </div>
    </div>
@endsection

