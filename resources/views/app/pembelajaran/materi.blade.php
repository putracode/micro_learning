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

<h4>{{ $materi->sub_title }}</h4>
{!! $materi->video !!}
<a href="{{ url()->previous() }}" style="display: block">Kembali</a>

@endsection

@section('title')
    {{ $judul->materi }}
@endsection
