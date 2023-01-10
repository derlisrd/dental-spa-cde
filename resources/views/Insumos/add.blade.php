@extends('Layout.app')


@section('title','Agregar Insumo')

@section('title2','Agregar')

@section('container')

<div class="row">
    <div class="col-12">
        <h3>Agregar nuevo insumo</h3>
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
                <form method="post" action="{{ route('insumos.store') }}">
                    @csrf
                    <div class="form-group mb-4">
                        <input type="text" autofocus class="form-control" autocomplete="off" name="codigo" value="{{ old('codigo') }}" >
                        <small class="form-text text-muted">Codigo</small>
                    </div>
                    <div class="form-group mb-4">
                        <input type="text" class="form-control" name="nombre" autocomplete="off" value="{{ old('nombre') }}" >
                        <small class="form-text text-muted">Nombre y descripcion</small>
                    </div>
                    <div class="form-group mb-4">
                        <input type="text" class="form-control" name="medida" value="{{ old('medida') }}" >
                        <small class="form-text text-muted">Medida (Litro, ml, unidad)</small>
                    </div>
                    <div class="form-group mb-4">
                        <input type="text" class="form-control" name="cantidad" value="{{ old('cantidad') }}" >
                        <small class="form-text text-muted">Cantidad</small>
                    </div>
                    <div class="form-group mb-4">
                        <input type="text" class="form-control" name="valor" value="{{ old('valor') }}" >
                        <small class="form-text text-muted">Valor</small>
                    </div>


                    <div class="form-group">
                        <button type="submit" class="btn btn-primary rounded mb-4">Registrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
