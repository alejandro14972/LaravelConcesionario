<form action="" method="post" class="md:w-1/2 space-y-5" wire:submit.prevent='updateVehiculo' novalidate>
    <div>
        <x-input-label for="titulo" :value="__('Título vehiculo')" />
        <x-text-input id="titulo" class="block mt-1 w-full" type="text" wire:model="titulo" :value="old('titulo')" required
            placeholder="Titulo vehiculo" />

        @error('titulo')
            <span class="text-red-500">{{ $message }}</span>
        @enderror
    </div>


    <div>
        <x-input-label for="carroceria" :value="__('Tipo de carroceria')" />
        <select wire:model="carroceria" id="carroceria"
            class=" border-gray-300 dark:border-gray-700  rounded-md shadow-sm w-full">
            <option value="">-Seleccione--</option>
            @foreach ($carrocerias as $carroceria)
                <option value="{{ $carroceria->id }}">{{ $carroceria->tipo }}</option>
            @endforeach
        </select>


        @error('carroceria')
            <span class="text-red-500">{{ $message }}</span>
        @enderror
    </div>



    <div>
        <x-input-label for="combustible" :value="__('Tipo de combustible')" />
        <select wire:model="combustible" id="combustible"
            class=" border-gray-300 dark:border-gray-700  rounded-md shadow-sm w-full">
            <option value="0">-Seleccione--</option>
            <option value="Gasolina">Gasolina</option>
            <option value="Diesel">Diesel</option>
            <option value="Eléctrico">Eléctrico</option>
            <option value="Híbrido">Híbrido</option>
        </select>


        @error('combustible')
            <span class="text-red-500">{{ $message }}</span>
        @enderror
    </div>



    <div>
        <x-input-label for="marca" :value="__('Marca')" />
        <select wire:model="marca" id="marca"
            class=" border-gray-300 dark:border-gray-700  rounded-md shadow-sm w-full">


            <option value="">-Seleccione--</option>
            @foreach ($marcas as $marca)
                <option value="{{ $marca->id }}">{{ $marca->marca }}</option>
            @endforeach
        </select>
        @error('marca')
            <span class="text-red-500">{{ $message }}</span>
        @enderror
    </div>


    <div class="mt-4">
        <x-input-label for="modelo" :value="__('Modelo')" />
        <select wire:model="modelo" id="modelo"
            class="border-gray-300 dark:border-gray-700 rounded-md shadow-sm w-full">
            <option value="">-Seleccione--</option>
            @foreach ($modelos as $modelo)
                <option value="{{ $modelo->id }}">{{ $modelo->nombre_modelo }}</option>
            @endforeach
        </select>
        @error('modelo')
            <span class="text-red-500">{{ $message }}</span>
        @enderror
    </div>


    <div>
        <x-input-label for="ubicacion" :value="__('Ubicacion')" />
        <select wire:model="ubicacion" id="ubicacion"
            class=" border-gray-300 dark:border-gray-700  rounded-md shadow-sm w-full">


            <option value="">-Seleccione ubicacion--</option>
            @foreach ($provincias as $ubicacion)
                <option value="{{ $ubicacion->id }}">{{ $ubicacion->provincia }}</option>
            @endforeach
        </select>
        @error('ubicacion')
            <span class="text-red-500">{{ $message }}</span>
        @enderror
    </div>

    <div>
        <x-input-label for="color" :value="__('Color')" />
        <select wire:model="color" id="color"
            class=" border-gray-300 dark:border-gray-700  rounded-md shadow-sm w-full">


            <option value="">-Seleccione color--</option>
            @foreach ($colores as $color)
                <option value="{{ $color->id }}">{{ $color->color }}</option>
            @endforeach
        </select>
        @error('color')
            <span class="text-red-500">{{ $message }}</span>
        @enderror
    </div>

    <div>
        <x-input-label for="kilometros" :value="__('Kilometros')" />
        <x-text-input id="kilometros"
            class="border-gray-300 dark:border-gray-700  rounded-md shadow-sm block mt-1 w-full" wire:model="kilometros"
            :value="old('kilometros')" required placeholder="50, 100, 200..." type="number" />
        @error('kilometros')
            <span class="text-red-500">{{ $message }}</span>
        @enderror
    </div>


    <div>
        <x-input-label for="precio" :value="__('Precio')" />
        <x-text-input id="precio"
            class="border-gray-300 dark:border-gray-700  rounded-md shadow-sm block mt-1 w-full" wire:model="precio"
            :value="old('precio')" required placeholder="2000, 4000, 5500..." type="number" />
        @error('precio')
            <span class="text-red-500">{{ $message }}</span>
        @enderror
    </div>

    <div>
        <x-input-label for="cv" :value="__('CV')" />
        <x-text-input id="cv"
            class="border-gray-300 dark:border-gray-700  rounded-md shadow-sm block mt-1 w-full" wire:model="cv"
            :value="old('cv')" required placeholder="100, 120, 200 ..." type="number" />
        @error('cv')
            <span class="text-red-500">{{ $message }}</span>
        @enderror
    </div>

    <div>
        <x-input-label for="año" :value="__('Año de fabricación')" />
        <x-text-input id="año"
            class="border-gray-300 dark:border-gray-700  rounded-md shadow-sm block mt-1 w-full" type="date"
            wire:model="fabricacion" :value="old('año')" required />
        @error('fabricacion')
            <span class="text-red-500">{{ $message }}</span>
        @enderror
    </div>

    <div>
        <x-input-label for="descripcion" :value="__('Descripción')" />
        <textarea id="descripcion" wire:model="description"
            class=" border-gray-300 dark:border-gray-700  rounded-md shadow-sm w-full" rows="7" required>
        </textarea>
        @error('description')
            <span class="text-red-500">{{ $message }}</span>
        @enderror
    </div>


    <div>
        <x-input-label for="garantia" :value="__('Garantía 12 meses')" />
        <div class="flex items-center">
            <input id="garantia" type="checkbox" wire:model="garantia"
                class="mr-2 border-gray-300 dark:border-gray-700 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" />
            <label for="garantia" class="text-gray-700 dark:text-gray-300">Activar garantía</label>
        </div>
        @error('garantia')
            <span class="text-red-500">{{ $message }}</span>
        @enderror
    </div>


    <div>
        <x-input-label for="imagen" :value="__('Imagen')" />
        <x-text-input id="imagen" class="block mt-1 w-full" type="file" wire:model="imagen_nueva"
            accept="image/*" />


        <div class="my-5 w-80">
            <x-input-label :value="__('Imagen actual')" />

            {{-- <img src="{{ asset('storage/vehiculos/' . $imagen) }}" alt="{{'Imagen ' . $titulo}}" class="w-80"> --}}
            <img src="{{ asset('storage/vehiculos') . '/' . $imagen }}" alt="Imagen vehiculo {{ $imagen }}"
                class="w-80">

        </div>



        {{-- vista de la imagen temporal --}}
        <div class="my-5">
            @if ($imagen_nueva)
                Imagen:
                <img src="{{ $imagen_nueva->temporaryUrl() }}">
            @endif
        </div>


        @error('imagen_nueva')
            <span class="text-red-500">{{ $message }}</span>
        @enderror
    </div>

    <x-primary-button class="w-full justify-center">
        {{ __('Editar vehiculo') }}
    </x-primary-button>
</form>



