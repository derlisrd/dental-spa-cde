@extends('Layout.app')


@section('title','Agregar servicio')

@section('title2','Agregar')

@section('container')

<div class="row">
    <div class="col-12">
        <h3>Agregar servicio</h3>
    </div>
    <div class="col-12">
        <a href="{{ route('servicios') }}" class="btn btn-primary my-4">Volver</a>
    </div>
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form method="post" action="{{ route('servicios.store') }}">
                    @csrf
                    <div class="form-group mb-4">
                        <div class="form-floating my-3">
                        <input required id="codigo" autofocus class="form-control @error('codigo') is-invalid @enderror" autocomplete="off" name="codigo" value="{{ old('codigo') }}" placeholder="Codigo" >
                        <label for="codigo">Codigo {{ $errors->first('codigo') }}</label>
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <input type="text" class="form-control @error('descripcion') is-invalid @enderror" autocomplete="off" name="descripcion" value="{{ old('descripcion') }}" >
                        <small class="form-text text-muted">Descripcion {{ $errors->first('descripcion') }}</small>
                    </div>
                    <div class="form-group mb-4">
                        <input type="text" id="precio" autocomplete="off" class="form-control @error('precio') is-invalid @enderror" name="precio" value="{{ old('precio') }}" >
                        <small class="form-text text-muted">Precio {{ $errors->first('precio') }}</small>
                    </div>
                    <div class="form-group mb-4">
                        <input type="text" autocomplete="off" class="form-control @error('comision') is-invalid @enderror" name="comision" value="{{ old('comision') }}" >
                        <small class="form-text text-muted">% comisión {{ $errors->first('comision') }}</small>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary rounded mt-4">Registrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection


@section('scripts')
<script>
    @if (session('add'))
        Swal.fire('Servicio agregado!','Ha sido agregado correctamente','success')
    @endif
</script>
@endsection
