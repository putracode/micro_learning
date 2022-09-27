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

<div class="row">
        @foreach ($gallery as $row)
        <div class="col-md-4 mb-5">
            
            {{ $row->title }}
            <br>
            {!! $row->embed_youtube !!}
        </div>
        @endforeach
    </div>
@endsection 