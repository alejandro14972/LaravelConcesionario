<div class="flex flex-col md:flex-row items-start p-6 space-y-4 md:space-y-0 md:space-x-6">
    <!-- Imagen del Vehículo -->
    <div class="w-full md:w-1/3">
        <img src="{{ asset('storage/vehiculos/' . $vehiculo->imagen) }}" alt="Imagen del Vehículo"
            class="w-full h-auto object-cover rounded-lg shadow">
    </div>

    <!-- Contenido del Vehículo -->
    <div class="w-full md:w-2/3 space-y-4">
        <p class="text-gray-700"><strong>Marca:</strong> {{ $vehiculo->nombreMarca->marca }}</p>
        <p class="text-gray-700"><strong>Modelo:</strong> {{ $vehiculo->nombreModelo->nombre_modelo }}</p>
        <p class="text-gray-700"><strong>Combustible:</strong> {{ $vehiculo->combustible }}</p>
        <p class="text-gray-700"><strong>Precio:</strong> {{ $vehiculo->precio }} €</p>
        <p class="text-gray-700"><strong>Fabricación:</strong> {{ $vehiculo->fabricacion }}</p>
        <p class="text-gray-700"><strong>Ubicación:</strong> {{ $vehiculo->nombreUbicacion->provincia }}</p>
        <p class="text-gray-700"><strong>Kilómetros:</strong> {{ $vehiculo->kilometros }} km</p>
        <p class="text-gray-700"><strong>Color:</strong> {{ $vehiculo->nombreColor->color }}</p>
        <p class="text-gray-700"><strong>Garantía:</strong>
            {{ $vehiculo->garantia ? 'Garantía de 12 meses' : 'Sin garantía' }}</p>
        <p class="text-gray-700"><strong>IVA:</strong> {{ $vehiculo->iva ? 'IVA incluido' : 'Sin IVA' }}</p>
        <p class="text-gray-700"><strong>Cambio de marchas:</strong> {{ $vehiculo->cambio ? 'Automático' : 'Manual' }}
        </p>
        <p class="text-gray-700"><strong>Número de puertas:</strong> {{ $vehiculo->num_puertas }}</p>
        <p class="text-gray-700"><strong>CC:</strong> {{ $vehiculo->cc }}</p>

        <!-- Etiqueta -->
        @if ($vehiculo->etiqueta_id != 5)
            <div class="flex items-center space-x-2">
                <strong>Etiqueta:</strong>
                <img src="{{ asset('storage/etiquetas/' . $vehiculo->nombreEtiqueta->imagen) }}"
                    alt="{{ $vehiculo->nombreEtiqueta->nombre }}" class="w-8 h-8 rounded-md shadow">
            </div>
        @endif
        <div class="flex items-center space-x-2">
            <strong>Etiqueta:</strong>
            <p>Sin etiqueta</p>
        </div>

        <p class="text-gray-700 text-justify"><strong>Descripción:</strong> {{ $vehiculo->description }} </p>
        <p class="text-gray-700"><strong>Vendedor:</strong> {{ $vehiculo->nombreUser->name }} </p>
        <p><strong>Empresa:</strong> {{ $vehiculo->nombreUser->empresa->nombre ?? 'Particular' }}</p>
        <p><strong>Email:</strong> {{ $vehiculo->nombreUser->empresa->email ?? 'Sin email' }}</p>
    </div>

{{--     @auth
    <a href="#"
        class="bg-green-800 py-2 px-4 text-white rounded hover:bg-slate-900 uppercase">
        Vender
    </a>
    @endauth --}}

</div>
