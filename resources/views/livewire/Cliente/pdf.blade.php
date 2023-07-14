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
                        <th>APELLIDO</th>
                        <th>CORREO</th>
                        <th>TELEFONO</th>
                        <th>DIRECCION</th>
                        <th>FECHA REGISTRO</th>
                        <th>ROL</th>

                    </tr>
                </thead>
                <tbody>
                    
                    @foreach($clientes as $cliente)
                            <tr>
                           <td class="border px-4 py-2">{{$cliente->CLI_ID}}</td>
                           <td class="border px-4 py-2">{{$cliente->CLI_NOMBRE}}</td>
                           <td class="border px-4 py-2">{{$cliente->CLI_APELLIDO}}</td>
                           <td class="border px-4 py-2">{{$cliente->CLI_CORREO}}</td>
                           <td class="border px-4 py-2">{{$cliente->CLI_TELEFONO}}</td>
                           <td class="border px-4 py-2">{{$cliente->CLI_DIRECCION}}</td>
                          <td class="border px-4 py-2">{{$cliente->CLI_FECHA_REGISTRO}}</td>
                          <td class="border px-4 py-2">{{ isset($roles[$cliente->ROL_ID]) ? $roles[$cliente->ROL_ID] : 'Nombre no encontrado' }}</td>
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