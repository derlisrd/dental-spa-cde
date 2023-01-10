@extends('Layout.app')


@section('title','Agregar paciente')

@section('title2','Agregar')

@section('container')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Registrar nuevo paciente</h3>

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
                <form method="post" action="{{ route('pacientes.store') }}">
                    @csrf
                    <div class="form-group">
                        <input type="text" autofocus class="form-control" name="nombre" value="{{ old('nombre') }}" >
                        <small class="form-text text-muted">Nombre</small>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="apellido" value="{{ old('apellido') }}" >
                        <small class="form-text text-muted">Apellido</small>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="doc" value="{{ old('doc') }}" >
                        <small class="form-text text-muted">Documento</small>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="edad" value="{{ old('edad') }}" >
                        <small class="form-text text-muted">Edad</small>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="contacto" value="{{ old('contacto') }}" >
                        <small class="form-text text-muted">Contacto</small>
                    </div>
                    <div class="form-group">
                        <select class="form-control" name="sexo">
                        <option selected disabled>Seleccionar sexo</option>
                        <option value="0">Femenino</option>
                        <option value="1">Masculino</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary mt-4">Registrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.4/jquery.inputmask.bundle.min.js"></script>
<script>
    $(document).ready(()=>{
        $('#contacto').inputmask("(9999)-999-999");
    })
</script>
@endsection
