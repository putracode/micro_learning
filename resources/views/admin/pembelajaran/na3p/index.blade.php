@extends('layout.admin')

@section('content')
<div class="row" id="table-hover-row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title text-primary">Bidang NA3P</h4>
                <a href="/admin/p/na3p/create" class="btn btn-primary btn-sm float-right mr-5 px-4">Create</a>
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
                                    {{-- <th>Slug</th> --}}
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
                                    {{-- <td>{{ $row->slug }}</td> --}}
                                    <td>{{ $row->embed_form }}</td>
                                    <td>{{ $row->embed_youtube }}</td>
                                    <td>
                                        <a href="/admin/p/na3p/{{ $row->id }}/edit" class="btn btn-warning btn-sm mr-1 px-4 mb-1">Edit</a>
                                        <a href="/admin/p/na3p/{{ $row->id }}"
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
@endsection
