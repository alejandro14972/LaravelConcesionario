<div>

    @if (!$empresa)
        {{-- solo se puede crear una empresa por ahora --}}
        <a href="{{ route('empresa.create') }}"
            class="inline-block bg-blue-500 hover:bg-blue-700 mb-5 text-white font-bold py-2 px-4 rounded">
            {{ __('Crear empresa') }}
        </a>
    @endif





    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 space-y-6">

        @foreach ($empresa as $empr)
            <div class="p-6 bg-gray-100 rounded-lg shadow-md md:flex md:justify-between md:items-center">

                <div>
                    <p class="text-gray-700"><strong>Nombre:</strong> {{ $empr->nombre }}</p>
                    <p class="text-gray-700"><strong>Dirección:</strong> {{ $empr->direccion }}</p>
                    <p class="text-gray-700"><strong>Telefono:</strong> {{ $empr->telefono }}</p>
                    <p class="text-gray-700"><strong>Email:</strong> {{ $empr->email }}</p>

                </div>


                <div class="flex gap-3 mt-5 justify-center md:flex md:justify-center md:items-center">
                    <a href="#" class="bg-green-800 py-2 px-4 text-white rounded hover:bg-slate-900 uppercase">
                        Ver
                    </a>

                    <a href="{{ route('empresa.edit', $empr->id) }}"
                        class="bg-blue-800 py-2 px-4 text-white rounded hover:bg-slate-900 uppercase">
                        Editar
                    </a>

                    <button 
                        wire:click="$dispatch('mostrarAlerta', { id: {{ $empr->id }} })" 
                        class="bg-red-800 py-2 px-4 text-white rounded hover:bg-slate-900 uppercase">
                        Eliminar
                    </button>
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
@endpush
