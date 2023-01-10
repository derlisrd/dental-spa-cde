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
            <div class="card">
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="table1" class="table table-bordered table-hover">
                        <thead>
                            <tr>
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
                                        <a href="{{ route('ficha',$paciente->id) }}" class="btn btn-primary">Ver ficha</a>
                                        <a href="{{ route('ficha',$paciente->id) }}" class="btn btn-primary">Editar</a>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Edad</th>
                                <th>Sexo</th>
                                <th>Acciones</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </div>

@endsection


