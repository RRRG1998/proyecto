<div>
    
    <div class="py-5">
        <div class="text-end">
            <input type="text" wire:model="search" class="w-25 mb-2" placeholder="Buscar...">
        </div>
        @if ($estados->count())
            <table class="table table-dark table-hover">
                <thead>
                    <tr>
                        <th>Nombre Del Estado</th>
                        <th>Codigo del Estado</th>
                        <th>id</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($estados as $estado)
                        <tr>
                            <td>{{ $estado->nombre_estado }}</td>
                            <td>{{ $estado->codigo_estado }}</td>
                            <th>{{ $estado->id }}</th>
                            <td>@livewire('update-estado', ['estado' => $estado], key($estado->id))</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <div class="py-5">
                No existe ningun registro que coincida con la busqueda
            </div>
        @endif
        <hr>
    </div>
</div>
