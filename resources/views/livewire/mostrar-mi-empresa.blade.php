<div>

    @if (!$empresa)
        {{-- solo se puede crear una empresa por ahora --}}
        <a href="{{ route('empresa.create') }}"
            class="inline-block bg-blue-500 hover:bg-blue-700 mb-5 text-white font-bold py-2 px-4 rounded">
            {{ __('Crear empresa') }}
        </a>
    @endif


    <div class="bg-white shadow-md sm:rounded-lg p-6 space-y-6">
        @foreach ($empresa as $empr)
            <div class="bg-gray-50 rounded-lg shadow-md p-6 md:grid md:grid-cols-3 md:gap-6">
                <!-- Logo -->
                <div class="md:col-span-1 flex justify-center items-center">
                    <img src="{{ asset('storage/logos/' . $empr->logo) }}" 
                         alt="Logo de {{ $empr->nombre }}" 
                         class="w-32 h-32 object-cover rounded-lg shadow">
                </div>
    
                <!-- Empresa Información -->
                <div class="md:col-span-2 space-y-3">
                    <p class="text-gray-800 font-semibold text-lg">{{ $empr->nombre }}</p>
                    <p class="text-gray-600"><span class="font-medium">Dirección:</span> {{ $empr->nombreUbicacion->provincia }}</p>
                    <p class="text-gray-600"><span class="font-medium">Teléfono:</span> {{ $empr->telefono }}</p>
                    <p class="text-gray-600"><span class="font-medium">Email:</span> {{ $empr->email }}</p>
    
                    <!-- Botones -->
                    <div class="flex gap-4 mt-4">
                        <a href="{{ route('empresa.edit', $empr->id) }}"
                           class="bg-blue-600 text-white py-2 px-4 rounded-lg shadow hover:bg-blue-700 transition">
                            Editar
                        </a>
    
                        <button wire:click="$dispatch('mostrarAlerta', { id: {{ $empr->id }} })"
                                class="bg-red-600 text-white py-2 px-4 rounded-lg shadow hover:bg-red-700 transition">
                            Eliminar
                        </button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    

</div>

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        document.addEventListener('livewire:initialized', () => {
            Livewire.on('mostrarAlerta', (empresaId) => {
                Swal.fire({
                    title: '¿Eliminar empresa?',
                    text: "Un vez eliminada no se puede recuperar.",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Sí, eliminar',
                    cancelButtonText: 'Cancelar'
                }).then((result) => {
                    if (result.isConfirmed) {
                        @this.call('eliminarEmpresa', empresaId);
                        Swal.fire(
                            'Eliminada!',
                            'La empresa fue eliminadoa correctamente.',
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
