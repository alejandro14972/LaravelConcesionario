<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 space-y-6">

    @foreach ($vehiculos as $vehiculo)
        <div class="p-6 bg-gray-100 rounded-lg shadow-md md:flex md:justify-between md:items-center">
            
            <div>
                <p class="text-gray-700"><strong>Marca:</strong> {{ $vehiculo->nombreMarca->marca }}  {{ $vehiculo->nombreModelo->nombre_modelo }}</p>
                <p class="text-gray-700"><strong>Combustible:</strong> {{ $vehiculo->combustible }}</p>
                <p class="text-gray-700"><strong>Precio:</strong> {{ $vehiculo->precio }} €</p>
                <p class="text-gray-700"><strong>Fabricación:</strong> {{ $vehiculo->fabricacion }}</p>
                <p class="text-gray-700"><strong>Ubicación:</strong> {{ $vehiculo->nombreUbicacion->provincia }}</p>
                <p class="text-gray-700"><strong>Kilometros:</strong> {{ $vehiculo->kilometros}} km</p>
            </div>
            
        
            <div class="flex gap-3 mt-5 justify-center md:flex md:justify-center md:items-center">
                <a href="#" class="bg-slate-800 py-2 px-4 text-white rounded hover:bg-slate-900 uppercase">
                    Ver
                </a>

                <a href="{{route('vehiculos.edit', $vehiculo->id)}}" class="bg-blue-800 py-2 px-4 text-white rounded hover:bg-slate-900 uppercase">
                    Editar
                </a>

                <a href="#" class="bg-red-800 py-2 px-4 text-white rounded hover:bg-slate-900 uppercase">
                    Eliminar
                </a>
            </div>
        
        </div>



    @endforeach

</div>
