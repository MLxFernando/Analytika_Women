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
                            <label for="ROL_ID" class="block text-gray-700 text-sm font-bold mb-2">ROL:</label>
                            <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="ROL_ID" wire:model="ROL_ID">
                                <option value="">Seleccionar Rol</option>
                                @foreach ($roles as $ROL_ID => $ROL_NOMBRE)
                                    <option value="{{ $ROL_ID }}">{{ $ROL_NOMBRE }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-4">
                            <label for="POS_NOMBRE" class="block text-gray-700 text-sm font-bold mb-2">NOMBRE:</label>
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="POS_NOMBRE" wire:model="POS_NOMBRE">
                        </div>

                        <div class="mb-4">
                            <label for="POS_APELLIDO" class="block text-gray-700 text-sm font-bold mb-2">APELLIDO:</label>
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="POS_APELLIDO" wire:model="POS_APELLIDO">
                        </div>

                        <div class="mb-4">
                            <label for="POS_CORREO" class="block text-gray-700 text-sm font-bold mb-2">CORREO:</label>
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="POS_CORREO" wire:model="POS_CORREO">
                        </div>

                        <div class="mb-4">
                            <label for="POS_CONTRASENA" class="block text-gray-700 text-sm font-bold mb-2">CONTRASEÑA:</label>
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="POS_CONTRASENA" wire:model="POS_CONTRASENA">
                        </div>

                        <div class="mb-4">
                            <label for="POS_DIRECCION" class="block text-gray-700 text-sm font-bold mb-2">DIRECCION:</label>
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="POS_DIRECCION" wire:model="POS_DIRECCION">
                        </div>

                        <div class="mb-4">
                            <label for="POS_FECHA_NACIMIENTO" class="block text-gray-700 text-sm font-bold mb-2">FECHA NACIMIENTO:</label>
                            <input type="date" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="POS_FECHA_NACIMIENTO" wire:model="POS_FECHA_NACIMIENTO">
                        </div>

                        <div class="mb-4">
                            <label for="POS_EXPERIENCIA" class="block text-gray-700 text-sm font-bold mb-2">EXPERIENCIA:</label>
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="POS_EXPERIENCIA" wire:model="POS_EXPERIENCIA">
                        </div>

                        <div class="mb-4">
                            <label for="POS_EMPLEO" class="block text-gray-700 text-sm font-bold mb-2">EMPLEO:</label>
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="POS_EMPLEO" wire:model="POS_EMPLEO">
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