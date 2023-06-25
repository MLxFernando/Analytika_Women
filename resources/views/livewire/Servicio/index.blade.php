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
            @include('livewire.Servicio.crear')   
        @endif    

        <table class="table-fixed w-full">
        <thead>
            <tr class="bg-indigo-600 text-white">
                <th class="px-4 py-2">ID</th>
                <th class="px-4 py-2">NOMBRE</th>
                <th class="px-4 py-2">DESCRIPCION</th>
                <th class="px-4 py-2">ALIADO</th>
                <th class="px-4 py-2">CONSULTOR</th>
                <th class="px-4 py-2">VALORACION</th>
                <th class="px-4 py-2">ACCIONES</th>
            </tr>
        </thead>
        <tbody>
        @foreach($servicios as $servicio)
            <tr>
                <td class="border px-4 py-2">{{$servicio->SVC_ID}}</td>
                <td class="border px-4 py-2">{{$servicio->SVC_NOMBRE}}</td>
                <td class="border px-4 py-2">{{$servicio->SVC_DESCRIPCION}}</td>
                <td class="border px-4 py-2">{{ isset($aliados[$servicio->ALI_ID]) ? $aliados[$servicio->ALI_ID] : 'Nombre no encontrado' }}</td>
                <td class="border px-4 py-2">{{ isset($consultores[$servicio->CON_ID]) ? $consultores[$servicio->CON_ID] : 'Nombre no encontrado' }}</td>
                <td class="border px-4 py-2">{{$servicio->SVC_VALORACION}}</td>
                <td class="border px-4 py-2 text-center">
                    <button wire:click="editar({{$servicio->SVC_ID}})" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4">Editar</button>
                    <button wire:click="borrar({{$servicio->SVC_ID}})" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4">Borrar</button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
        </div>
    </div>
</div>
