@extends('layout.page')

@section('content')

@if ($materi->count())    
    <div class="card">
        <div class="card-body">
            <h3 class="mb-1"></h3>
            <div class="row">
                @php
                    $count = $materi->count()
                @endphp
                @foreach ($materi as $key => $row)

                <div class="col-md-12 py-3" style="text-align: start">
        
                        <div class="bungkus ms-4">

                            <h4>
                                {{ $row->title }}
                            </h4>
            
                            <p>
                                {{ $row->sub_title }}
                            </p>
                            <li style="list-style: none;" class="mb-5"><a href="/pembelajaran/{{ $row->pembelajaran->slug }}/video/{{ $row->slug }}"><i class='bx bxs-videos' ></i> Materi
                            Video</a> <span class="mx-3">-</span>  <a href="/pembelajaran/{{ $row->pembelajaran->slug }}/quiz/{{ $row->slug }}"><i class='bx bx-file'></i>Quiz</a></li>
                        </div>
                        @if ($key + 1 != $count)
                            <hr>
                        @endif
                </div>
                @endforeach
            </div>
        </div>
    </div>
@else
    Materi Sedang Dibuat..
@endif

@endsection

@section('title')
    {{ $judul->materi }}
@endsection