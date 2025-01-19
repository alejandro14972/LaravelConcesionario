<div class="bg-gray-100 py-10">
    <h2 class="text-2xl md:text-4xl text-gray-600 text-center font-extrabold my-5">Buscar y filtrar vehículos</h2>

    <div class="max-w-7xl mx-auto">
        <form
            wire:submit.prevent="leerDatos"
        >
            <div class="md:grid md:grid-cols-3 gap-5">
                <div class="mb-5">
                    <label 
                        class="block mb-1 text-sm text-gray-700 uppercase font-bold "
                        for="termino">Término de Búsqueda
                    </label>
                    <input 
                        id="termino"
                        wire:model ="termino"
                        type="text"
                        placeholder="Buscar por Término: ej. Laravel"
                        class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full"
                    />
                </div>

                <div class="mb-5">
                    <label class="block mb-1 text-sm text-gray-700 uppercase font-bold">Ubicación</label>
                    <select wire:model="ubicacion" class="border-gray-300 p-2 w-full">
                        <option value="">-Seleccione--</option>
                        @foreach ($ubicaciones as $ubicacion )
                            <option value="{{ $ubicacion->id }}">{{ $ubicacion->provincia }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-5">
                    <label class="block mb-1 text-sm text-gray-700 uppercase font-bold">Marca</label>
                    <select wire:model="marca" class="border-gray-300 p-2 w-full">
                        <option value="">-Seleccione--</option>
                        @foreach ($marcas as $marca)
                            <option value="{{ $marca->id }}">{{$marca->marca}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-5">
                    <label class="block mb-1 text-sm text-gray-700 uppercase font-bold"> Color</label>
                    <select wire:model="color" class="border-gray-300 p-2 w-full">
                        <option value="">-Seleccione--</option>
                        @foreach ($colores as $color)
                            <option value="{{ $color->id }}">{{$color->color}}</option>
                        @endforeach
                    </select>
                </div>


                <div class="mb-5">
                    <label class="block mb-1 text-sm text-gray-700 uppercase font-bold"> Combustible</label>
                    <select wire:model="combustible" id="combustible"
                    class=" border-gray-300 dark:border-gray-700  rounded-md shadow-sm w-full">
                    <option value="">-Seleccione--</option>
                    <option value="Gasolina">Gasolina</option>
                    <option value="Diesel">Diesel</option>
                    <option value="Electrico">Eléctrico</option>
                    <option value="Hibrido">Híbrido</option>
                </select>
                </div>
            </div>

            <div class="flex justify-end">
                <input 
                    type="submit"
                    class="bg-indigo-500 hover:bg-indigo-600 transition-colors text-white text-sm font-bold px-10 py-2 rounded cursor-pointer uppercase w-full md:w-auto"
                    value="Buscar"
                />
            </div>
        </form>
    </div>
</div>