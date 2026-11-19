<x-layout :titulo="'Vista desde proyecto' . $id">
    @isset($proyecto)
        <ul class="grid gap-4 sm:grid-cols-2">
        <x-tarjeta-proyecto :proyecto="$proyecto" :id="$id" />
        </ul>
    @endisset
</x-layout>
