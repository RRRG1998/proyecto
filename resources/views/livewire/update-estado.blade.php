<div>
    {{--  <!-- Button trigger modal -->  --}}
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        editar
    </button>

    {{--  <!-- Modal -->  --}}
    <x-modal>
        <x-slot name="encabezado"><h4>{{ $estado->nombre_estado }}</h4></x-slot>

        <x-slot name="body">
            <x-input placeholder="{{ $estado->nombre_estado }}"/>
        </x-slot>
        <x-slot name="footer">pie</x-slot>
    </x-modal>
</div>
