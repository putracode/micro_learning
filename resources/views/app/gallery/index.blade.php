@extends('layout.app')

@section('css')
    <style>
        iframe{
            width: 100%;
            height: 100%;
        }
    </style>
@endsection
@section('content')

<div class="container">
    <h1 class="text-center mb-5">Gallery</h1>
    <div class="row">
            @foreach ($gallery as $row)
            <div class="col-md-4 mb-5">
                
                {{ $row->title }}
                <br>
                {!! $row->embed_youtube !!}
            </div>
            @endforeach
        </div>
</div>
@endsection 