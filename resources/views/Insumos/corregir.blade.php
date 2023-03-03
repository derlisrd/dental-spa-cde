@extends('Layout.app')


@section('title','Corregir Insumo')

@section('title2','Corregir')

@section('container')

<div class="row">
    <div class="col-12">
        <h1>Corregir cantidad de insumo</h1>
        <h3>Insumo: {{ $insumo->nombre }}</h3>
        <h4>Cantidad actual: {{ $insumo->cantidad }}</h4>
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
                <form method="post" action="{{ route('insumos.update.stock') }}">
                    <input type="hidden" name="id" value="{{ request()->id }}" />
                    @csrf @method("PUT")
                    <div class="form-floating my-4">
                        <input class="form-control" name="cantidad" value="{{ old('cantidad') }}" id="cantidad" placeholder="Cantidad ">
                        <label for="cantidad">Cantidad</label>
                      </div>
                    <button type="submit" class="btn btn-primary">Corregir</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
