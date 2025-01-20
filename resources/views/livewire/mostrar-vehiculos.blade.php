<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 space-y-6">

    <livewire:filtrar-vehiculos />


    <div class="flex justify-end">
        <div class="bg-indigo-100 text-indigo-800 text-center text-lg font-semibold rounded-lg p-4 shadow-md">
            Total Vehículos: <span class="text-indigo-600">{{ $vehiculos->count() }}</span>
        </div>
    </div>

    @foreach ($vehiculos as $vehiculo)

        @php
            $EnunciadoIva = '';
            $claseIVA = '';
            if ($vehiculo->iva == 1) {
                $EnunciadoIva = 'Con IVA';
                $claseIVA = 'text-green-700 text-green-800';
            } else {
                $EnunciadoIva = 'Sin IVA';
                $claseIVA = 'text-red-700 text-red-800';
            }
            $claseGarantiaActiva = '';
            if ($vehiculo->garantia == 1) {
                $claseGarantiaActiva = 'text-green-700 text-green-800';
            } else {
                $claseGarantiaActiva = 'text-red-700 text-red-800';
            }
        @endphp

        <div class="p-6 bg-gray-100 rounded-lg shadow-md md:grid md:grid-cols-3 gap-5 md:justify-between md:items-center">

            <div class="">
                <img src="{{ asset('storage/vehiculos/' . $vehiculo->imagen) }}" alt="Imagen del Vehículo"
                    class="w-full h-auto object-cover rounded-lg shadow">
            </div>


            <div class="">
                <p class="text-gray-700"><strong>Marca:</strong> {{ $vehiculo->nombreMarca->marca }}
                    {{ $vehiculo->nombreModelo->nombre_modelo }}</p>
                <p class="text-gray-700"><strong>Combustible:</strong> {{ $vehiculo->combustible }}</p>
                <p class="text-gray-700"><strong>Precio:</strong> {{ $vehiculo->precio }} € <i class={{ $claseIVA }}>
                        {{ $EnunciadoIva }}</i> </p>
                <p class="text-gray-700"><strong>Fabricación:</strong>
                    {{ \Carbon\Carbon::parse($vehiculo->fabricacion)->format('Y') }}</p>
                <p class="text-gray-700"><strong>Ubicación:</strong> {{ $vehiculo->nombreUbicacion->provincia }}</p>
                <p class="text-gray-700"><strong>Kilometros:</strong> {{ $vehiculo->kilometros }} km</p>
                <p class="text-gray-700"><strong>Garantia:</strong><i
                        class="{{ $claseGarantiaActiva }}">{{ $vehiculo->garantia == 1 ? 'Garantia de 12 meses' : 'Sin garantia' }}</i>

                </p>

            </div>


            <div class="flex gap-3 mt-5 justify-center md:flex md:justify-center md:items-center">
                <a href="{{ route('vehiculos.show', $vehiculo->id) }}"
                    class="bg-green-800 py-2 px-4 text-white rounded hover:bg-slate-900 uppercase">
                    Ver
                </a>

                <a href="{{ route('vehiculos.edit', $vehiculo->id) }}"
                    class="bg-blue-800 py-2 px-4 text-white rounded hover:bg-slate-900 uppercase">
                    Editar
                </a>

                <button wire:click="$dispatch('mostrarAlerta', { id: {{ $vehiculo->id }} })"
                    class="bg-red-800 py-2 px-4 text-white rounded hover:bg-slate-900 uppercase">
                    Eliminar
                </button>

            </div>

        </div>
    @endforeach

</div>


@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        document.addEventListener('livewire:initialized', () => {
            Livewire.on('mostrarAlerta', (vehiculoId) => {
                Swal.fire({
                    title: '¿Eliminar Vehículo?',
                    text: "Un vehículo eliminado no se puede recuperar.",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Sí, eliminar',
                    cancelButtonText: 'Cancelar'
                }).then((result) => {
                    if (result.isConfirmed) {
                        @this.call('eliminarVehiculo', vehiculoId);
                        Swal.fire(
                            'Eliminado!',
                            'El vehículo fue eliminado correctamente.',
                            'success'
                        );
                    }
                });
            });
        });
    </script>

    <script>
        @if (session()->has('alerta'))

            Swal.fire({
                position: "top-end",
                icon: "success",
                title: "{{ session('alerta') }}",
                showConfirmButton: false,
                timer: 3500
            });
        @endif
    </script>
@endpush
