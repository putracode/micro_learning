@extends('layout.admin')

@section('content')
<div class="row" id="table-hover-row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title text-primary">Permohonan User</h4>
              </div>
              <div class="card-content">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Usename</th>
                                    <th>Role</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($user as $row)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    
                                    <td>{{ $row->name }}</td>
                                    <td>{{ $row->username }}</td>
                                    <td>{{ $row->role }}</td>
                                    <td>{{ $row->email }}</td>
                                    <td>{{ $row->password }}</td>
                                    <td>
                                        <a href="/admin/permohonan-user/{{ $row->id }}/tolak" class="btn btn-danger btn-sm mr-1 px-4 mb-1">Tolak</a>
                                        <a href="/admin/permohonan-user/{{ $row->id }}/terima"
                                        class="btn btn-success btn-sm">Terima</a>
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
