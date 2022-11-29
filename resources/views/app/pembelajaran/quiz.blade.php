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

    <h4>Quiz {{ $post->sub_title }}</h4>
    {!! $post->embed_form !!}
    {{-- <a href="/home/p/{{ $link }}" style="display: block;"><button class="btn btn-danger btn-sm"><span style="font-size: 12px">Kembali</span></button></a> --}}
    <a href="{{ url()->previous() }}" style="display: block;" class="m-0 p-0">Kembali</a>
</center>
{{-- <div class="card">
    <center>

        <div class="card-header">
            <h4>{{ $post->sub_title }}</h4>
        </div>
        <div class="card-body">
            {!! $post->embed_form !!}
            <a href="/home/p/{{ $link }}" style="display: block;">Kembali</a>
        </div>
    </center>
</div> --}}


    

    
    {{-- <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSfDVjjBjctQjbzwOusqQWa_OCsPKtpByY-G-cdPpwJQhlNcrg/viewform?embedded=true" width="640" height="1295" frameborder="0" marginheight="0" marginwidth="0" class="mt-5">Memuat…</iframe> --}}

@endsection

@section('title')
    {{ $judul }}
@endsection