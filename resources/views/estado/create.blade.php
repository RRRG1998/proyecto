@extends('base.principal')

@section('title', 'Crear Estado')

@section('contenido')
<div class="container">
    <div class="row d-flex justify-content-between">
        <div class="col-6" style="background-color:#6aa3b4">
            <h2 class="fw-bold text-center py-5">Crear Estado</h2>

            <!-- LOGIN -->

            <form action="{{ route('estado.store') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="nombre_estado" class="form-label">Nombre del Estado</label>
                    <input type="text" name="nombre_estado" id="nombre_estado" class="form-control" value="{{ old('nombre_estado') }}">
                    @error('nombre_estado')
                        <br>
                        <small>*{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="codigo_estado" class="form-label">Codigo de area del estado</label>
                    <input type="text" name="codigo_estado" id="codigo_estado" class="form-control" value="{{ old('codigo_estado') }}">
                    @error('codigo_estado')
                        <br>
                        <small>*{{ $message }}</small>
                    @enderror
                </div>


                <!-- Botones-->
                <div class="container w-100 my-5">
                    <div class="row d-flex justify-content-between">
                        <!-- BOTON DE BORAR -->
                        <div class="col-5 p-0">
                            <button type="" class="btn btn-danger w-100 my-1 text-center">
                                <div class="row align-items-center text-center">
                                    <p class="p-0 m-0"> Borrar</p>
                                </div>
                            </button>
                        </div>

                        <!-- BOTON GUARDAR -->
                        <div class="col-5 p-0">
                            <button type="submit" class="btn btn-primary w-100 my-1">
                                <div class="row align-items-center text-center">
                                    <p class="p-0 m-0"> Guardar</p>
                                </div>
                            </button>
                        </div>
                    </div>
                </div>
            </form>


        </div>
    </div>
</div>


@endsection