@extends('layout.page')

@section('styles')
<style>
    iframe {
        width: 100%;
        height: 100%;
    }
    .img-galeri{
        width: 100%;
        height: 125px;
    }
</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.0/css/lightgallery.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.0/css/lg-rotate.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.0/css/lg-zoom.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.0/css/lg-fullscreen.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.0/css/lg-video.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.0/css/lg-thumbnail.min.css">

@endsection



@section('content')

{{-- <div class="row">
    @foreach ($gallery as $row)
        <div class="col-md-3">
            <div class="gambar me-2" id="gambar"   >
                <div class="lightbox" data-src="{{ asset('storage/' . $row->thumbnail) }}">
                    <a href>
                        <figure>
                            <img src="{{ asset('storage/' . $row->thumbnail) }}" alt="" class=" rounded img-galeri">
                            <figcaption class="text-center">{{ $row->title }}</figcaption>
                        </figure>
                    </a>
                </div>
                @if ($row->foto1)
                    <div class="lightbox d-none" data-src="{{ asset('storage/' . $row->foto1) }}">
                        <a href>
                            <img src="{{ asset('storage/' . $row->foto1) }}" alt="" class=" rounded img-galeri">
                        </a>
                    </div>
                @endif
                @if ($row->foto2)
                    <div class="lightbox d-none" data-src="{{ asset('storage/' . $row->foto2) }}">
                        <a href>
                            <img src="{{ asset('storage/' . $row->foto2) }}" alt="" class=" rounded img-galeri">
                        </a>
                    </div>
                @endif
                @if ($row->foto3)
                    <div class="lightbox d-none" data-src="{{ asset('storage/' . $row->foto3) }}">
                        <a href>
                            <img src="{{ asset('storage/' . $row->foto3) }}" alt="" class=" rounded img-galeri">
                        </a>
                    </div>
                @endif
                @if ($row->foto4)
                    <div class="lightbox d-none" data-src="{{ asset('storage/' . $row->foto4) }}">
                        <a href>
                            <img src="{{ asset('storage/' . $row->foto4) }}" alt="" class=" rounded img-galeri">
                        </a>
                    </div>
                @endif
                @if ($row->foto5)
                    <div class="lightbox d-none" data-src="{{ asset('storage/' . $row->foto5) }}">
                        <a href>
                            <img src="{{ asset('storage/' . $row->foto5) }}" alt="" class=" rounded img-galeri">
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
    @endforeach
</div> --}}

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
                        <img src="{{ asset('storage/' . $row->foto1) }}" alt="" class=" rounded img-galeri">
                    </a>
                </div>
            @endif
            @if ($row->foto2)
                <div class="lightbox d-none" data-src="{{ asset('storage/' . $row->foto2) }}">
                    <a href>
                        <img src="{{ asset('storage/' . $row->foto2) }}" alt="" class=" rounded img-galeri">
                    </a>
                </div>
            @endif
            @if ($row->foto3)
                <div class="lightbox d-none" data-src="{{ asset('storage/' . $row->foto3) }}">
                    <a href>
                        <img src="{{ asset('storage/' . $row->foto3) }}" alt="" class=" rounded img-galeri">
                    </a>
                </div>
            @endif
            @if ($row->foto4)
                <div class="lightbox d-none" data-src="{{ asset('storage/' . $row->foto4) }}">
                    <a href>
                        <img src="{{ asset('storage/' . $row->foto4) }}" alt="" class=" rounded img-galeri">
                    </a>
                </div>
            @endif
            @if ($row->foto5)
                <div class="lightbox d-none" data-src="{{ asset('storage/' . $row->foto5) }}">
                    <a href>
                        <img src="{{ asset('storage/' . $row->foto5) }}" alt="" class=" rounded img-galeri">
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
    @endforeach
</div>
@endsection
@section('title')
    Galeri
@endsection
@section('script')

<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.0/lightgallery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.0/plugins/rotate/lg-rotate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.0/plugins/zoom/lg-zoom.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.0/plugins/fullscreen/lg-fullscreen.min.js">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.0/plugins/video/lg-video.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.0/plugins/thumbnail/lg-thumbnail.min.js"></script>
<script>
    let gambar = document.querySelectorAll('.gambar')
    for (let i = 0; i <= gambar.length; i++) {

        lightGallery(gambar[i], {
            plugins: [lgRotate, lgZoom, lgFullscreen, lgVideo,lgThumbnail],
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

