@extends('Layout.app')

@section('title','Ficha')

@section('title2','Ficha')

@section('container')

<h1>ficha {{ $ficha->paciente->nombre }}</h1>


@endsection
