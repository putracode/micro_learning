@extends('layout.home')

@section('content')
{{-- style="background-image: url('/img/test.png'); background-size: cover; background-repeat: no-repeat; background-position: center;" --}}
<style>
    .card-home{
        background-image: url('/img/test.png'); 
        background-size: cover; 
        background-repeat: no-repeat; 
        background-position: center;
    }
    @media all and (max-width: 968px){
        .card-home{
            background-image: url('/img/test_kecil.png'); 
            background-size: contain; 
            background-repeat: no-repeat; 
            background-position: center; 
        }
    }
</style>
<div class="card card-home">
    <div class="card-header">
        <div class="page-title">
            <h3>Micro Learning</h3>
            <p>Pembelajaran Micro Learning SBU Jakban</p>
        </div>
    </div>
    <div class="card-body">
        <div class="row">

            <div class="col-md-6">
    
                <p>
                    Selamat Belajar (Video Opening On Progress Dibuat)
                </p>
                <iframe width="100%" class="rounded" height="250" src="https://www.youtube.com/embed/kth3y5WK8O8" title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
            <div class="col-md-6 ">
    
                <p>
                    Selamat Belajar (Video Opening On Progress Dibuat)
                </p>
                <iframe width="100%" class="rounded" height="250" src="https://www.youtube.com/embed/kth3y5WK8O8" title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>



@endsection
