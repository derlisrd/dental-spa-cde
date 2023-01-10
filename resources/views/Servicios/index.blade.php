@extends('Layout.app')


@section('title', 'Servicios')

@section('title2', 'Servicios')

@section('container')
    <div class="row">
        <div class="col-12">
            <h3>Servicios</h3>
            <a href="{{ route('servicios.add') }}" class="btn btn-primary rounded mb-4">Agregar</a>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table id="table1" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Codigo</th>
                                <th>Descripcion</th>
                                <th>Precio</th>
                                <th>Comision</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($servicios as $s)
                                <tr>
                                    <td>{{ $s->codigo }}</td>
                                    <td>{{ $s->descripcion }}</td>
                                    <td>{{ $s->precio }}</td>
                                    <td>{{ $s->comision }}</td>
                                    <td>
                                        <a href="{{ route('ficha',$s->id) }}" class="btn btn-primary">Editar</a>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Codigo</th>
                                <th>Descripcion</th>
                                <th>Precio</th>
                                <th>Comision</th>
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
