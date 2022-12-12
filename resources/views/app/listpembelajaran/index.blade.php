@extends('layout.page')

@section('content')
<style>
    iframe{
        width: 100%;
        height: 115vh;
    }
</style>

@if ($list->count())    
    @foreach ($list as $row)
        {!! $row->embed_pembelajaran !!}
    @endforeach
@else
    List Pembelajaran Sedang dibuat..
@endif
{{-- <div class="card">
    <div class="card-header">
        <h5>List Pembelajaran</h5>
    </div>
    <div class="card-body">

        @foreach ($list as $row)
            
        {!! $row->embed_pembelajaran !!}
    </div>
</div>
@endforeach --}}
@endsection
@section('title')
    List Pembelajaran
@endsection

