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

<div class="judul mb-2">

    <h4 style="display: inline">{{ $materi->sub_title }}</h4>
    <a href="{{ url()->previous() }}" style="display: inline; float: right;"><i class='bx bx-chevron-left'></i>Kembali</a>
</div>

{!! $materi->video !!}


@endsection

@section('title')
    {{ $judul->materi }}
@endsection
