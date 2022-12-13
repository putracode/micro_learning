@extends('layout.page')

@section('styles')
<style>
    /* iframe {
        width: 100%;
        height: 100%;
    } */
    .img-galeri{
        width: 100%;
        height: 150px;
        border: 1px solid
    }
    .img-gal{
        width: 0;
        height: 0;
    }
</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.0/css/lightgallery.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.0/css/lg-fullscreen.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.0/css/lg-video.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.0/css/lg-thumbnail.min.css">
<link rel="stylesheet" href="/css/style.css">
@endsection



@section('content')

<style>
    .btn-primary{
        background-color: #3C4C6A;
    }
</style>
<div class="row justify-content-end mb-3">
    <div class="col-md-6">
        <form action="/galeri" method="GET">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search.." name="search" value="{{ request('search') }}">
                <button class="btn btn-primary" type="submit">Search</button>
            </div>
        </form>
    </div>
</div>
@if ($gallery->count())    
    <div class="row">
        @foreach ($gallery as $row)
        <div class="col-lg-3 col-md-4 col-sm-6 mb-2">
            <div class="gambar" id="gambar"   >
                <div class="lightbox" data-src="{{ asset('storage/' . $row->thumbnail) }}">
                    <a href>
                        <figure>
                            <img src="{{ asset('storage/' . $row->thumbnail) }}" alt="" class=" rounded img-galeri" style="object-fit: cover">
                            <figcaption class="text-center">{{ $row->title }}</figcaption>
                        </figure>
                    </a>
                </div>
                @if ($row->foto1)
                    <div class="lightbox d-none" data-src="{{ asset('storage/' . $row->foto1) }}">
                        <a href>
                            <img src="{{ asset('storage/' . $row->foto1) }}" alt="" class=" rounded img-gal">
                        </a>
                    </div>
                @endif
                @if ($row->foto2)
                    <div class="lightbox d-none" data-src="{{ asset('storage/' . $row->foto2) }}">
                        <a href>
                            <img src="{{ asset('storage/' . $row->foto2) }}" alt="" class=" rounded img-gal">
                        </a>
                    </div>
                @endif
                @if ($row->foto3)
                    <div class="lightbox d-none" data-src="{{ asset('storage/' . $row->foto3) }}">
                        <a href>
                            <img src="{{ asset('storage/' . $row->foto3) }}" alt="" class=" rounded img-gal">
                        </a>
                    </div>
                @endif
                @if ($row->foto4)
                    <div class="lightbox d-none" data-src="{{ asset('storage/' . $row->foto4) }}">
                        <a href>
                            <img src="{{ asset('storage/' . $row->foto4) }}" alt="" class=" rounded img-gal">
                        </a>
                    </div>
                @endif
                @if ($row->foto5)
                    <div class="lightbox d-none" data-src="{{ asset('storage/' . $row->foto5) }}">
                        <a href>
                            <img src="{{ asset('storage/' . $row->foto5) }}" alt="" class=" rounded img-gal">
                        </a>
                    </div>
                @endif
            
                @if ($row->embed_youtube1)
                    <div class="lightbox d-none" data-src="{{ $row->embed_youtube1 }}">
                        <a href>
                            
                        </a>
                    </div>
                @endif
                @if ($row->embed_youtube2)
                    <div class="lightbox d-none" data-src="{{ $row->embed_youtube2 }}">
                        <a href>
                            
                        </a>
                    </div>
                @endif
            </div>
        </div>
        {{-- {!! $gallery->render() !!} --}}
        @endforeach
        {{ $gallery->links() }}
    </div>
@else
<p class="fs-4 text-center">No post found..</p>
@endif

@endsection
@section('title')
    Galeri
@endsection
@section('script')

<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.0/lightgallery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.0/plugins/fullscreen/lg-fullscreen.min.js">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.0/plugins/video/lg-video.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.0/plugins/thumbnail/lg-thumbnail.min.js"></script>
<script>
    let gambar = document.querySelectorAll('.gambar')
    for (let i = 0; i <= gambar.length; i++) {

        lightGallery(gambar[i], {
            plugins: [lgFullscreen, lgVideo,lgThumbnail],
            speed: 400,
            animateThumb: false,
            zoomFromOrigin: false,
            allowMediaOverlap: true,
            toggleThumb: true,
            thumbnail: true,
        })
    }

</script>

@endsection

