@extends('Layout.app')


@section('title','Agregar tratamiento')

@section('title2','Agregar')

@section('container')

<div class="row">
    <div class="col-12">
        <h3>Agregar nuevo tratamiento</h3>
    </div>
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-info d-block">
                        @foreach ($errors->all() as $error)
                            <p>{{ $error }}</p>
                        @endforeach
                    </div>
                @endif
                <form method="post" action="{{ route('tratamientos.store') }}">
                    @csrf

                    <div class="form-group">



                    </div>
                    <div class="form-group mb-3">
                        <select required class="form-control @if($errors->has('servicio_id')) is-invalid @endif" name="servicio_id" required>
                            <option selected disabled>Seleccione servicio</option>
                            @foreach ($servicios as $s)
                                <option value="{{ $s->id }}">{{ $s->codigo." ".$s->descripcion }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <select required class="form-control @if($errors->has('empleado_id')) is-invalid @endif" name="empleado_id" required>
                            <option selected disabled>Seleccione empleado</option>
                            @foreach ($empleados as $s)
                                <option value="{{ $s->id }}">{{ $s->nombre ." ". $s->apellido }} </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group mb-3">
                        <select required class="form-control @if($errors->has('paciente_id')) is-invalid @endif" name="paciente_id" required>
                            <option selected disabled>Seleccione paciente</option>
                            @foreach ($pacientes as $s)
                                <option value="{{ $s->id }}">{{ $s->nombre ." ".$s->apellido ." ".$s->doc}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" class="form-control" autocomplete="off" name="descripcion" value="{{ old('detalles') }}" >
                        <small class="form-text text-muted">Detalles</small>
                    </div>


                    <div class="form-group">
                        <button type="submit" class="btn btn-primary rounded">Agregar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection


