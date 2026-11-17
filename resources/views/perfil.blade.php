<x-layout :id="$id">
    <h1>Perfil</h1>
    <p>Visualizar el currículo de 
        @isset($id)
            {{ $id }}
        @else
            propio
        @endisset
    </p>
</x-layout>
