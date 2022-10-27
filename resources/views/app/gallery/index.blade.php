@extends('layout.home')

@section('styles')
    <style>
        iframe{
            width: 100%;
            height: 100%;
        }
    </style>
@endsection
@section('content')

<div class="card">
    <div class="card-header">
        <h5>Galeri</h5>
    </div>
    <div class="card-body">
        <div class="row">
            @foreach ($gallery as $row)
            <div class="col-sm-4 col-md-4">
                {{-- <div class="card shadow border">
                    <div class="card-header">
                        <h5 style="font-weight: bold">{{ $row->title }}</h5>
                    </div>
                    <div class="card-body">
                        {!! $row->embed_youtube !!}
                    </div>
                </div> --}}
                <div class="card shadow border mb-4">
                    {{-- <img src="..." class="card-img-top" alt="..."> --}}
                    <span class="card-img-top">{!! $row->embed_youtube !!}</span>
                    <div class="card-body p-3">
                      <p class="card-text text-center">{{ $row->title }}</p>
                    </div>
                  </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection 