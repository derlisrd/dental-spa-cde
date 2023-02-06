@extends('Layout.app')


@section('title', 'Editar forma de pago')

@section('title2', 'Editar')

@section('container')

    <form method="post" action="{{ route('cajas.formaspago.update',request()->id) }}">
        @method('PUT')
        @csrf
        <div class="row">
            <div class="col-12">
                <h3>Agregar nueva forma de pago</h3>
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
            <div class="col-12 col-sm-6">
                <div class="form-group mb-4 ">
                    <input autofocus class="form-control @if ($errors->has('descripcion')) is-invalid @endif"
                    autocomplete="off" name="descripcion" value="{{ old('descripcion') ?? $forma->descripcion }}">
                    <small class="form-text text-muted">Descripcion</small>
                </div>
            </div>

                <div class="col-12 col-sm-6">
                    <div class="form-group mb-4">
                        <input class="form-control @if ($errors->has('porcentaje_descuento')) is-invalid @endif"
                        autocomplete="off" name="porcentaje_descuento" value="{{ old('porcentaje_descuento') ?? $forma->porcentaje_descuento }}">
                        <small class="form-text text-muted">Porcentaje de descuento</small>
                    </div>
                </div>

                <div class="col-12 ">

                    <div class="form-group mb-3">

                        <fieldset class="form-group">
                            <legend class="mt-4">Tipo: </legend>
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="tipo" id="optionsRadios1" value="0" @if($forma->tipo==0) checked @endif >
                              <label class="form-check-label cursor-pointer" for="optionsRadios1">
                                Transacción sin efectivo
                              </label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="tipo" id="optionsRadios2" value="1" @if($forma->tipo==1) checked @endif>
                              <label class="form-check-label cursor-pointer" for="optionsRadios2">
                                Efectivo
                              </label>
                            </div>
                          </fieldset>
                    </div>
                </div>


                <div class="col-12">
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary mb-4 rounded">Actualizar</button>
                    </div>
                </div>

        </div>
    </form>

@endsection
