<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Datos del vehiculo') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">


                    @if (@session()->has('mensajeContacta'))
                        <div class="bg-green-500 p-2 text-white rounded mb-4">
                            {{ session('mensajeContacta') }}
                        </div>
                    @endif

                    <div class="md:flex md:justify-center p-5">
                        <livewire:ver-vehiculo :vehiculo="$vehiculo" />
                    </div>
                    <hr>
                    <div class="md:grid grid-cols-3 p-3">
                        <livewire:contacta :vehiculo="$vehiculo" />
                        <livewire:mostrar-mensajes :vehiculoIdentificador="$vehiculo->id" />
                    </div>
                    

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
