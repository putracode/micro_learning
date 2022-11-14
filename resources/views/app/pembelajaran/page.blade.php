@extends('layout.home')

@section('content')

<style>
    .image-pembelajaran{ height: 175px;}
</style>
<div class="card " style="background-image: url('/img/card_pembelajaran_bidang.png'); background-size: cover; background-repeat: no-repeat; background-position: center;">
    <div class="card-header">
        <h5>Pembelajaran Bidang</h5>
    </div>
    <div class="card-body">
        <div class="row row-cols-1 row-cols-md-3 g-4 mb-5">
            <div class="col">
                <div class="card h-100 shadow">
                    <img class="card-img-top image-pembelajaran" src="/img/pembelajaran/aklik.jpg" alt="Card image cap" />
                    <div class="card-body">
                        <h5 class="card-title ">Bidang Aktivasi Publik</h5>
                        <a href="/home/p/aktivasi-publik">
                            <button class="btn btn-primary" style="width: 100%">Mulai</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 shadow">
                    <img class="card-img-top image-pembelajaran" src="/img/pembelajaran/aklis.jpg" alt="Card image cap" />
                    <div class="card-body">
                        <h5 class="card-title ">Bidang Aktivasi Listrik</h5>
                        <a href="/home/p/aktivasi-listrik">
                            <button class="btn btn-primary" style="width: 100%">Mulai</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 shadow">
                    <img class="card-img-top image-pembelajaran" src="/img/pembelajaran/na3p.jpg" alt="Card image cap" />
                    <div class="card-body">
                        <h5 class="card-title ">Bidang NA3P</h5>
                        <a href="/home/p/na3p">
                            <button class="btn btn-primary" style="width: 100%">Mulai</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 shadow">
                    <img class="card-img-top image-pembelajaran" src="/img/pembelajaran/pemeliharaan.jpg" alt="Card image cap" />
                    <div class="card-body">
                        <h5 class="card-title ">Bidang Pemeliharaan</h5>
                        <a href="/home/p/pemeliharaan">
                            <button class="btn btn-primary" style="width: 100%">Mulai</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 shadow">
                    <img class="card-img-top image-pembelajaran" src="/img/pembelajaran/retail.jpg" alt="Card image cap" />
                    <div class="card-body">
                        <h5 class="card-title ">Bidang Retail</h5>
                        <a href="/home/p/retail">
                            <button class="btn btn-primary" style="width: 100%">Mulai</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 shadow">
                    <img class="card-img-top image-pembelajaran" src="/img/pembelajaran/spap.jpg" alt="Card image cap" />
                    <div class="card-body">
                        <h5 class="card-title ">Bidang SPAP</h5>
                        <a href="/home/p/spap">
                            <button class="btn btn-primary" style="width: 100%">Mulai</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 shadow">
                    <img class="card-img-top image-pembelajaran" src="/img/pembelajaran/sarju.jpg" alt="Card image cap" />
                    <div class="card-body">
                        <h5 class="card-title ">Bidang Sarju</h5>
                        <a href="/home/p/sarju">
                            <button class="btn btn-primary" style="width: 100%">Mulai</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<div class="card " style="background-image: url('/img/card_pembelajaran_bidang.png'); background-size: cover; background-repeat: no-repeat; background-position: center;">
    <div class="card-header">
        <h5>Pembelajaran Umum</h5>
    </div>
    <div class="card-body">
        <div class="row row-cols-1 row-cols-md-3 g-4 mb-5">
            <div class="col">
                <div class="card h-100 shadow">
                    <img class="card-img-top image-pembelajaran" src="/img/pembelajaran/foc.jpg" alt="Card image cap" />
                    <div class="card-body">
                        <h5 class="card-title ">FOC</h5>
                        <a href="/home/p/foc">
                            <button class="btn btn-primary" style="width: 100%">Mulai</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 shadow">
                    <img class="card-img-top image-pembelajaran" src="/img/pembelajaran/fot.jpg" alt="Card image cap" />
                    <div class="card-body">
                        <h5 class="card-title ">FOT</h5>
                        <a href="/home/p/fot">
                            <button class="btn btn-primary" style="width: 100%">Mulai</button>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection

{{-- @extends('layout.home')

@section('content')
@can('internal')    
<div class="card mb-3" style="background-image: url('/img/card_pembelajaran_bidang.png'); background-size: cover; background-repeat: no-repeat; background-position: center;">
    <div class="card-header">
        <h5>Pembelajaran Bidang</h5>
    </div>
    <div class="card-body">
        <div class="row mb-3">
            <div class="col-md-4">
                <a href="/home/p/aktivasi-publik">
                    <div class="card  shadow">
                        <img src="/img/pembelajaran/aklik.jpg" class="card-img-top" height="120vh">
                        <div class="card-body p-4">
                            <h5 class="card-text ">Aktivasi Publik</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="/home/p/aktivasi-listrik">     
                    <div class="card  shadow">
                        <img src="/img/pembelajaran/aklis.jpg" class="card-img-top" height="120vh">
                        <div class="card-body p-4">
                            <h5 class="card-text ">Aktivasi Listrik</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="/home/p/NA3P">
                    <div class="card  shadow">
                        <img src="/img/pembelajaran/na3p.jpg" class="card-img-top" height="120vh">
                        <div class="card-body p-4">
                            <h5 class="card-text ">NA3P</h5>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-4">
                <a href="/home/p/pemeliharaan">
                    <div class="card  shadow">
                        <img src="/img/pembelajaran/pemeliharaan.jpg" class="card-img-top" height="120vh">
                        <div class="card-body p-4">
                            <h5 class="card-text ">Pemeliharaan</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="/home/p/retail">
                    <div class="card  shadow">
                        <img src="/img/pembelajaran/retail.jpg" class="card-img-top" height="120vh">
                        <div class="card-body p-4">
                            <h5 class="card-text ">Retail</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="/home/p/SPAP">
                    <div class="card  shadow">
                        <img src="/img/pembelajaran/spap.jpg" class="card-img-top" height="120vh">
                        <div class="card-body p-4">
                            <h5 class="card-text ">SPAP</h5>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <a href="/home/p/sarju">
                    <div class="card  shadow">
                        <img src="/img/pembelajaran/sarju.jpg" class="card-img-top" height="120vh">
                        <div class="card-body p-4">
                            <h5 class="card-text ">Sarju</h5>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
@endcan

<div class="card" style="background-image: url('/img/card_pembelajaran_umum.png'); background-size: cover; background-repeat: no-repeat; background-position: center;">
    <div class="card-header">
        <h5>Pembelajaran Umum</h5>
    </div>
    <div class="card-body">
        <div class="row mb-3">
            <div class="col-md-4">
                <a href="/home/p/foc">
                    <div class="card  shadow">
                        <img src="/img/pembelajaran/foc.jpg" class="card-img-top" height="120vh">
                        <div class="card-body">
                            <h5 class="card-text ">FOC</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="/home/p/fot">     
                    <div class="card  shadow">
                        <img src="/img/pembelajaran/fot.jpg" class="card-img-top" height="120vh">
                        <div class="card-body">
                            <h5 class="card-text ">FOT</h5>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection --}}
