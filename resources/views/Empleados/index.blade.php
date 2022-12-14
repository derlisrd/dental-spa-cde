@extends('Layout.app')


@section('title', 'Empleados')

@section('title2', 'Empleados')

@section('container')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title"></h3>
                <a href="{{ route('empleados.add') }}" class="btn btn-primary btn-lg ">Agregar</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="table1" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Doc</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Labor</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($empleados as $e)
                        <tr>
                            <td>{{ $e->doc }}</td>
                            <td>{{ $e->nombre }}</td>
                            <td>{{ $e->apellido }}</td>
                            <td>{{ $e->labor }}</td>
                            <td>
                                <a href="{{ route('empleados.edit',$e->id) }}" class="btn btn-primary">Editar</a>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Doc</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Labor</th>
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

