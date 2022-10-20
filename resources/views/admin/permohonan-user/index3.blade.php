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
                <h3 class="card-title fw-bold">Permohonan User</h3>
                <a href="/admin/user/create" class="btn btn-primary btn-sm float-right px-4">Create</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama Lengkap</th>
                            {{-- <th>Role</th> --}}
                            <th>Email</th>
                            {{-- <th>Password</th> --}}
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
                            {{-- <td>{{ $row->role }}</td> --}}
                            <td>{{ $row->email }}</td>
                            {{-- <td>{{ $row->password }}</td> --}}
                            <td>{{ $row->pengguna }}</td>
                            <td>{{ $row->perusahaan }}</td>
                            <td>{{ $row->bidang }}</td>
                            <td class="d-flex">
                                {{-- <a href="#"
                                class="btn btn-danger btn-sm mr-1" onclick="buttonReject({{ $row->id }})">Tolak</a>
                                --}}
                                <form action="/admin/permohonan-user/{{ $row->id }}/tolak" method="POST" id="formtolak">
                                    @csrf
                                    <input type="text" hidden id="inputtolak" name="pesan" value="">
                                    <button class="btn btn-danger btn-sm mr-1 buttontolak" id="buttontolak"
                                        data-name="{{ $row->id }}">Tolak</button>
                                </form>
                                <a href="/admin/permohonan-user/{{ $row->id }}/terima"
                                    class="btn btn-success btn-sm">Terima</a>

                            </td>
                            {{-- /admin/permohonan-user/{{ $row->id }}/tolak --}}
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
<script>
    // const buttontolak = document.querySelectorAll('.buttontolak')
    // for( let i = 0; i < buttontolak.length; i++){
    //     $(buttontolak[i]).on('click',function(e){

    //         e.preventDefault()
    //         var form = $('#formtolak');
    //         swal("Pesan Penolakan", {
    //         content: "input",

    //         })
    //         .then((value) => {
    //             console.log(value)
    //             $('#inputtolak').val(value);    
    //             form.submit()
    //         }); 
    //     })
    // }
    const buttontolak = document.querySelectorAll('.buttontolak')
    $('#buttontolak').on('click', function (e) {
        e.preventDefault()
        var form = $('#formtolak');
        swal("Pesan Penolakan", {
                content: "input",
            })
            .then((value) => {
                console.lo g(value)
                $('#inputtolak').val(value);
                form.submit()
            });
    })

</script>
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
