@extends('Layout.app')


@section('title', 'Pacientes')

@section('title2', 'Pacientes')

@section('container')
    <div class="row">
        <div class="col-12">
            <h3>Pacientes</h3>
            <a href="{{ route('pacientes.add') }}" class="rounded btn btn-primary mb-3">Agregar</a>
        </div>
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr class="table-dark">
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Edad</th>
                            <th>Sexo</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pacientes as $paciente)
                            <tr>
                                <td>{{ $paciente->nombre }}</td>
                                <td>{{ $paciente->apellido }}</td>
                                <td>{{ $paciente->edad }}</td>
                                <td>{{ $paciente->sexo ? 'Masc' : 'Fem' }}</td>
                                <td>
                                    <a href="{{ route('ficha', $paciente->id) }}" class="btn btn-primary">Ver ficha</a>
                                    <a href="{{ route('ficha', $paciente->id) }}" class="btn btn-primary">Editar</a>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection

