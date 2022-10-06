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
                <h3 class="card-title fw-bold">Bidang SPAP</h3>
                <a href="/admin/p/spap/create" class="btn btn-primary btn-sm float-right px-4">Create</a>
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
                                <a href="/admin/p/spap/{{ $row->id }}/edit">
                                    <button type="button" class="btn btn-icon  btn-warning ">
                                        <svg xmlns="http://www.w3.org/2000/svg" role="img" width="1em" height="1em" viewBox="0 0 24 24">
                                            <path d="M5 20h14a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2zm-1-5L14 5l3 3L7 18H4v-3zM15 4l2-2l3 3l-2.001 2.001L15 4z" fill="#ffffff" fill-rule="evenodd" />
                                        </svg>
                                    </button>
                                </a>
                                <a href="#" onclick="buttonConfirm({{ $row->id }})" data-name="p/spap" id="confirmbutton">
                                    <button type="button" class="btn btn-icon btn-danger" >
                                    <svg xmlns="http://www.w3.org/2000/svg" role="img" width="1em" height="1em" viewBox="0 0 24 24">
                                        <g fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M3 6h18" />
                                            <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2" />
                                        </g>
                                    </svg>
                                    </button>
                                </a>
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
                <h4 class="card-title text-primary">Bidang SPAP</h4>
                <a href="/admin/p/spap/create" class="btn btn-primary btn-sm float-right mr-5 px-4">Create</a>
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
                                        <a href="/admin/p/spap/{{ $row->id }}/edit" class="btn btn-warning btn-sm mr-1 px-4 mb-1">Edit</a>
                                        <a href="/admin/p/spap/{{ $row->id }}"
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
