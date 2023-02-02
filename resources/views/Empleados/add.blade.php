@extends('Layout.app')


@section('title', 'Agregar empleado')

@section('title2', 'Agregar')

@section('container')

    <form method="post" action="{{ route('empleados.store') }}">
        @csrf
        <div class="row">
            <div class="col-12">
                <h3>Agregar nuevo empleado</h3>
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
                <div class="form-group mb-4">
                    <input type="text" autofocus class="form-control @if ($errors->has('doc')) is-invalid @endif"
                    autocomplete="off" name="doc" value="{{ old('doc') }}">
                    <small class="form-text text-muted">Documento</small>
                </div>
                </div>

                <div class="col-12 col-sm-6">

                    <div class="form-group mb-4">
                        <input type="text" class="form-control @if ($errors->has('nombre')) is-invalid @endif"
                        autocomplete="off" name="nombre" value="{{ old('nombre') }}">
                        <small class="form-text text-muted">Nombre</small>
                    </div>
                </div>

                <div class="col-12 col-sm-6">

                    <div class="form-group mb-4">
                        <input type="text" class="form-control @if ($errors->has('apellido')) is-invalid @endif"
                        autocomplete="off" name="apellido" value="{{ old('apellido') }}">
                        <small class="form-text text-muted">Apellido</small>
                    </div>
                </div>
                <div class="col-12">

                    <div class="form-group mb-4">
                        <input type="text" class="form-control @if ($errors->has('labor')) is-invalid @endif"
                        autocomplete="off" name="labor" value="{{ old('labor') }}">
                        <small class="form-text text-muted">Labor</small>
                    </div>
                </div>

                <div class="col-12">
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary mb-4 rounded">Registrar</button>
                    </div>
                </div>

        </div>
    </form>

@endsection
