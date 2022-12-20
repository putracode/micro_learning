@extends('layout.page')

@section('styles')
    <style>
        iframe{
            box-shadow: 5px, 10px, #000000;
            width: 100%;
            height: 1300px;
        }
    </style>
@endsection
@section('content')
<center>

    <h4>Quiz {{ $materi->sub_title }}</h4>
    {!! $materi->quiz !!}
    {{-- <a href="/home/p/{{ $link }}" style="display: block;"><button class="btn btn-danger btn-sm"><span style="font-size: 12px">Kembali</span></button></a> --}}
    <a href="{{ url()->previous() }}" style="display: block;" class="m-0 p-0">Kembali</a>
</center>

@endsection

@section('title')
    {{ $judul->materi }}
@endsection