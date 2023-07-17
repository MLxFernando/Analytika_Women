<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">

        @if(session()->has('message'))
            <div class="bg-teal-100 rounded-b text-teal-900 px-4 py-4 shadow-md my-3" role="alert">
                <div class="flex">
                    <div>
                        <h4>{{ session('message')}}</h4>
                    </div>
                </div>
            </div>
        @endif


        <button wire:click="crear()" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 my-3" >Nuevo</button>
       
        @if($modal)
            @include('livewire.Cliente.crear')   
        @endif    

        <table class="table-fixed w-full">
        <thead>
            <tr class="bg-indigo-600 text-white">
                <th class="px-4 py-2">ID</th>
                <th class="px-4 py-2">NOMBRE</th>
                <th class="px-4 py-2">APELLIDO</th>
                <th class="px-4 py-2">CORREO</th>
                <th class="px-4 py-2">TELEFONO</th>
                <th class="px-4 py-2">DIRECCION</th>
                <th class="px-4 py-2">FECHA REGISTRO</th>
                <th class="px-4 py-2">ROL</th>
                <th class="px-4 py-2">ACCIONES</th>
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
                <td class="border px-4 py-2 text-center">
                    <button wire:click="editar({{$cliente->CLI_ID}})" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4">Editar</button>
                    <button wire:click="borrar({{$cliente->CLI_ID}})" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4">Borrar</button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <button onclick="window.location.href='/redirects'" class="bg-purple-500 hover:bg-purple-600 text-white font-bold py-2 px-4">Volver</button>
        </div>
    </div>
</div>
