@extends('Layout.app')

@section('title', 'Ficha')

@section('title2', 'Ficha')

@section('container')



    <h2>Ficha: {{ $ficha->paciente->nombre . ' ' . $ficha->paciente->apellido . ' ' . $ficha->paciente->doc }} </h2>

    <a href="{{ route('pacientes') }}" class="btn btn-primary rounded my-3"> Todos los pacientes </a>

    <div class="row">
        <div class="col-12">
            <h4>Tratamientos</h4>
        </div>
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr class="table-dark">
                            <th>Tratamiento</th>
                            <th>Finalizado</th>
                            <th>Fecha</th>
                            <th>Abonado</th>
                            <th>Valor</th>
                            <th>Saldo</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tratamientos as $t)
                            <tr>
                                <td>{{ $t->descripcion }}</td>
                                <td>
                                    @if ($t->finalizado)
                                        <span class="btn btn-info btn-sm rounded">Sí</span>
                                    @else
                                        <span class="btn btn-success btn-sm rounded">No</span>
                                    @endif
                                </td>
                                <td>{{ $t->created_at }}</td>
                                <td>{{ number_format($t->abono_valor, 0, '.', ',') }}</td>
                                <td>{{ number_format($t->valor_total, 0, '.', ',') }}</td>
                                <td> {{ number_format($t->valor_total - $t->abono_valor, 0, '.', ',') }} </td>
                                <td>
                                    <a class="btn btn-primary rounded"
                                        href="{{ route('utilizado.tratamiento.proceder', $t->id) }}">Ver</a>
                                    <a class="btn btn-success rounded" href="{{ route('abono', $t->id) }}">Abonar</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
