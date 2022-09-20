{{-- @extends('layout.admin')

@section('content')
<div class="row" id="table-hover-row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title text-primary">User</h4>
                <a href="/admin/user/create" class="btn btn-primary btn-sm float-right mr-5 px-4">Create</a>
              </div>
              <div class="card-content">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nama Lengkap</th>
                                    <th>Role</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                    <th>Pengguna</th>
                                    <th>Perusahaan</th>
                                    <th>Bidang</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($user as $row)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>

<td>{{ $row->name }}</td>
<td>{{ $row->role }}</td>
<td>{{ $row->email }}</td>
<td>{{ $row->password }}</td>
<td>{{ $row->pengguna }}</td>
<td>{{ $row->perusahaan }}</td>
<td>{{ $row->bidang }}</td>
<td>
    <a href="/admin/user/{{ $row->id }}/edit" class="btn btn-warning btn-sm mr-1 px-4 mb-1">Edit</a>
    <a href="/admin/user/{{ $row->id }}" class="btn btn-danger btn-sm">Delete</a>
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
@endsection
--}}


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
                <h3 class="card-title fw-bold">Data User</h3>
                <a href="/admin/user/create" class="btn btn-primary btn-sm float-right px-4">Create</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama Lengkap</th>
                            <th>Role</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Pengguna</th>
                            <th>Perusahaan</th>
                            <th>Bidang</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($user as $row)
                        <tr>
                            <td>{{ $loop->iteration }}</td>

                            <td>{{ $row->name }}</td>
                            <td>{{ $row->role }}</td>
                            <td>{{ $row->email }}</td>
                            <td>{{ $row->password }}</td>
                            <td>{{ $row->pengguna }}</td>
                            <td>{{ $row->perusahaan }}</td>
                            <td>{{ $row->bidang }}</td>
                            <td>
                                <a href="/admin/user/{{ $row->id }}/edit" class="btn btn-warning btn-sm ">Edit</a>
                                <a href="/admin/user/{{ $row->id }}" class="btn btn-danger btn-sm">Delete</a>
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
<!-- jQuery -->
<script src="/adminlte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
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
<!-- AdminLTE App -->
<script src="/adminlte/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/adminlte/dist/js/demo.js"></script>
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

{{-- @section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Responsive Hover Table</h3>

                <div class="card-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                        <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                        <div class="input-group-append">
                            <button type="submit" class="btn btn-default">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama Lengkap</th>
                            <th>Role</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Pengguna</th>
                            <th>Perusahaan</th>
                            <th>Bidang</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($user as $row)
                        <tr>
                            <td>{{ $loop->iteration }}</td>

<td>{{ $row->name }}</td>
<td>{{ $row->role }}</td>
<td>{{ $row->email }}</td>
<td>{{ $row->password }}</td>
<td>{{ $row->pengguna }}</td>
<td>{{ $row->perusahaan }}</td>
<td>{{ $row->bidang }}</td>
<td>
    <a href="/admin/user/{{ $row->id }}/edit" class="btn btn-warning btn-sm ">Edit</a>
    <a href="/admin/user/{{ $row->id }}" class="btn btn-danger btn-sm">Delete</a>
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
</div>
@endsection --}}
