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
            @include('livewire.Evento.crear')   
        @endif    

        <table class="table-fixed w-full">
        <thead>
            <tr class="bg-indigo-600 text-white">
                <th class="px-4 py-2">ID</th>
                <th class="px-4 py-2">TITULO</th>
                <th class="px-4 py-2">DESCRIPCION</th>
                <th class="px-4 py-2">UBICACION</th>
                <th class="px-4 py-2">FECHA EVENTO</th>
                <th class="px-4 py-2">HORA EVENTO</th>
                <th class="px-4 py-2">ALIADO A CARGO</th>
                <th class="px-4 py-2">ACCIONES</th>
            </tr>
        </thead>
        <tbody>
        @foreach($eventos as $evento)
            <tr>
                <td class="border px-4 py-2">{{$evento->EVE_ID}}</td>
                <td class="border px-4 py-2">{{$evento->EVE_TITULO}}</td>
                <td class="border px-4 py-2">{{$evento->EVE_DESCRIPCION}}</td>
                <td class="border px-4 py-2">{{$evento->EVE_UBICACION}}</td>
                <td class="border px-4 py-2">{{$evento->EVE_FECHA_EVENTO}}</td>
                <td class="border px-4 py-2">{{$evento->EVE_HORA_EVENTO}}</td>
                <td class="border px-4 py-2">{{ isset($aliados[$evento->ALI_ID]) ? $aliados[$evento->ALI_ID] : 'Nombre no encontrado' }}</td>
                <td class="border px-4 py-2 text-center">
                    <button wire:click="editar({{$evento->EVE_ID}})" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4">Editar</button>
                    <button wire:click="borrar({{$evento->EVE_ID}})" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4">Borrar</button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
        </div>
    </div>
</div>
