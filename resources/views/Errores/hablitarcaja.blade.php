@extends('Layout.app')

@section('title', 'Ficha')

@section('title2', 'Ficha')

@section('container')

<div class="alert alert-danger">
    <h3>Por favor habilite o haga apertura de una caja</h3>
    <a href="{{ route('cajas') }}" class="btn btn-primary">CAJAS</a>
</div>


@endsection
