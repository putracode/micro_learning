@extends('layout.app')

@section('content')
<div class="container">
    <h1 class="text-center mb-5">Dashboard Penilaian</h1>
    @foreach ($nilai as $row)
    
    <div class="embed" style="width: 100%;">

        {!! $row->embed !!}
    </div>
    @endforeach
</div>
@endsection