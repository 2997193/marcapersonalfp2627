<x-layout titulo="Listado de Proyectos">
    <ul class="grid gap-4 sm:grid-cols-2">
        @forelse ($proyectos as $id => $proyecto)
            <x-tarjeta-proyecto :proyecto="$proyecto" :id="$id" />
        @empty
            <li>Todavia no hay proyectos</li>
        @endforelse
    </ul>
</x-layout>