@extends('base.principal')

@section('title', 'Listar estados')

@section('contenido')
    <h1 class="text-center">Listar Estados</h1>
    @livewire('show-estados')
    {{--  <table class="table table-stripped table-hover">
        <thead>
            <tr> 
                <th>Nombre</th>
                <th>Codigo</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($estados as $estado)
                <tr>
                    <td>{{ $estado->nombre_estado }}</td>
                    <td>{{ $estado->codigo_estado }}</td>
                    <td></td>
                </tr>
            @endforeach
        </tbody>
    </table>  --}}
@endsection