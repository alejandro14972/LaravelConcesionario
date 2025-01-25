<div class="grid grid-cols-1 md:grid-cols-3 gap-6 p-6">
    <!-- Imagen del Vehículo -->
    <div class="col-span-1">
        <img 
            src="{{ asset('storage/vehiculos/' . $vehiculo->imagen) }}" 
            alt="Imagen del Vehículo" 
            class="w-full h-auto object-cover rounded-lg shadow"
        >
    </div>

    <!-- Contenido del Vehículo -->
    <div class="col-span-1 md:col-span-2 space-y-4">
        <p class="text-gray-700 break-words"><strong>Marca:</strong> {{ $vehiculo->nombreMarca->marca }}</p>
        <p class="text-gray-700 break-words"><strong>Modelo:</strong> {{ $vehiculo->nombreModelo->nombre_modelo }}</p>
        <p class="text-gray-700 break-words"><strong>Combustible:</strong> {{ $vehiculo->combustible }}</p>
        <p class="text-gray-700 break-words"><strong>Precio:</strong> {{ $vehiculo->precio }} €</p>
        <p class="text-gray-700 break-words"><strong>Fabricación:</strong> {{ $vehiculo->fabricacion }}</p>
        <p class="text-gray-700 break-words"><strong>Ubicación:</strong> {{ $vehiculo->nombreUbicacion->provincia }}</p>
        <p class="text-gray-700 break-words"><strong>Kilómetros:</strong> {{ $vehiculo->kilometros }} km</p>
        <p class="text-gray-700 break-words"><strong>Color:</strong> {{ $vehiculo->nombreColor->color }}</p>
        <p class="text-gray-700 break-words"><strong>Garantía:</strong>
            {{ $vehiculo->garantia ? 'Garantía de 12 meses' : 'Sin garantía' }}
        </p>
        <p class="text-gray-700 break-words"><strong>IVA:</strong> {{ $vehiculo->iva ? 'IVA incluido' : 'Sin IVA' }}</p>
        <p class="text-gray-700 break-words"><strong>Cambio de marchas:</strong> {{ $vehiculo->cambio ? 'Automático' : 'Manual' }}
        </p>
        <p class="text-gray-700 break-words"><strong>Número de puertas:</strong> {{ $vehiculo->num_puertas }}</p>
        <p class="text-gray-700 break-words"><strong>CC:</strong> {{ $vehiculo->cc }}</p>

        <!-- Etiqueta -->
        @if ($vehiculo->etiqueta_id != 5)
            <div class="flex items-center space-x-2">
                <strong>Etiqueta:</strong>
                <img 
                    src="{{ asset('storage/etiquetas/' . $vehiculo->nombreEtiqueta->imagen) }}" 
                    alt="{{ $vehiculo->nombreEtiqueta->nombre }}" 
                    class="w-8 h-8 rounded-md shadow"
                >
            </div>
        @else
            <div class="flex items-center space-x-2">
                <strong>Etiqueta:</strong>
                <p>Sin etiqueta</p>
            </div>
        @endif

        <p class="text-gray-700 text-justify break-words"><strong>Descripción:</strong> {{ $vehiculo->description }} </p>
        <p class="text-gray-700 break-words"><strong>Vendedor:</strong> {{ $vehiculo->nombreUser->name }} </p>
        <p class="break-words"><strong>Empresa:</strong> {{ $vehiculo->nombreUser->empresa->nombre ?? 'Particular' }}</p>
        <p class="break-words"><strong>Email:</strong> {{ $vehiculo->nombreUser->empresa->email ?? 'Sin email' }}</p>
    </div>
</div>
