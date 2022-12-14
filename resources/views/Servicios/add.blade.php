@extends('Layout.app')


@section('title','Agregar servicio')

@section('title2','Agregar')

@section('container')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Agregar nuevo servicio</h3>

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
                <form method="post" action="{{ route('servicios.store') }}">
                    @csrf
                    <div class="form-group">
                        <input type="text" autofocus class="form-control form-control-lg @if($errors->has('codigo')) is-invalid @endif" autocomplete="off" name="codigo" value="{{ old('codigo') }}" >
                        <small class="form-text text-muted">Codigo</small>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-lg @if($errors->has('descripcion')) is-invalid @endif" autocomplete="off" name="descripcion" value="{{ old('descripcion') }}" >
                        <small class="form-text text-muted">Descripcion</small>
                    </div>
                    <div class="form-group">
                        <input type="text" id="precio" autocomplete="off" class="form-control form-control-lg @if($errors->has('precio')) is-invalid @endif" name="precio" value="{{ old('precio') }}" >
                        <small class="form-text text-muted">Precio</small>
                    </div>
                    <div class="form-group">
                        <input type="text" autocomplete="off" class="form-control form-control-lg @if($errors->has('comision')) is-invalid @endif " name="comision" value="{{ old('comision') }}" >
                        <small class="form-text text-muted">% comisión</small>
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


