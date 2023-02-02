@extends('Layout.app')

@section('title', 'Cajas')

@section('title2', 'Cajas')

@section('container')

<div class="row">
    <div class="col-12">
        <h3>CAJAS</h3>
    </div>
    <div class="col-12">
        <a href="{{ route('cajas.create') }}" class="btn btn-primary">Agregar</a>
    </div>
    <div class="col-12">
        <div class="table-responsive mt-3">
            <table class="table table-hover">
                <thead>
                    <tr class="table-dark">
                        <th>Nombre</th>
                        <th>Fecha apertura</th>
                        <th>Efectivo</th>
                        <th>Sin efectivo</th>
                        <th>Responsable</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cajas as $c)
                        <tr>
                            <td>{{ $c->nombre }}</td>
                            <td>{{ $c->fecha_apertura }}</td>
                            <td>{{ $c->monto_actual }}</td>
                            <td>{{ $c->monto_sin_efectivo }}</td>
                            <td> {{ $c->user->name ?? '' }}</td>
                            <td>
                                <a href="{{ route('cajas.movimientos',$c->id) }}" class="btn btn-primary btn-sm">Movimientos</a>
                                @if($c->estado)
                                <a href="{{ route('cajas') }}" class="btn btn-danger btn-sm">Cerrar</a>
                                @else
                                <a href="{{ route('cajas') }}" class="btn btn-success btn-sm">Abrir</a>
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

@section('scripts')
<script>
    @if (session('caja_agregada'))
        Swal.fire('Caja agregada!','La caja ha sido agregada correctamente','success')
    @endif
</script>
@endsection
