@extends('layout.page')

@section('styles')
    <style>
        iframe{
            width: 100% ;
            height: 136vh ;
        }

    </style>
@endsection

@section('content')
{{-- <div class="card">
    <div class="card-header ">
        <h5>Dashboard Penilaian</h5>
    </div>
    <div class="card-body">
        @if ($nilai->count())
        @foreach ($nilai as $row)
    
            <div class="embed" >
                {!! $row->embed !!}
            </div>
        @endforeach
        @else
            tidak ada data
        @endif
    </div>
</div> --}}
@if ($nilai->count())
        @foreach ($nilai as $row)
    
            <div class="embed" >
                {!! $row->embed !!}
            </div>
        @endforeach
        @else
            Dashboard Penilain Sedang dibuat..
        @endif
@endsection

@section('title')
    Dashboard Penilaian
@endsection