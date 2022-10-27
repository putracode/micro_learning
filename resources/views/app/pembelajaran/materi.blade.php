@extends('layout.home')

@section('styles')
    <style>
        iframe{
            width: 100%;
            height: 500px;
        }
    </style>
@endsection
@section('content')

<div class="card">

    <div class="card-header">
        <h4>{{ $post->sub_title }}</h4>
    </div>
    <div class="card-body">
        {!! $post->embed_youtube !!}
        <a href="/home/p/{{ $link }}" style="display: block">Kembali</a>
    </div>
</div>




@endsection
