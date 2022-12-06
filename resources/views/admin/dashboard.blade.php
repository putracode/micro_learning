@extends('layout.sneat')

@section('content')

<div class="row mb-5">
    <div class="col-md-12 grid-margin">
        <div class="row">
            <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                <h3 class="font-weight-bold">Welcome {{ auth()->user()->name }}</h3>
<h6 class="font-weight-normal mb-0">All systems are running smoothly!</h6>
</div>
</div>
</div>
</div>

<div class="row">
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card  text-white mb-3" style="background-color: #03C3EC;">
            <div class="card-body">
                <h5 class="card-title text-white">Daftar User<i class="menu-icon tf-icons bx bxs-user-account float-end"></i></h5>
                <p class="card-text">{{ $user }}</p>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="card  text-white mb-3" style="background-color: #03C3EC;">
            <div class="card-body">
                <h5 class="card-title text-white">Permohonan User<i class="menu-icon tf-icons bx bx-user-check float-end"></i></h5>
                <p class="card-text">{{ $permohonan }}</p>
            </div>
        </div>
    </div>
</div>
@endsection
