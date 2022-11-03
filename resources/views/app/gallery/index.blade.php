@extends('layout.home')

@section('styles')
<style>
    iframe {
        width: 100%;
        height: 100%;
    }

</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.0/css/lightgallery.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.0/css/lg-rotate.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.0/css/lg-zoom.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.0/css/lg-fullscreen.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.0/css/lg-video.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.0/css/lg-thumbnail.min.css">

@endsection

<style>
    .img-galeri{
        width: 275px;
        height: 150px;
    }
</style>

@section('content')

{{-- <div class="card">
    <div class="card-header">
        <h5>Galeri</h5>
    </div>
    <div class="card-body d-flex">
        @foreach ($gallery as $row)
        <div class="row gambar" id="gallery">
            @if ($row->foto1)
            <div class="col-md-3" data-src="{{ asset('storage/' . $row->foto1) }}">
                <a href>
                    <figure>
                        <img src="{{ asset('storage/' . $row->foto1) }}" alt="" class=" rounded>
                        <figcaption>{{ $row->title }}</figcaption>
                    </figure>
                </a>
            </div>
            @endif
            @if ($row->foto2)
            <div class="col-md-3 d-none" data-src="{{ asset('storage/' . $row->foto2) }}">
                <a href>
                    <figure>
                        <img src="{{ asset('storage/' . $row->foto2) }}" alt="">
                        <figcaption>{{ $row->title }}</figcaption>
                    </figure>
                </a>
            </div>
            @endif
            @if ($row->foto3)
            <div class="col-md-3 d-none" data-src="{{ asset('storage/' . $row->foto3) }}">
                <a href>
                    <figure>
                        <img src="{{ asset('storage/' . $row->foto3) }}" alt="">
                        <figcaption>{{ $row->title }}</figcaption>
                    </figure>
                </a>
            </div>
            @endif
            @if ($row->foto4)
            <div class="col-md-3 d-none" data-src="{{ asset('storage/' . $row->foto4) }}">
                <a href>
                    <figure>
                        <img src="{{ asset('storage/' . $row->foto4) }}" alt="">
                        <figcaption>{{ $row->title }}</figcaption>
                    </figure>
                </a>
            </div>
            @endif
            @if ($row->foto5)
            <div class="col-md-3 d-none" data-src="{{ asset('storage/' . $row->foto5) }}">
                <a href>
                    <figure>
                        <img src="{{ asset('storage/' . $row->foto5) }}" alt="">
                        <figcaption>{{ $row->title }}</figcaption>
                    </figure>
                </a>
            </div>
            @endif
            @if ($row->embed_youtube)
            <div class="col-md-3 d-none" data-src="{{ $row->embed_youtube }}"></div>
            @endif
        </div>
        @endforeach
    </div>
</div> --}}

<div class="card">
    <div class="card-header">
        <h5>Galeri</h5>
    </div>
    <div class="card-body d-flex flex-wrap justify">
        @foreach ($gallery as $row)
            <div class="gambar me-3" id="gambar">
  
                    @if ($row->foto1)  
                        <div class="lightbox" data-src="{{ asset('storage/' . $row->foto1) }}">
                            <a href>
                                <figure>
                                    <img src="{{ asset('storage/' . $row->foto1) }}" alt="" class=" rounded img-galeri">
                                    <figcaption>{{ $row->title }}</figcaption>
                                </figure>
                            </a>
                        </div>
                    @endif
                    @if ($row->foto2)    
                        <div class="lightbox d-none" data-src="{{ asset('storage/' . $row->foto2) }}">
                            <a href>
                                <figure>
                                    <img src="{{ asset('storage/' . $row->foto2) }}" alt="" class=" rounded img-galeri">
                                    <figcaption>{{ $row->title }}</figcaption>
                                </figure>
                            </a>
                        </div>
                    @endif
                    @if ($row->foto3)    
                        <div class="lightbox d-none" data-src="{{ asset('storage/' . $row->foto3) }}">
                            <a href>
                                <figure>
                                    <img src="{{ asset('storage/' . $row->foto3) }}" alt="" class=" rounded img-galeri">
                                    <figcaption>{{ $row->title }}</figcaption>
                                </figure>
                            </a>
                        </div>
                    @endif
                    @if ($row->foto4)    
                        <div class="lightbox d-none" data-src="{{ asset('storage/' . $row->foto4) }}">
                            <a href>
                                <figure>
                                    <img src="{{ asset('storage/' . $row->foto4) }}" alt="" class=" rounded img-galeri">
                                    <figcaption>{{ $row->title }}</figcaption>
                                </figure>
                            </a>
                        </div>
                    @endif
                    @if ($row->foto5)    
                        <div class="lightbox d-none" data-src="{{ asset('storage/' . $row->foto5) }}">
                            <a href>
                                <figure>
                                    <img src="{{ asset('storage/' . $row->foto5) }}" alt="" class=" rounded img-galeri">
                                    <figcaption>{{ $row->title }}</figcaption>
                                </figure>
                            </a>
                        </div>
                    @endif
                    @if ($row->embed_youtube)                    
                        <div class="lightbox d-none" data-src="{{ $row->embed_youtube }}">
                            <a href>
                                <figure>
                                    <img src="{{ asset('storage/' . $row->foto1) }}" alt="" class=" rounded img-galeri">
                                    <figcaption>{{ $row->title }}</figcaption>
                                </figure>
                            </a>
                        </div>
                    @endif

                @if ($row->foto1 == 0)
                    @if ($row->foto2 == 0)
                        @if ($row->foto3 == 0)
                            @if ($row->foto4 == 0)
                                @if ($row->foto5 == 0)
                                    @if ($row->embed_youtube)                    
                                        <div class="lightbox iframex" data-src="{{ $row->embed_youtube }}">
                                            <a href>
                                                <figure>
                                                    <img src="{{ asset('storage/' . $row->foto1) }}" alt="" class=" rounded img-galeri">
                                                    <figcaption>{{ $row->title }}</figcaption>
                                                </figure>
                                            </a>
                                        </div>
                                    @endif
                                @endif
                            @endif
                        @endif
                    @endif
                @endif

            </div>
            {{-- <div class="iframe d-none">{{ $row->embed_youtube }}</div> --}}
        @endforeach
    </div>
</div>




@endsection
@section('script')
<script>
    var iframe           = $('.iframex');
    var iframe_src       = iframe.attr('src');
    var youtube_video_id = iframe_src.match(/youtube\.com.*(\?v=|\/embed\/)(.{11})/).pop();

    if (youtube_video_id.length == 11) {
        var video_thumbnail = $('<img src="//img.youtube.com/vi/'+youtube_video_id+'/0.jpg">');
        $(body).append(video_thumbnail);
    }
</script>
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

{{-- <div class="row" id="gallery">
        <div class="col-md-3 mb-2" data-src="/img/pembelajaran/aklik.jpg">
            <a href>
                <img src="/img/pembelajaran/aklik.jpg" alt="">
            </a>
        </div>
        <div class="col-md-3 mb-2" data-src="/img/pembelajaran/aklis.jpg">
            <a href>
                <img src="/img/pembelajaran/aklis.jpg" alt="">
            </a>
        </div>
        <div class="col-md-3 mb-2" data-src="/img/pembelajaran/retail.jpg">
            <a href>
                <img src="/img/pembelajaran/retail.jpg" alt="">
            </a>
        </div>
        <div class="col-md-3 mb-2" data-src="/img/pembelajaran/sarju.jpg">
            <a href>
                <img src="/img/pembelajaran/sarju.jpg" alt="">
            </a>
        </div>
        <div class="col-md-3 mb-2" data-src="/img/pembelajaran/foc.jpg">
            <a href>
                <img src="/img/pembelajaran/foc.jpg" alt="">
            </a>
        </div>
        <div class="col-md-3 mb-2" data-src="/img/pembelajaran/fot.jpg">
            <a href>
                <img src="/img/pembelajaran/fot.jpg" alt="">
            </a>
        </div>
    </div> --}}
