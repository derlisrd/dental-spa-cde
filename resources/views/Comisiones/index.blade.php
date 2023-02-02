@extends('Layout.app')

@section('title', 'Comisiones')

@section('title2', 'Comisiones')

@section('container')

    <div class="row">
        <div class="col-12">
            <h3>Comisiones de empleados</h3>
            <a href="#" class="btn btn-primary my-3 rounded">Pagar</a>
        </div>
        <div class="col-12">
            <form method="POST" action="{{ route('empleados.comisiones.search') }}"> @csrf
                <div class="form-floating my-3">
                    <input class="form-control" id="search" name="search" placeholder="Buscar...">
                    <label for="search">Buscar...</label>
                </div>
            </form>
        </div>
        <div class="col-12">

            <div class="table-responsive mt-3">
                <table class="table table-hover">
                    <thead>
                        <tr class="table-dark">
                            <th>Fecha</th>
                            <th>Empleado</th>
                            <th>Servicio</th>
                            <th>Total</th>
                            <th>Comision</th>
                            <th>Porcentaje%</th>

                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($comisiones as $e)
                            <tr>
                                <td>{{ $e->created_at->format('d-m-Y') }}</td>
                                <td>{{ $e->empleado->doc . ' ' . $e->empleado->apellido . ', ' . $e->empleado->nombre }}</td>
                                <td>{{ $e->servicio->descripcion }}</td>
                                <td>{{ number_format($e->valor_total, 0, '', '.') }}</td>
                                <td>{{ number_format($e->valor_comision, 0, '', '.') }}</td>
                                <td>{{ $e->servicio->comision }} %</td>

                                <td>
                                    @if ($e->pagado)
                                        <span class="badge rounded-pill bg-success">Pagado</span>
                                    @else
                                        <span class="badge rounded-pill bg-danger">No pagado</span>
                                    @endif
                                </td>
                                <td>
                                    @if ($e->pagado)
                                        <a href="{{ route('empleados.comisiones.pagar', $e->id) }}"
                                            class="btn btn-info rounded-pill">Ver recibo</a>
                                    @else
                                        <a href="{{ route('empleados.comisiones.pagar', $e->id) }}"
                                            class="btn btn-success btn-sm rounded-pill">Pagar</a>
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
