<div class="col-span-3">
    <h2 class="text-2xl font-bold text-gray-800 mb-5">Contactar</h2>
    <form wire:submit.prevent="contacta">
        <!-- Nombre -->
        <div class="mb-5">
            <label for="nombreUser" class="block text-sm font-bold text-gray-700 mb-2">Nombre *</label>
            <input type="text" id="nombreUser" wire:model="nombreUser" placeholder="Ingresa tu nombre"
                class="w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring focus:ring-indigo-200 focus:border-indigo-500" />
            @error('nombreUser')
                <span class="text-sm text-red-500">{{ $message }}</span>
            @enderror
        </div>

        <!-- Email -->
        <div class="mb-5">
            <label for="emailUser" class="block text-sm font-bold text-gray-700 mb-2">Correo Electrónico *</label>
            <input type="email" id="emailUser" wire:model="emailUser" placeholder="Ingresa tu email"
                class="w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring focus:ring-indigo-200 focus:border-indigo-500" />
            @error('emailUser')
                <span class="text-sm text-red-500">{{ $message }}</span>
            @enderror
        </div>

        <!-- Teléfono -->
        <div class="mb-5">
            <label for="telefonoUser" class="block text-sm font-bold text-gray-700 mb-2">Teléfono *</label>
            <input type="text" id="telefonoUser" wire:model="telefonoUser"
                placeholder="Ingresa tu número de teléfono"
                class="w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring focus:ring-indigo-200 focus:border-indigo-500" />
            @error('telefonoUser')
                <span class="text-sm text-red-500">{{ $message }}</span>
            @enderror
        </div>

        <!-- Mensaje -->
        <div class="mb-5">
            <label for="mensajeUser" class="block text-sm font-bold text-gray-700 mb-2">Mensaje</label>
            <textarea id="mensajeUser" wire:model="mensajeUser" rows="4"
                class="w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring focus:ring-indigo-200 focus:border-indigo-500 text-black"></textarea>
            @error('mensajeUser')
                <span class="text-sm text-red-500">{{ $message }}</span>
            @enderror
        </div>

        <!-- Botón Enviar -->
        <div class="mt-6">
            <button type="submit"
                class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-3 rounded-lg shadow-sm transition duration-300">
                Enviar
            </button>
        </div>
    </form>

</div>
