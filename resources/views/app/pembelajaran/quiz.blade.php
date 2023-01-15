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
    <a href="{{ url()->previous() }}" style="display: block;" class="m-0 p-0"><i class='bx bx-chevron-left'></i>Kembali</a>
    {!! $materi->quiz !!}
</center>

@endsection

@section('title')
    {{ $judul->materi }}
@endsection