@extends('Layout.app')


@section('title', 'Tratamientos')

@section('title2', 'Tratamientos')

@section('container')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title"></h3>
                <a href="{{ route('tratamientos.add') }}" class="btn btn-primary btn-lg ">Agregar</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="table1" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Codigo</th>
                            <th>Servicio</th>
                            <th>Paciente</th>
                            <th>Funcionario</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tratamientos as $s)
                        <tr>
                            <td>{{ $s->id }}</td>
                            <td>{{ $s->servicio->descripcion }}</td>
                            <td>{{ $s->paciente->nombre . ' '.$s->paciente->apellido }}</td>
                            <td>{{ $s->empleado->nombre . ' '.$s->empleado->apellido }}</td>
                            <td>
                                <a href="{{ route('tratamientos.proceder', $s->id ) }}" class="btn btn-primary">Proceder</a>
                                <a href="#{{ $s->id }}" class="btn btn-danger">Finalizar</a>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Codigo</th>
                            <th>Servicio</th>
                            <th>Paciente</th>
                            <th>Funcionario</th>
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

@section('scripts')
    <script src="{{ URL('assets/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ URL('assets/js/dataTables.bootstrap4.min.js') }}"></script>


    <script src="{{ URL('assets/js/dataTables.buttons.min.js') }}"></script>

    <script src="{{ URL('assets/js/buttons.bootstrap4.min.js') }}"></script>

    <script>
        $(function() {
            /* $("#example1").DataTable({
              "responsive": true, "lengthChange": false, "autoWidth": false,
              "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)'); */
            $('#table1').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>

@endsection

