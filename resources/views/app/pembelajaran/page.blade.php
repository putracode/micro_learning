@extends('layout.page')

@section('content')

<style>
    .image-pembelajaran{ height: 199px;}
    .rounded-top{
        object-fit: cover
    }
    .btn-primary{
        background-color: #3C4C6A;
    }
</style>

@can('internal')    

    
        <div class="row mb-5">
            <h3 class="card-title mb-3" >Materi Bidang</h3>
            @if ($materib->count())
                @foreach ($materib as $row)    
                    <div class="col-lg-4 col-md-6 col-sm-6 mb-3" >
                        <div class="card rounded">
                            <img src="{{ asset('storage/' . $row->thumbnail) }}" class="card-img-top rounded-top image-pembelajaran" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $row->materi }}</h5>
                                <p class="card-text" style="font-size: 13px;">{{ $row->deskripsi }}</p>
                                <hr>
                                <a href="/pembelajaran/{{ $row->slug }}" class="btn btn-primary" style="width: 100%;">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <p class="mb-5">Materi Pembelajaran sedang dibuat..</p>
            @endif
        </div>


@endcan


<div class="row">
    <h3 class="card-title mb-3" >Materi Umum</h3>
    @if ($materiu->count())
        @foreach ($materiu as $row)    
        <div class="col-lg-4 col-md-6 col-sm-6 mb-3" >
            <div class="card rounded">
                <img src="{{ asset('storage/' . $row->thumbnail) }}" class="card-img-top rounded-top image-pembelajaran" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $row->materi }}</h5>
                    <p class="card-text" style="font-size: 13px;">{{ $row->deskripsi }}</p>
                    <hr>
                    <a href="/pembelajaran/{{ $row->slug }}" class="btn btn-primary" style="width: 100%;">Selengkapnya</a>
                </div>
            </div>
        </div>
        @endforeach
    @else
    <p class="mb-5">Materi Pembelajaran sedang dibuat..</p>
    @endif
</div>
@endsection

@section('title')
    Materi Pembelajaran
@endsection