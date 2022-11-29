@extends('layout.page')

@section('styles')
    <style>
        iframe{
            width: 100%;
            height: 500px;
            border-radius: 12px
        }
    </style>
@endsection
@section('content')

{{-- <div class="card">

    <div class="card-header">
        <h4>{{ $post->sub_title }}</h4>
    </div>
    <div class="card-body">
        {!! $post->embed_youtube !!}
        <a href="/home/p/{{ $link }}" style="display: block">Kembali</a>
    </div>
</div> --}}
<h4>{{ $post->sub_title }}</h4>
{!! $post->embed_youtube !!}
<a href="{{ url()->previous() }}" style="display: block">Kembali</a>

@endsection

@section('title')
    {{ $judul }}
@endsection
