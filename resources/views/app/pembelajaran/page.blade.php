@extends('layout.page')

@section('content')

<style>
    .image-pembelajaran{ height: 199px;}
</style>

@can('internal')    
    <div class="row mb-5">
        <h3 class="card-title mb-3" >Materi Bidang</h3>
        <div class="col-lg-4 col-md-6 col-sm-6 mb-3" >
            <div class="card rounded">
                <img src="/img/pembelajaran/aklik.jpg" class="card-img-top rounded-top image-pembelajaran" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Aktivasi Publik</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk
                        of the card's content.</p>
                    <hr>
                    <a href="/pembelajaran/aktivasi-publik" class="btn btn-primary" style="width: 100%;">Selengkapnya</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 mb-3" >
            <div class="card rounded">
                <img src="/img/pembelajaran/aklis.jpg" class="card-img-top rounded-top image-pembelajaran" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Aktivasi Listrik</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk
                        of the card's content.</p>
                    <hr>
                    <a href="/pembelajaran/aktivasi-listrik" class="btn btn-primary" style="width: 100%;">Selengkapnya</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 mb-3" >
            <div class="card rounded">
                <img src="/img/pembelajaran/na3p.jpg" class="card-img-top rounded-top image-pembelajaran" alt="...">
                <div class="card-body">
                    <h5 class="card-title">NA3P</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk
                        of the card's content.</p>
                    <hr>
                    <a href="/pembelajaran/na3p" class="btn btn-primary" style="width: 100%;">Selengkapnya</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 mb-3" >
            <div class="card rounded">
                <img src="/img/pembelajaran/pemeliharaan.jpg" class="card-img-top rounded-top image-pembelajaran" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Pemeliharaan</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk
                        of the card's content.</p>
                    <hr>
                    <a href="/pembelajaran/pemeliharaan" class="btn btn-primary" style="width: 100%;">Selengkapnya</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 mb-3" >
            <div class="card rounded">
                <img src="/img/pembelajaran/retail.jpg" class="card-img-top rounded-top image-pembelajaran" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Retail</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk
                        of the card's content.</p>
                    <hr>
                    <a href="/pembelajaran/retail" class="btn btn-primary" style="width: 100%;">Selengkapnya</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 mb-3" >
            <div class="card rounded">
                <img src="/img/pembelajaran/spap.jpg" class="card-img-top rounded-top image-pembelajaran" alt="...">
                <div class="card-body">
                    <h5 class="card-title">SPAP</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk
                        of the card's content.</p>
                    <hr>
                    <a href="/pembelajaran/spap" class="btn btn-primary" style="width: 100%;">Selengkapnya</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 mb-3" >
            <div class="card rounded">
                <img src="/img/pembelajaran/sarju.jpg" class="card-img-top rounded-top image-pembelajaran" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Sarju</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk
                        of the card's content.</p>
                    <hr>
                    <a href="/pembelajaran/sarju" class="btn btn-primary" style="width: 100%;">Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>
@endcan


<div class="row">
    <h3 class="card-title mb-3" >Materi Umum</h3>
    <div class="col-lg-4 col-md-6 col-sm-6 mb-3" >
        <div class="card rounded">
            <img src="/img/pembelajaran/foc.jpg" class="card-img-top rounded-top image-pembelajaran" alt="...">
            <div class="card-body">
                <h5 class="card-title">FOC</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk
                    of the card's content.</p>
                <hr>
                <a href="/pembelajaran/aktivasi-publik" class="btn btn-primary" style="width: 100%;">Selengkapnya</a>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-6 mb-3" >
        <div class="card rounded">
            <img src="/img/pembelajaran/fot.jpg" class="card-img-top rounded-top image-pembelajaran" alt="...">
            <div class="card-body">
                <h5 class="card-title">FOT</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk
                    of the card's content.</p>
                <hr>
                <a href="/pembelajaran/aktivasi-publik" class="btn btn-primary" style="width: 100%;">Selengkapnya</a>
            </div>
        </div>
    </div>
</div>
@endsection

@section('title')
    Materi Pembelajaran
@endsection