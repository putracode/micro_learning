@extends('layout.home')

@section('content')
<div class="card">
    <div class="card-header">
        <h5>List Pembelajaran</h5>
    </div>
    <div class="card-body">

        @foreach ($list as $row)
            
        {!! $row->embed_pembelajaran !!}
    </div>
</div>
@endforeach
@endsection

