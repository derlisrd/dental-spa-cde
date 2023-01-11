@extends('Layout.app')

@section('title','Ficha')

@section('title2','Ficha')

@section('container')



<h2>Ficha: {{ $ficha->paciente->nombre .' '. $ficha->paciente->apellido }} </h2>

<a href="{{ route('pacientes') }}" class="btn btn-primary rounded my-3"> Todos los pacientes </a>

<div class="row">
    <div class="col-12">
        <h3>Tratamientos</h3>
    </div>
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <table id="table1" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Tratamiento</th>
                            <th>Finalizado</th>
                            <th>Fecha</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tratamientos as $t)
                            <tr>
                                <td>{{ $t->descripcion }}</td>
                                <td>@if($t->finalizado)
                                    <span class="btn btn-info btn-sm rounded">Sí</span>
                                @else
                                    <span class="btn btn-success btn-sm rounded">No</span>
                                @endif
                                </td>
                                <td>{{ $t->created_at }}</td>
                                <td><a class="btn btn-primary rounded" href="{{ route('tratamientos.proceder',$t->id) }}">Ver</a></td>
                            </tr>
                        @endforeach

                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Tratamiento</th>
                            <th>Finalizado</th>
                            <th>Fecha</th>
                            <th>Opciones</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
