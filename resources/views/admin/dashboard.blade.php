@extends('layout.sneat')

@section('content')
<div class="row p-3">
    <div class="col-md-12 grid-margin">
        <div class="row">
            <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                <h3 class="font-weight-bold">Welcome {{ auth()->user()->name }}</h3>
<h6 class="font-weight-normal mb-0">All systems are running smoothly!</h6>
</div>
</div>
</div>
</div>
{{-- <div class="row">
    <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="card bg-primary text-white mb-3">
            <div class="card-body">
                <h5 class="card-title text-white">Primary card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up.</p>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="card bg-primary text-white mb-3">
            <div class="card-body">
                <h5 class="card-title text-white">Primary card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up.</p>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="card bg-primary text-white mb-3">
            <div class="card-body">
                <h5 class="card-title text-white">Primary card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up.</p>
            </div>
        </div>
    </div>
</div> --}}
@endsection
