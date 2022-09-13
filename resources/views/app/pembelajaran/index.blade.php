@extends('layout.app')

@section('content')

<center class="ml-5">

    
    <h1 class="mb-5">Materi {{ $judul }}</h1>
  
    <div class="container d-flex flex-wrap justify-content-center">
        <div class="row">
            @foreach ($posts as $post)
            <div class="col-md-12" style="text-align: start">

                <ul class="justify-content-center">
                    {{ $post->title }}
                    <br>
                    {{ $post->sub_title }}
                    <li style="list-style: none;"><a href="/home/p/{{ $link_materi }}/{{ $post->id }}">Materi Video</a> - <a
                            href="/home/p/{{ $link_quiz }}/{{ $post->id }}">Quiz</a></li>
                </ul>
            </div>
    
            @endforeach
            </div>
        </div>
</center>



@endsection
