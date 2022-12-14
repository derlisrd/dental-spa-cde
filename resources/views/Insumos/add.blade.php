@extends('Layout.app')


@section('title','Agregar Insumo')

@section('title2','Agregar')

@section('container')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Agregar nuevo insumo</h3>

            </div>
            <!-- /.card-header -->
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
                    <div class="form-group">
                        <input type="text" autofocus class="form-control form-control-lg" autocomplete="off" name="codigo" value="{{ old('codigo') }}" >
                        <small class="form-text text-muted">Codigo</small>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-lg" name="nombre" autocomplete="off" value="{{ old('nombre') }}" >
                        <small class="form-text text-muted">Nombre</small>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-lg" name="medida" value="{{ old('medida') }}" >
                        <small class="form-text text-muted">Medida</small>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-lg" name="cantidad" value="{{ old('cantidad') }}" >
                        <small class="form-text text-muted">Cantidad</small>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-lg" name="valor" value="{{ old('valor') }}" >
                        <small class="form-text text-muted">Valor</small>
                    </div>


                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
