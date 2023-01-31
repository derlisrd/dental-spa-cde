@extends('Layout.app')


@section('title', 'Empleados')

@section('title2', 'Empleados')

@section('container')

<div class="row">
    <div class="col-12">
        <h3>Empleados</h3>
        <a href="{{ route('empleados.add') }}" class="btn btn-primary mb-4 rounded">Agregar</a>
    </div>
    <div class="col-12">

        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr class="table-dark">
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
                </table>

    </div>
</div>
</div>
@endsection

