@extends('Layout.app')


@section('title', 'Insumos')

@section('title2', 'Insumos')

@section('container')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"></h3>
                    <a href="{{ route('insumos.add') }}" class="btn btn-primary btn-lg ">Agregar</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="table1" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Cod</th>
                                <th>Nombre</th>
                                <th>Cantidad</th>
                                <th>Medida</th>
                                <th>Valor</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($insumos as $i)
                                <tr>
                                    <td>{{ $i->codigo }}</td>
                                    <td>{{ $i->nombre }}</td>
                                    <td>{{ $i->cantidad }}</td>
                                    <td>{{ $i->medida }}</td>
                                    <td>{{ $i->valor }}</td>
                                    <td><a href="{{ route('insumos.edit',$i->id) }}" class="btn btn-primary">Editar</a></td>
                                </tr>
                            @endforeach

                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Cod</th>
                                <th>Nombre</th>
                                <th>Cantidad</th>
                                <th>Medida</th>
                                <th>Valor</th>
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
                "responsive": true
            });
        });
    </script>

@endsection
