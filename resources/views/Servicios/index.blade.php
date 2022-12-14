@extends('Layout.app')


@section('title', 'Servicios')

@section('title2', 'Servicios')

@section('container')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"></h3>
                    <a href="{{ route('servicios.add') }}" class="btn btn-primary btn-lg ">Agregar</a>
                </div>
                <!-- /.card-header -->
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
