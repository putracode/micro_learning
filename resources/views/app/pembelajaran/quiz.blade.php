@extends('layout.app')

@section('css')
    <style>
        iframe{
            width: 640px;
            height: 1300px;
        }
    </style>
@endsection
@section('content')
<center>

    <h1>{{ $post->sub_title }}</h1>

    

    {!! $post->embed_form !!}
    
    {{-- <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSfDVjjBjctQjbzwOusqQWa_OCsPKtpByY-G-cdPpwJQhlNcrg/viewform?embedded=true" width="640" height="1295" frameborder="0" marginheight="0" marginwidth="0" class="mt-5">Memuat…</iframe> --}}

    <a href="/home/p/{{ $link }}" style="display: block;">Kembali</a>
</center>
@endsection