<!DOCTYPE html>
$html = '
<html>
<head>
<style>
.table-fixed {
    width: 100%;
}

.table-fixed th,
.table-fixed td {
    border: 1px solid black;
    padding: 4px;
    color: black; /* Agrega el color negro para las letras */
    /* Agrega otros estilos personalizados según tus necesidades */
}

.bg-indigo-600 {
    background-color: #4F46E5;
    color: white;
}
</style>
</head>
<body>
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <table class="table-fixed">
                <thead>
                    <tr class="bg-indigo-600">
                        <th>ID</th>
                        <th>NOMBRE</th>
                    </tr>
                </thead>
                <tbody>
                    
                    @foreach($roles as $rol)
                            <tr>
                                <td class="border px-4 py-2">{{$rol->ROL_ID}}</td>
                                <td class="border px-4 py-2">{{$rol->ROL_NOMBRE}}</td>
                                
                            </tr>
                    @endforeach
                        
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>
';