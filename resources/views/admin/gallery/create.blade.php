@extends('layout.sneat')

@section('title')
Galeri
@endsection

@section('content')

<h4 class="fw-bold py-1 mb-4"><span class="text-muted fw-light">Create/</span> Galeri</h4>

<div class="row">
    <div class="col-xxl">
        <div class="card mb-4">
            <div class="card-body">
                <form action="/admin/gallery" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label" for="title">Title</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control @error('title') @enderror" id="title" name="title"
                                required>
                            @error('title')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row">

                        <img class="img-preview mb-3 img-fluid col-sm-5 offset-2 rounded" style="width: 250px; height: 150px; display: block; object-fit:cover;">
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label" for="thumbnail">Thumbnail</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control @error('thumbnail') @enderror" id="thumbnail" name="thumbnail" required onchange="previewImage()">
                            @error('thumbnail')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div id="foto-galeri">

                    </div>
                    <div id="video-youtube">

                    </div>
                    <div class="kumpulanButton">

                        <button class="btn btn-success btn-sm " onclick="addFoto()" type="button" id="tambahfoto" style="display: inline-block" title="Tambah Foto "><i class='bx bx-image-add'></i></button>

                        <button class="btn btn-danger btn-sm " onclick="removeFoto()" type="button" id="removefoto" style="display: inline-block" title="Hapus Foto "><i class='bx bx-image'></i></i></button>

                        <button class="btn btn-success btn-sm" onclick="addVideo()" type="button" id="tambahvideo" style="display: inline-block" title="Tambah Link Video "><i class='bx bx-video-plus'></i></button>
                        
                        <button class="btn btn-danger btn-sm" onclick="removeVideo()" type="button" id="removevideo" style="display: inline-block" title="Hapus Link Video "><i class='bx bx-video'></i></button>
                    </div>
                    <div class="row justify-content-end">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary float-end px-4 btn-sm">Send</button>
                            <a href="/admin/gallery" class="btn btn-danger px-4 me-2 float-end btn-sm">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
    var foto = document.querySelector('#foto-galeri');
    var video = document.querySelector('#video-youtube');
    var btnFoto = document.querySelector('#tambahfoto');
    var btnVideo = document.querySelector('#tambahvideo');



    var i = 0
    var y = 0

    function addFoto() {
        i++
        foto.innerHTML +=
            '<div class="bungkus">'+
                '<div class="row mb-2">'+
                    '<img class="img-preview'+ i +' mb-3 img-fluid col-sm-5 offset-2 rounded" style="width: 250px; height: 150px; display: block; object-fit:cover;">' +
                '</div>' +
                '<div class="row mb-4 classFoto" id="xfoto' + i + '">' +
                '<label class="col-sm-2 col-form-label" for="foto' + i + '">Foto ' + i + '</label>' +
                '<div class="col-sm-10">' + 
                '<input type="file" class="form-control jumlah @error("foto' + i + '") @enderror" id="foto' + i +
                '"required name="foto' + i + '" onchange="previewImage'+ i +'()">' +
                '@error("foto' + i + '")' +
                '<div class="invalid-feedback">' +
                '{{ $message }}' +
                '</div>' +
                '@enderror' +
                '</div>' +
                '</div>' +
            '</div>' 

        if (i == 5) {
            btnFoto.style.display = 'none'
        }
    }


    function addVideo() {
        y++
        video.innerHTML += '<div class="row mb-4" id="xembed_youtube' + y + '">' +
            '<label class="col-sm-2 col-form-label" for="embed_youtube' + y + '">embed_youtube ' + y + '</label>' +
            '<div class="col-sm-10">' +
            '<input type="text" class="form-control jumlah @error("embed_youtube' + y +
            '") @enderror" id="embed_youtube' + y + '"required name="embed_youtube' + y + '">' +
            '@error("embed_youtube' + y + '")' +
            '<div class="invalid-feedback">' +
            '{{ $message }}' +
            '</div>' +
            '@enderror' +
            '</div>' +
            // '<div class="col-md-1">'+'<button class="btn btn-danger btn-sm" onclick="hapusembed_youtube(xembed_youtube'+y+')" type="button" id="tambahvideo"><i class="bx bx-x"></i></button>'+'</div>' +
            '</div>'
        if (y == 2) {
            btnVideo.style.display = 'none'
        }
    }

    function removeFoto() {
        if(i >= 1){
            var foto = document.querySelector('#foto-galeri');
            foto.removeChild(foto.lastChild)
            i--
        }
        if (i < 5) {
            btnFoto.style.display = 'inline-block'
        }
    }

    function removeVideo() {
        if(y >= 1){
            var video = document.querySelector('#video-youtube');
            video.removeChild(video.lastChild)
            y--
        }
        if (y < 2) {
            btnVideo.style.display = 'inline-block'
        }
    }

    function previewImage(){
        const image = document.querySelector("#thumbnail");
        const imgPreview = document.querySelector(".img-preview");

        imgPreview.style.display = "block";

        const blob = URL.createObjectURL(image.files[0]);
        imgPreview.src = blob;
    }
    function previewImage1(){
        const image = document.querySelector("#foto1");
        const imgPreview = document.querySelector(".img-preview1");

        imgPreview.style.display = "block";

        const blob = URL.createObjectURL(image.files[0]);
        imgPreview.src = blob;
    }

    function previewImage2(){
        const image = document.querySelector("#foto2");
        const imgPreview = document.querySelector(".img-preview2");

        imgPreview.style.display = "block";

        const blob = URL.createObjectURL(image.files[0]);
        imgPreview.src = blob;
    }
    function previewImage3(){
        const image = document.querySelector("#foto3");
        const imgPreview = document.querySelector(".img-preview3");

        imgPreview.style.display = "block";

        const blob = URL.createObjectURL(image.files[0]);
        imgPreview.src = blob;
    }
    function previewImage4(){
        const image = document.querySelector("#foto4");
        const imgPreview = document.querySelector(".img-preview4");

        imgPreview.style.display = "block";

        const blob = URL.createObjectURL(image.files[0]);
        imgPreview.src = blob;
    }
    function previewImage5(){
        const image = document.querySelector("#foto5");
        const imgPreview = document.querySelector(".img-preview5");

        imgPreview.style.display = "block";

        const blob = URL.createObjectURL(image.files[0]);
        imgPreview.src = blob;
    }

</script>
@endsection
