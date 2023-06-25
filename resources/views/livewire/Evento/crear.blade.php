<div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400">
    <div class="flex justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
    
        <div class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>

        <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>

            <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">    
                <form>
                    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">

                        <div class="mb-4">
                            <label for="ALI_ID" class="block text-gray-700 text-sm font-bold mb-2">ALIADO A CARGO:</label>
                            <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="ALI_ID" wire:model="ALI_ID">
                                <option value="">Seleccionar Aliado</option>
                                @foreach ($aliados as $ALI_ID => $ALI_NOMBRE)
                                    <option value="{{ $ALI_ID }}">{{ $ALI_NOMBRE }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-4">
                            <label for="EVE_TITULO" class="block text-gray-700 text-sm font-bold mb-2">TITULO:</label>
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="EVE_TITULO" wire:model="EVE_TITULO">
                        </div>

                        <div class="mb-4">
                            <label for="EVE_DESCRIPCION" class="block text-gray-700 text-sm font-bold mb-2">DESCRIPCION:</label>
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="EVE_DESCRIPCION" wire:model="EVE_DESCRIPCION">
                        </div>

                        <div class="mb-4">
                            <label for="EVE_UBICACION" class="block text-gray-700 text-sm font-bold mb-2">UBICACION:</label>
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="EVE_UBICACION" wire:model="EVE_UBICACION">
                        </div>

                        <div class="mb-4">
                            <label for="EVE_FECHA_EVENTO" class="block text-gray-700 text-sm font-bold mb-2">FECHA EVENTO:</label>
                            <input type="date" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="EVE_FECHA_EVENTO" wire:model="EVE_FECHA_EVENTO">
                        </div>

                        <div class="mb-4">
                            <label for="EVE_HORA_EVENTO" class="block text-gray-700 text-sm font-bold mb-2">HORA EVENTO:</label>
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="EVE_HORA_EVENTO" wire:model="EVE_HORA_EVENTO">
                        </div>

                        <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                            <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                                <button wire:click.prevent="guardar()" type="button" class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-purple-600 text-base leading-6 font-medium text-white shadow-sm hover:bg-purple-800 focus:outline-none focus:border-green-700 focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5">Guardar</button>
                            </span>

                            <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                                <button wire:click="cerrarModal()" type="button" class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-gray-200 text-base leading-6 font-medium text-gray-700 shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5">Cancelar</button>
                            </span>
                        </div>

                    </div>
                </form>    
            </div>


    </div>
</div>