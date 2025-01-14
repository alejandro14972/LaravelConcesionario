<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar datos de la empresa') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{-- Formulario aquí --}}

                    <h1
                    class="text-2xl font-semibold text-gray-900 text-center"
                    >Editar empresa
                    </h1>

                    <div class="md:flex md:justify-center p-5">
                        <livewire:editar-empresa
                 
                        :empresa="$empresa"
                        />
                    </div>
                  

                </div>
            </div>
        </div>
    </div>
</x-app-layout>