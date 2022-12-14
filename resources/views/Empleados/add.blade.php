@extends('Layout.app')


@section('title','Agregar empleado')

@section('title2','Agregar')

@section('container')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Agregar nuevo empleado</h3>

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
                <form method="post" action="{{ route('empleados.store') }}">
                    @csrf
                    <div class="form-group">
                        <input type="text" autofocus class="form-control form-control-lg @if($errors->has('doc')) is-invalid @endif" autocomplete="off" name="doc" value="{{ old('doc') }}" >
                        <small class="form-text text-muted">Documento</small>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-lg @if($errors->has('nombre')) is-invalid @endif" autocomplete="off" name="nombre" value="{{ old('nombre') }}" >
                        <small class="form-text text-muted">Nombre</small>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-lg @if($errors->has('apellido')) is-invalid @endif" name="apellido" value="{{ old('apellido') }}" >
                        <small class="form-text text-muted">Apellido</small>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-lg @if($errors->has('labor')) is-invalid @endif " name="labor" value="{{ old('labor') }}" >
                        <small class="form-text text-muted">Labor</small>
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
