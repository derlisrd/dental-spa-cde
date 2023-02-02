@extends('Layout.app')


@section('title', 'Agregar tratamiento')

@section('title2', 'Agregar')

@section('container')
    <form method="post" action="{{ route('tratamientos.store') }}">
        @csrf
        <div class="row">
            <div class="col-12">
                <h3>Agregar nuevo tratamiento</h3>
            </div>
            <div class="col-12">
                @if ($errors->any())
                    <div class="alert alert-info d-block">
                        @foreach ($errors->all() as $error)
                            <p>{{ $error }}</p>
                        @endforeach
                    </div>
                @endif
            </div>


            <div class="col-12">
                <div class="form-group mb-3">
                    @livewire('search.pacientes')
                </div>
            </div>
            <div class="col-12">
                <div class="form-group mb-3">
                    @livewire('search.servicios')
                </div>
            </div>
            <div class="col-12">
                <div class="form-group mb-3">
                    <select required class="form-control @if ($errors->has('empleado_id')) is-invalid @endif"
                        name="empleado_id" required>
                        <option selected disabled>Seleccione empleado</option>
                        @foreach ($empleados as $s)
                            <option value="{{ $s->id }}">{{ $s->nombre . ' ' . $s->apellido }} </option>
                        @endforeach
                    </select>
                    <small class="form-text text-muted">Empleado encargado</small>
                </div>
            </div>

            <div class="col-12 col-sm-6">
                <div class="form-group mb-3">
                    <select required class="form-select @if ($errors->has('caja_id')) is-invalid @endif" name="caja_id"
                        required>
                        @foreach ($caja as $c)
                            <option value="{{ $c->id }}">{{ $c->nombre }} </option>
                        @endforeach
                    </select>
                    <small class="form-text text-muted">Caja</small>
                </div>


            </div>

            <div class="col-12 col-sm-6">
                <div class="form-group mb-3">
                    <input class="form-control" autocomplete="off" name="abono_valor" value="{{ old('abono_valor') }}">
                    <small class="form-text text-muted">Abono o entrega</small>
                </div>
            </div>

            <div class="col-12">
                <div class="form-group mb-3">
                    <input type="text" class="form-control" autocomplete="off" name="descripcion"
                        value="{{ old('detalles') }}">
                    <small class="form-text text-muted">Detalles</small>
                </div>
            </div>

            <div class="col-12">
                <div class="form-group">
                    <button type="submit" class="btn btn-primary rounded">Agregar</button>
                </div>
            </div>



        </div>
    </form>

@endsection
