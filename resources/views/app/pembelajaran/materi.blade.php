@extends('layout.app')

@section('content')
<center>

    <h1>{{ $post->sub_title }}</h1>

    {!! $post->embed_youtube !!}

    <a href="/home/p/{{ $link }}" style="display: block">Kembali</a>
</center>
@endsection