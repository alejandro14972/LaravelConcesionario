<form action="" method="post" class="md:w-1/2 space-y-5" wire:submit.prevent='crearVacante' novalidate>
    <div>
        <x-input-label for="titulo" :value="__('Título vehiculo')" />
        <x-text-input id="titulo" class="block mt-1 w-full" type="text" wire:model="titulo" :value="old('titulo')" required
            placeholder="Titulo vehiculo" />

        @error('titulo')
            <livewire:mostrar-alerta :message="$message" />
        @enderror
    </div>


    <div>
        <x-input-label for="combustible" :value="__('Tipo de combustible')" />
        <select wire:model="combustible" id="combustible"
            class=" border-gray-300 dark:border-gray-700   rounded-md shadow-sm w-full">
            <option value="">-Seleccione--</option>
            @foreach ($carrocerias as $carroceria)
                <option value="{{ $carroceria->id }}">{{ $carroceria->tipo }}</option>
            @endforeach
        </select>


        @error('combustible')
            <livewire:mostrar-alerta :message="$message" />
        @enderror
    </div>


    <div>
        <x-input-label for="combustible" :value="__('Tipo de combustible')" />
        <select wire:model="combustible" id="combustible"
            class=" border-gray-300 dark:border-gray-700   rounded-md shadow-sm w-full">
            <option value="">-Seleccione--</option>
            <option value="">Gasolina</option>
            <option value="">Diesel</option>
            <option value="">Eléctrico</option>
          
        </select>


        @error('combustible')
            <livewire:mostrar-alerta :message="$message" />
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
            <livewire:mostrar-alerta :message="$message" />
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
        @error('marca')
            <livewire:mostrar-alerta :message="$message" />
        @enderror
    </div>

    <div>
        <x-input-label for="kilometros" :value="__('Kilometros')" />
        <x-text-input id="kilometros" class="block mt-1 w-full" type="text" wire:model="empresa" :value="old('kilometros')"
            required placeholder="50, 100, 200..." type="number"/>
        @error('kilometros')
            <livewire:mostrar-alerta :message="$message" />
        @enderror
    </div>

    <div>
        <x-input-label for="año" :value="__('año')" />
        <x-text-input id="año" class="block mt-1 w-full" type="date" wire:model="ultimo_dia" :value="old('año')"
            required />
        @error('año')
            <livewire:mostrar-alerta :message="$message" />
        @enderror
    </div>

    <div>
        <x-input-label for="descripcion" :value="__('Descripción')" />
        <textarea id="descripcion" wire:model="descripcion"
            class=" border-gray-300 dark:border-gray-700  dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm w-full"
            rows="7" placeholder="Descripción general...">
        </textarea>
        @error('descripcion')
            <livewire:mostrar-alerta :message="$message" />
        @enderror
    </div>


    <div>
        <x-input-label for="imagen" :value="__('Imagen')" />
        <x-text-input id="imagen" class="block mt-1 w-full" type="file" wire:model="imagen" accept="image/*" />

        {{--  <div class="my-5">
            @if ($imagen)
                Imagen:
                <img src="{{$imagen->temporaryUrl()}}">
            @endif
        </div> --}}


        @error('imagen')
            <livewire:mostrar-alerta :message="$message" />
        @enderror
    </div>

    <x-primary-button class="w-full justify-center ">
        {{ __('Crear vehiculo') }}
    </x-primary-button>
</form>
