@extends('Layout.app')


@section('title', 'Insumos')

@section('title2', 'Insumos')

@section('container')

<form action="{{ route('tratamiento.procesar') }}" method="post">
    @csrf
    <input type="hidden" name="tratamiento_id" value="{{ $id }}" />
<div class="row">
    <div class="col-6">
        <h3>Insumos utilizados</h3>
    </div>
    <div class="col-6"><a href="{{ route('ficha',$paciente->id) }}"><strong>Paciente: {{ $paciente->nombre . ' ' . $paciente->apellido . ' ' . $paciente->doc}} </strong></a></div>
    <div class="col-6">
        @livewire('search.insumos')
    </div>
    <div class="col-6">
        <div class="form-group">
            <input name="cantidad" autocomplete="off" class="form-control" placeholder="Cantidad utilizada..."/>
            <small class="form-text text-muted">Cantidad</small>
        </div>
    </div>
    <div class="col-12">
        <button type="submit" class="btn btn-warning rounded mt-3">Agregar Insumo</button>
    </div>
    <div class="col-12">
        <div class="card mt-2">
            <div class="card-body">
                <table id="table1" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Tratamiento</th>
                            <th>Insumo</th>
                            <th>Cantidad</th>
                            <th>Medida</th>
                            <th>Fecha</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($utilizados as $u)
                            <tr>
                                <td>{{ $u->descripcion }}</td>
                                <td>{{ $u->nombre }}</td>
                                <td>{{ $u->cantidad }}</td>
                                <td>{{ $u->medida }}</td>
                                <td>{{ $u->created_at }}</td>
                            </tr>
                        @endforeach

                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Tratamiento</th>
                            <th>Insumo</th>
                            <th>Cantidad</th>
                            <th>Medida</th>
                            <th>Fecha</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
</form>

@endsection
