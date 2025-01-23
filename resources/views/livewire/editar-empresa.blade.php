<form action="" method="post" class="md:w-1/2 space-y-5" wire:submit.prevent='updateEmpresa' novalidate>
    <div>
        <x-input-label for="titulo" :value="__('Nombre empresa')" />
        <x-text-input 
            id="titulo" 
            class="block mt-1 w-full border-gray-300 dark:border-gray-700 " 
            type="text" 
            wire:model="titulo" 
            :value="old('titulo')" 
            required
            placeholder="Nombre empresa" />

        @error('titulo')
            <span class="text-red-500">{{ $message }}</span>
        @enderror
    </div>


    <div>
        <x-input-label for="ubicacion" :value="__('Ubicacion')" />
        <select wire:model="direccion" id="ubicacion"
            class=" border-gray-300 dark:border-gray-700  rounded-md shadow-sm w-full">


            <option value="">-Seleccione ubicacion--</option>
            @foreach ($provincias as $ubicacion)
                <option value="{{ $ubicacion->id }}">{{ $ubicacion->provincia }}</option>
            @endforeach
        </select>
        @error('direccion')
            <span class="text-red-500">{{ $message }}</span>
        @enderror
    </div>

  

    <div>
        <x-input-label for="telefono" :value="__('Telefono')" />
        <x-text-input id="telefono" class="border-gray-300 dark:border-gray-700  rounded-md shadow-sm block mt-1 w-full" 
        type="text" wire:model="telefono" :value="old('telefono')"
            required placeholder="666666666" type="number"/>
        @error('telefono')
            <span class="text-red-500">{{ $message }}</span>
        @enderror
    </div>


    <div>
        <x-input-label for="email" :value="__('email')" />
        <x-text-input id="email" class="border-gray-300 dark:border-gray-700  rounded-md shadow-sm block mt-1 w-full" 
        wire:model="email" 
        :value="old('email')"
            required placeholder="test@test.com" type="text"/>
        @error('email')
            <span class="text-red-500">{{ $message }}</span>
        @enderror
    </div>


    <div>
        <x-input-label for="logo" :value="__('Imagen')" />
        <x-text-input id="logo" class="block mt-1 w-full" type="file" wire:model="logo_nuevo"
            accept="image/*" />


        <div class="my-5 w-80">
            <x-input-label :value="__('Imagen actual')" />

            {{-- <img src="{{ asset('storage/vehiculos/' . $imagen) }}" alt="{{'Imagen ' . $titulo}}" class="w-80"> --}}
            <img src="{{ asset('storage/logos') . '/' . $logo }}" alt="Imagen logo"
                class="w-80">

        </div>



        {{-- vista de la imagen temporal --}}
        <div class="my-5">
            @if ($logo_nuevo)
                Imagen:
                <img src="{{ $logo_nuevo->temporaryUrl() }}">
            @endif
        </div>


        @error('logo_nuevo')
            <span class="text-red-500">{{ $message }}</span>
        @enderror
    </div>

    <x-primary-button class="w-full justify-center ">
        {{ __('Editar empresa') }}
    </x-primary-button>
</form>
