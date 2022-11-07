@extends('layout.home')

@section('content')

<div class="card" style="background-image: url('/img/card.png'); background-size: cover; background-repeat: no-repeat; background-position: center;">
    <div class="card-header">
        <h3 class="mb-1">Materi {{ $judul }}</h3>
    </div>
    <div class="card-body">

            <div class="row">
                @foreach ($posts as $post)
                <hr class="mb-5">
                <div class="col-md-12" style="text-align: start">
        

                        <h4>
                            {{ $post->title }}
                        </h4>
        
                        <h5>
                            {{ $post->sub_title }}
                        </h5>
                        <li style="list-style: none;" class="mb-5"><a href="/home/p/{{ $link_materi }}/{{ $post->id }}"><i class='bx bxs-videos' ></i> Materi
                        Video</a> <span class="mx-3">-</span>  <a href="/home/p/{{ $link_quiz }}/{{ $post->id }}"><i class='bx bx-file'></i>Quiz</a></li>
                </div>
                
                @endforeach
            </div>

    </div>
</div>








@endsection
