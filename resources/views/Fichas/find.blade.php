@extends('Layout.app')

@section('title','Ficha')

@section('title2','Ficha')

@section('container')



<h2>Ficha: {{ $ficha->paciente->nombre .' '. $ficha->paciente->apellido }} </h2>

<a href="{{ route('pacientes') }}" class="btn btn-primary"> &#11013; Volver a pacientes </a>

@endsection
