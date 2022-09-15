@extends('layout.admin')

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
                                        <a href="/admin/user/{{ $row->id }}"
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
