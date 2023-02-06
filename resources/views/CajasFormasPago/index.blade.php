@extends('Layout.app')

@section('title', 'Formas de pago')

@section('title2', 'Formas de pago')

@section('container')
<div class="row">
    <div class="col-12">
        <h3>Formas de pagos y descuentos</h3>
        <a href="{{ route('cajas.formaspago.create') }}" class="btn btn-primary mb-4 rounded">Agregar</a>
    </div>
    <div class="col-12">

        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr class="table-dark">
                            <th>ID</th>
                            <th>Descripcion</th>
                            <th>Porcentaje descuento</th>
                            <th>Tipo</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($formas as $e)
                        <tr>
                            <td>{{ $e->id }}</td>
                            <td>{{ $e->descripcion }}</td>
                            <td>{{ $e->porcentaje_descuento }}</td>
                            <td>@if($e->tipo==1) Efectivo @else No efectivo @endif</td>
                            <td>
                                <a href="{{ route('cajas.formaspago.edit',$e->id) }}" class="btn btn-warning">Editar</a>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>

    </div>
</div>
</div>

@endsection
