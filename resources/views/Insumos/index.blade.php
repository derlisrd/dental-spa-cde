@extends('Layout.app')


@section('title', 'Insumos')

@section('title2', 'Insumos')

@section('container')
    <div class="row">
        <div class="col-12">
            <h3>Insumos</h3>
            <a href="{{ route('insumos.add') }}" class="btn btn-primary rounded mb-4">Agregar</a>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table id="table1" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Cod</th>
                                <th>Nombre</th>
                                <th>Cantidad</th>
                                <th>Medida</th>
                                <th>Valor</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($insumos as $i)
                                <tr>
                                    <td>{{ $i->codigo }}</td>
                                    <td>{{ $i->nombre }}</td>
                                    <td>{{ $i->cantidad }}</td>
                                    <td>{{ $i->medida }}</td>
                                    <td>{{ $i->valor }}</td>
                                    <td><a href="{{ route('insumos.edit',$i->id) }}" class="btn btn-primary">Editar</a></td>
                                </tr>
                            @endforeach

                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Cod</th>
                                <th>Nombre</th>
                                <th>Cantidad</th>
                                <th>Medida</th>
                                <th>Valor</th>
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

