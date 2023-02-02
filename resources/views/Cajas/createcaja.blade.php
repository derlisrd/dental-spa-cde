@extends('Layout.app')


@section('title','Agregar caja')

@section('title2','Agregar')

@section('container')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title">Agregar nueva caja</h2>
                @if ($errors->any())
                    <div class="alert alert-info d-block">
                        @foreach ($errors->all() as $error)
                            <p>{{ $error }}</p>
                        @endforeach
                    </div>
                @endif
                <form method="post" action="{{ route('cajas.store') }}">
                    @csrf
                    <div class="form-group">
                        <div class="form-floating my-3">
                          <input autocomplete="off" autofocus required class="form-control" id="nombre" name="nombre" value="{{ old('nombre') }}" placeholder="Nombre">
                          <label for="nombre">Nombre de caja: </label>
                        </div>
                        <div class="form-floating my-3">
                          <input required autocomplete="off" class="form-control" id="monto_inicial" name="monto_inicial" value="{{ old('monto_inicial') }}" placeholder="Monto inicial">
                          <label for="monto_inicial">Monto Inicial</label>
                        </div>

                        <div class="form-floating my-4">
                            <select class="form-select" name="user_id" id="user_id">
                                @foreach ($users as $u )
                                    <option value="{{ $u->id }}"> {{ $u->name }} </option>
                                @endforeach
                              </select>
                            <label for="monto_inicial">Caja asignada a usuario: </label>
                        </div>

                        <div class="form-check form-switch my-3">
                            <input class="form-check-input cursor-pointer" name="estado" type="checkbox" id="estado" checked>
                            <label class="form-check-label cursor-pointer" for="estado"> Estado abierto o cerrado</label>
                          </div>
                      </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary mb-4 rounded">Registrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')

@endsection
