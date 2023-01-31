@extends('Layout.app')


@section('title', 'Abonos')

@section('title2', 'Abono')

@section('container')

<div class="row">
    <div class="col-12">
        <h2>Abono de tratamiento</h2>
    </div>
    <div class="col-12">
        <h3>{{ $tratamiento->servicio->descripcion }}</h3>
    </div>
    <div class="col-12 col-sm-12 col-md-6">
        <div class="alert alert-info">
            <h4>Precio: {{ $tratamiento->valor_total; }}</h4>
        </div>
    </div>
    <div class="col-12 col-sm-12 col-md-6">
        <div class="alert alert-info">
            <h4>Abonado total: {{ $abonos->sum('abono_valor'); }}</h4>
        </div>
    </div>


</div>

@endsection
