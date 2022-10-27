@extends('layout.home')

@section('styles')
    <style>
        iframe{
            width: 100%;
            height: 100vh;
        }
    </style>
@endsection

@section('content')
<div class="card">
    <div class="card-header ">
        <h5>Dashboard Penilaian</h5>
    </div>
    <div class="card-body">
        @if ($nilai->count())
        @foreach ($nilai as $row)
    
        <div class="embed" style="width: 100%;">

            {!! $row->embed !!}
        </div>
        @endforeach
        @else
            tidak ada data
        @endif
    </div>
</div>
@endsection