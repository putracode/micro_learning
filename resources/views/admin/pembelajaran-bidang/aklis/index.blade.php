@extends('layout.sneat')

@section('title')
Aktivasi Listrik
@endsection

@section('styles')
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<link rel="stylesheet" href="/adminlte/plugins/fontawesome-free/css/all.min.css">
<link rel="stylesheet" href="/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="/adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="/adminlte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
@endsection

@section('content')
<div class="card p-4">
    <div class=" d-flex justify-content-between align-items-center pb-3">
        <h5 class="p-0 m-0">Pembelajaran Aklis</h5>
        <a href="/admin/p/aklis/create" class="btn-sm btn-primary float-end px-4 ">Create</a>
    </div>

    <div class="table-responsive text-nowrap">
        <table class="table table-hover table-striped py-2" id="example1">
            <thead>
                <tr class="text-nowrap">
                    <th>ID</th>
                    <th>Title</th>
                    <th>Sub Title</th>
                    <th>Materi</th>
                    <th>Embed Form</th>
                    <th>Embed Youtube</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @foreach ($pembelajaran as $row)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $row->title }}</td>
                    <td>{{ $row->sub_title }}</td>
                    <td>{{ $row->materi }}</td>
                    <td>{{ $row->embed_form }}</td>
                    <td>{{ $row->embed_youtube }}</td>
                    <td>
                        <a href="/admin/p/aklis/{{ $row->id }}/edit">
                            <button type="button" class="btn btn-icon  btn-warning ">
                                <svg xmlns="http://www.w3.org/2000/svg" role="img" width="1em" height="1em"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M5 20h14a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2zm-1-5L14 5l3 3L7 18H4v-3zM15 4l2-2l3 3l-2.001 2.001L15 4z"
                                        fill="#ffffff" fill-rule="evenodd" />
                                </svg>
                            </button>
                        </a>
                        <a href="#" onclick="buttonConfirm({{ $row->id }})" data-name="p/aklis" id="confirmbutton">
                            <button type="button" class="btn btn-icon btn-danger">
                                <svg xmlns="http://www.w3.org/2000/svg" role="img" width="1em" height="1em"
                                    viewBox="0 0 24 24">
                                    <g fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="M3 6h18" />
                                        <path
                                            d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2" />
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
</div>
@endsection

@section('script')
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
    $(function () {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["excel", "pdf", "colvis"]
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
