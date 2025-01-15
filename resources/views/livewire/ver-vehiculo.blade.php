<div class="flex flex-col md:flex-row items-start  p-6 space-y-4 md:space-y-0 md:space-x-6">
    <!-- Imagen del Vehículo -->
    <div class="w-full md:w-1/3">
        <img src="{{ asset('storage/vehiculos/' . $vehiculo->imagen) }}" 
             alt="Imagen del Vehículo" 
             class="w-full h-auto object-cover rounded-lg shadow">
    </div>

    <!-- Contenido del Vehículo -->
    <div class="w-full md:w-2/3 space-y-4">
        <h1 class="text-2xl font-bold text-gray-800">Detalles del Vehículo</h1>
        <p class="text-gray-700"><strong>Marca:</strong> {{ $vehiculo->nombreMarca->marca }}</p>
        <p class="text-gray-700"><strong>Modelo:</strong> {{ $vehiculo->nombreModelo->nombre_modelo }}</p>
        <p class="text-gray-700"><strong>Combustible:</strong> {{ $vehiculo->combustible }}</p>
        <p class="text-gray-700"><strong>Precio:</strong> {{ $vehiculo->precio }} €</p>
        <p class="text-gray-700"><strong>Fabricación:</strong> {{ $vehiculo->fabricacion }}</p>
        <p class="text-gray-700"><strong>Ubicación:</strong> {{ $vehiculo->nombreUbicacion->provincia }}</p>
        <p class="text-gray-700"><strong>Kilómetros:</strong> {{ $vehiculo->kilometros }} km</p>
        <p class="text-gray-700"><strong>Color:</strong> {{ $vehiculo->nombreColor->color }}</p>
        <p class="text-gray-700"><strong>Garantía:</strong> {{ $vehiculo->garantia ? 'Garantía de 12 meses' : 'Sin garantía' }}</p>
        <p class="text-gray-700"><strong>Descripción:</strong> {{ $vehiculo->description}} </p>
        <p class="text-gray-700"><strong>Vendedor:</strong> {{ $vehiculo->nombreUser->name}} </p>





    </div>
</div>
