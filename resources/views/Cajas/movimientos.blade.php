@extends('Layout.app')

@section('title', 'Movimientos de caja')

@section('title2', 'Movimientos de caja')

@section('container')



<div class="row">
    <div class="col-12">
        <h3> {{ $caja->nombre }} </h3>
        <h4>Responsable: {{ $caja->user->name }}</h4>
    </div>
    <div class="col-12">
        <div class="table-responsive mt-3">
            <table class="table table-hover">
                <thead>
                    <tr class="table-dark">
                        <th scope="col">Caja</th>
                        <th>Monto Efectivo</th>
                        <th>Sin Efectivo</th>
                        <th>Tipo de mov</th>
                        <th>Detalles</th>
                        <th>Fecha movimiento</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($movimientos as $c)
                        <tr>
                            <td>{{ $c->caja->nombre }}</td>
                            <td>{{ $c->monto }}</td>
                            <td>{{ $c->monto_sin_efectivo }}</td>
                            <td>{{ $tipos[$c->tipo]}}</td>
                            <td>{{ $c->detalles }}</td>
                            <td> {{ $c->created_at }}</td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>







@endsection
