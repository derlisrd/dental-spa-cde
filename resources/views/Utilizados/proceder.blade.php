@extends('Layout.app')


@section('title', 'Insumos')

@section('title2', 'Insumos')

@section('container')

    <form action="{{ route('utilizado.tratamiento.procesar') }}" method="post">
        @csrf
        <input type="hidden" name="tratamiento_id" value="{{ $id }}" />
        <div class="row">
            <div class="col-6">
                <h3>Insumos utilizados</h3>
            </div>
            <div class="col-6"><a href="{{ route('ficha', $paciente->id) }}"><strong>Paciente:
                        {{ $paciente->nombre . ' ' . $paciente->apellido . ' ' . $paciente->doc }} </strong></a></div>
            <div class="col-6">
                @livewire('search.insumos')
            </div>
            <div class="col-6">
                <div class="form-group">
                    <input name="cantidad" autocomplete="off" class="form-control" placeholder="Cantidad utilizada..." />
                    <small class="form-text text-muted">Cantidad</small>
                </div>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-warning rounded mt-3">Agregar Insumo</button>
            </div>
            <div class="col-12">
                <div class="table-responsive mt-4">
                    <table class="table table-hover">
                        <thead>
                            <tr class="table-dark">
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
                    </table>
                </div>

            </div>
        </div>
    </form>

@endsection
