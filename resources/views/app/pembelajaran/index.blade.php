@extends('layout.page')

@section('content')


<div class="card">
    <div class="card-body">
        <h3 class="mb-1"></h3>
        <div class="row">
            @php
                $count = $posts->count()
            @endphp
            @foreach ($posts as $key => $post)

            <div class="col-md-12 py-3" style="text-align: start">
    
                    <div class="bungkus ms-4">

                        <h4>
                            {{ $post->title }}
                        </h4>
        
                        <p>
                            {{ $post->sub_title }}
                        </p>
                        <li style="list-style: none;" class="mb-5"><a href="/pembelajaran/{{ $link_materi }}/{{ $post->id }}"><i class='bx bxs-videos' ></i> Materi
                        Video</a> <span class="mx-3">-</span>  <a href="/pembelajaran/{{ $link_quiz }}/{{ $post->id }}"><i class='bx bx-file'></i>Quiz</a></li>
                    </div>
                    @if ($key + 1 != $count)
                        <hr>
                    @endif
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection

@section('title')
    {{ $judul }}
@endsection