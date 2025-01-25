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

                        <div class="col-span-3 p-4">
                            <div class="max-w-4xl mx-auto py-8 space-y-6">
                                <h1 class="text-2xl font-bold text-gray-800 text-center">Mensajes Recibidos</h1>
                            
                                <!-- Tarjeta de mensaje -->
                                <div class="bg-gray-200 shadow-md rounded-lg p-6 border border-gray-200">
                                    <h2 class="text-lg font-bold text-gray-700 mb-2">Nombre del remitente: <span class="text-indigo-500">Juan Pérez</span></h2>
                                    <p class="text-gray-600 mb-2"><strong>Email:</strong> juan.perez@example.com</p>
                                    <p class="text-gray-600 mb-2"><strong>Teléfono:</strong> +34 678 123 456</p>
                                    <p class="text-gray-600 mb-4"><strong>Mensaje:</strong> Estoy interesado en más información sobre el vehículo.</p>
                                    <p class="text-sm text-gray-500"><strong>Enviado el:</strong> 23 de enero de 2025, 14:30</p>
                                </div>
                            
                                <!-- Otra tarjeta de mensaje -->
                                <div class="bg-gray-200 shadow-md rounded-lg p-6 border border-gray-200">
                                    <h2 class="text-lg font-bold text-gray-700 mb-2">Nombre del remitente: <span class="text-indigo-500">María López</span></h2>
                                    <p class="text-gray-600 mb-2"><strong>Email:</strong> maria.lopez@example.com</p>
                                    <p class="text-gray-600 mb-2"><strong>Teléfono:</strong> +34 612 987 654</p>
                                    <p class="text-gray-600 mb-4"><strong>Mensaje:</strong> ¿Puedo concertar una cita para ver el vehículo en persona?</p>
                                    <p class="text-sm text-gray-500"><strong>Enviado el:</strong> 22 de enero de 2025, 18:45</p>
                                </div>
                                 <!-- Otra tarjeta de mensaje -->
                                 <div class="bg-gray-200 shadow-md rounded-lg p-6 border border-gray-200">
                                    <h2 class="text-lg font-bold text-gray-700 mb-2">Nombre del remitente: <span class="text-indigo-500">María López</span></h2>
                                    <p class="text-gray-600 mb-2"><strong>Email:</strong> maria.lopez@example.com</p>
                                    <p class="text-gray-600 mb-2"><strong>Teléfono:</strong> +34 612 987 654</p>
                                    <p class="text-gray-600 mb-4"><strong>Mensaje:</strong> ¿Puedo concertar una cita para ver el vehículo en persona?</p>
                                    <p class="text-sm text-gray-500"><strong>Enviado el:</strong> 22 de enero de 2025, 18:45</p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
