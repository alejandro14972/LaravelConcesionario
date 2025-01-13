<div>
    <a href="{{ route('empresa.create') }}"
        class="inline-block bg-blue-500 hover:bg-blue-700 mb-5 text-white font-bold py-2 px-4 rounded">
        {{ __('Crear empresa') }}
    </a>

    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 space-y-6">

         @foreach ($empresa as $empr)
        <div class="p-6 bg-gray-100 rounded-lg shadow-md md:flex md:justify-between md:items-center">
            
            <div>
                <p class="text-gray-700"><strong>Nombre:</strong> {{ $empr->nombre}}</p>
                <p class="text-gray-700"><strong>Dirección:</strong> {{ $empr->direccion}}</p>
                <p class="text-gray-700"><strong>Telefono:</strong> {{ $empr->telefono}}</p>
                <p class="text-gray-700"><strong>Email:</strong> {{ $empr->email}}</p>
                
            </div>
            
        
            <div class="flex gap-3 mt-5 justify-center md:flex md:justify-center md:items-center">
                <a href="#" class="bg-slate-800 py-2 px-4 text-white rounded hover:bg-slate-900 uppercase">
                    Ver
                </a>

                <a href="{{route('empresa.edit', $empr->id)}}" class="bg-blue-800 py-2 px-4 text-white rounded hover:bg-slate-900 uppercase">
                    Editar
                </a>

                <a href="#" class="bg-red-800 py-2 px-4 text-white rounded hover:bg-slate-900 uppercase">
                    Eliminar
                </a>
            </div>
        
        </div>



    @endforeach

    </div>

</div>
