@extends('Layout.app')


@section('title', 'Tratamientos')

@section('title2', 'Tratamientos')

@section('container')

<div class="row">
    <div class="col-12">
        <h3>Tratamientos</h3>
        <a href="{{ route('tratamientos.add') }}" class="btn btn-primary rounded mb-4">Agregar</a>
    </div>
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <table id="table1" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Codigo</th>
                            <th>Servicio</th>
                            <th>Paciente</th>
                            <th>Funcionario</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tratamientos as $s)
                        <tr>
                            <td>{{ $s->id }}</td>
                            <td>{{ $s->servicio->descripcion }}</td>
                            <td>{{ $s->paciente->nombre . ' '.$s->paciente->apellido }}</td>
                            <td>{{ $s->empleado->nombre . ' '.$s->empleado->apellido }}</td>
                            <td>
                                <a href="{{ route('utilizado.tratamiento.proceder', $s->id ) }}" class="btn btn-primary">Proceder</a>
                                <a href="#{{ $s->id }}" class="btn btn-danger">Finalizar</a>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Codigo</th>
                            <th>Servicio</th>
                            <th>Paciente</th>
                            <th>Funcionario</th>
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



