@extends('layout.admin')


@section('styles')
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- Font Awesome -->
<link rel="stylesheet" href="/adminlte/plugins/fontawesome-free/css/all.min.css">
<!-- DataTables -->
<link rel="stylesheet" href="/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="/adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="/adminlte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="/adminlte/dist/css/adminlte.min.css">
@endsection

@section('content')

<div class="row pt-2">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title fw-bold">Bidang Pemeliharaan</h3>
                <a href="/admin/p/pemeliharaan/create" class="btn btn-primary btn-sm float-right px-4">Create</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Sub Title</th>
                            <th>Nama Bidang</th>
                            <th>Embed Form</th>
                            <th>Embed Youtube</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($post as $row)
                        <tr>
                            <td>{{ $loop->iteration }}</td>

                            <td>{{ $row->title }}</td>
                            <td>{{ $row->sub_title }}</td>
                            <td>{{ $row->bidang }}</td>

                            <td>{{ $row->embed_form }}</td>
                            <td>{{ $row->embed_youtube }}</td>
                            <td>
                                <a href="/admin/p/pemeliharaan/{{ $row->id }}/edit"
                                    class="btn btn-warning btn-sm">Edit</a>
                                <a href="/admin/p/pemeliharaan/{{ $row->id }}" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.col -->
</div>
@endsection

@section('script')

<!-- DataTables  & Plugins -->
<script src="/adminlte/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="/adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="/adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="/adminlte/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="/adminlte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="/adminlte/plugins/jszip/jszip.min.js"></script>
<script src="/adminlte/plugins/pdfmake/pdfmake.min.js"></script>
<script src="/adminlte/plugins/pdfmake/vfs_fonts.js"></script>
<script src="/adminlte/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="/adminlte/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="/adminlte/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<!-- Page specific script -->
<script>
    $(function () {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });

</script>
@endsection

{{-- @extends('layout.admin')

@section('content')
<div class="row" id="table-hover-row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title text-primary">Bidang Pemeliharaan</h4>
                <a href="/admin/p/pemeliharaan/create" class="btn btn-primary btn-sm float-right mr-5 px-4">Create</a>
              </div>
              <div class="card-content">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Sub Title</th>
                                    <th>Nama Bidang</th>
                                    <th>Embed Form</th>
                                    <th>Embed Youtube</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($post as $row)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    
                                    <td>{{ $row->title }}</td>
                                    <td>{{ $row->sub_title }}</td>
                                    <td>{{ $row->bidang }}</td>
                                    <td>{{ $row->embed_form }}</td>
                                    <td>{{ $row->embed_youtube }}</td>
                                    <td>
                                        <a href="/admin/p/pemeliharaan/{{ $row->id }}/edit" class="btn btn-warning btn-sm mr-1 px-4 mb-1">Edit</a>
                                        <a href="/admin/p/pemeliharaan/{{ $row->id }}"
                                        class="btn btn-danger btn-sm">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
