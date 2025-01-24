@auth
    @if ($empresaNavegacion)
        <img src="{{ asset('storage/logos/' . $empresaNavegacion->logo) }}" alt="Logo" class="w-8 h-8" />
    @endif
@endauth
