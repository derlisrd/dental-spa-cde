@extends('Layout.app')


@section('title','Agregar paciente')

@section('title2','Agregar')

@section('container')

<div class="row">
    <div class="col-12">
        <h3>Registrar nuevo paciente</h3>
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
                <form method="post" action="{{ route('pacientes.store') }}">
                    @csrf
                    <div class="form-group mb-3">
                        <input type="text" autofocus autocomplete="off" class="form-control" name="doc" value="{{ old('doc') }}" >
                        <small class="form-text text-muted">Documento</small>
                    </div>

                    <div class="form-group mb-3">
                        <input type="text" autocomplete="off"  class="form-control" name="nombre" value="{{ old('nombre') }}" >
                        <small class="form-text text-muted">Nombre</small>
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" autocomplete="off" class="form-control" name="apellido" value="{{ old('apellido') }}" >
                        <small class="form-text text-muted">Apellido</small>
                    </div>

                    <div class="form-group mb-3">
                        <input type="text" autocomplete="off" class="form-control" name="edad" value="{{ old('edad') }}" >
                        <small class="form-text text-muted">Edad</small>
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" autocomplete="off" class="form-control" name="contacto" value="{{ old('contacto') }}" >
                        <small class="form-text text-muted">Contacto</small>
                    </div>
                    <div class="form-group mb-3">

                        <fieldset class="form-group">
                            <legend class="mt-4">Género: </legend>
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="sexo" id="optionsRadios1" value="0" checked>
                              <label class="form-check-label cursor-pointer" for="optionsRadios1">
                                Femenino
                              </label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="sexo" id="optionsRadios2" value="1">
                              <label class="form-check-label cursor-pointer" for="optionsRadios2">
                                Masculino
                              </label>
                            </div>
                          </fieldset>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary mt-3 rounded">Registrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

