@extends('layout.home')

@section('content')
@can('internal')    
<div class="card mb-3">
    <div class="card-header">
        <h5>Pembelajaran Bidang</h5>
    </div>
    <div class="card-body">
        <div class="row mb-3">
            <div class="col-md-4">
                <a href="/home/p/aktivasi-publik">
                    <div class="card border shadow">
                        <img src="/img/pembelajaran/aklik.jpg" class="card-img-top" height="120vh">
                        <div class="card-body p-4">
                            <h5 class="card-text ">Aktivasi Publik</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="/home/p/aktivasi-listrik">     
                    <div class="card border shadow">
                        <img src="/img/pembelajaran/aklis.jpg" class="card-img-top" height="120vh">
                        <div class="card-body p-4">
                            <h5 class="card-text ">Aktivasi Listrik</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="/home/p/NA3P">
                    <div class="card border shadow">
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
                    <div class="card border shadow">
                        <img src="/img/pembelajaran/pemeliharaan.jpg" class="card-img-top" height="120vh">
                        <div class="card-body p-4">
                            <h5 class="card-text ">Pemeliharaan</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="/home/p/retail">
                    <div class="card border shadow">
                        <img src="/img/pembelajaran/retail.jpg" class="card-img-top" height="120vh">
                        <div class="card-body p-4">
                            <h5 class="card-text ">Retail</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="/home/p/SPAP">
                    <div class="card border shadow">
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
                    <div class="card border shadow">
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

<div class="card">
    <div class="card-header">
        <h5>Pembelajaran Umum</h5>
    </div>
    <div class="card-body">
        <div class="row mb-3">
            <div class="col-md-4">
                <a href="/home/p/foc">
                    <div class="card border shadow">
                        <img src="/img/pembelajaran/foc.jpg" class="card-img-top" height="120vh">
                        <div class="card-body">
                            <h5 class="card-text ">FOC</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="/home/p/fot">     
                    <div class="card border shadow">
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
@endsection
