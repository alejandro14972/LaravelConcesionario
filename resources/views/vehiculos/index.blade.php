<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Mis vehiculos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            @if (@session()->has('mensaje'))
                
            <div class="bg-green-500 p-2 text-white rounded mb-4">
                {{ session('mensaje') }}
            </div>
            @endif

            {{-- mensaje policy --}}
            @if (@session()->has('mensajeError'))
                
            <div class="bg-red-500 p-2 text-white rounded mb-4">
                {{ session('mensajeError') }}
            </div>
            @endif

            <livewire:mostrar-vehiculos />
            
        </div>
    </div>
</x-app-layout>
