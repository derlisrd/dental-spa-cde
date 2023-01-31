@extends('Layout.app')

@section('title', 'Comisiones')

@section('title2', 'Comisiones')

@section('container')

<div class="row">
    <div class="col-12">
        <h3>Comisiones de empleados</h3>
        <a href="#" class="btn btn-primary mb-4 rounded">Pagar</a>
    </div>
    <div class="col-12">

        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr class="table-dark">
                            <th>Nro</th>
                            <th>Empleado</th>
                            <th>Servicio</th>
                            <th>Porcentaje%</th>
                            <th>Fecha</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($comisiones as $e)
                        <tr>
                            <td>{{ $e->id }}</td>
                            <td>{{ $e->empleado->apellido . ', ' . $e->empleado->nombre }}</td>
                            <td>{{ $e->servicio->descripcion }}</td>
                            <td>{{ $e->servicio->comision }} %</td>
                            <td>{{ $e->created_at->format('d-m-Y') }}</td>
                            <td>
                               @if($e->pagado) <span class="badge rounded-pill bg-success">Pagado</span> @else <span class="badge rounded-pill bg-danger">No pagado</span> @endif
                            </td>
                            <td>
                                @if($e->pagado)
                                <a href="#" class="btn btn-info rounded-pill">Ver recibo</a>
                                @else
                                <a href="#" class="btn btn-success btn-sm rounded-pill">Pagar</a>
                                @endif
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>

    </div>
</div>
</div>

@endsection
