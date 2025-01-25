<div class="col-span-3 p-4">
    <div class="max-w-4xl mx-auto py-8 space-y-6">
        <h1 class="text-2xl font-bold text-gray-800 text-center">Mensajes Recibidos</h1>

        @forelse ($mensaje as $m)
            <div class="bg-gray-100 shadow-md rounded-lg p-6 border border-gray-200 my-4">
                <h2 class="text-lg font-bold text-gray-700 mb-2">
                    Nombre del remitente: <span class="text-indigo-500">{{ $m->nombre_user }}</span>
                </h2>
                <p class="text-gray-600 mb-2"><strong>Email:</strong> {{ $m->email_user }}</p>
                <p class="text-gray-600 mb-2"><strong>Teléfono:</strong> {{ $m->telefono_user }}</p>
                <p class="text-gray-600 mb-4"><strong>Mensaje:</strong> {{ $m->mensaje_user }}</p>
                <p class="text-sm text-gray-500"><strong>Enviado el:</strong> {{ $m->created_at->format('d/m/Y H:i') }}</p>
            </div>
        @empty
            <p class="text-gray-500 text-center">No hay mensajes para este vehículo.</p>
        @endforelse
    </div>
</div>
