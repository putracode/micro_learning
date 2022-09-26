@extends('layout.app')

@section('content')
{{-- <table border="1" class="table table-bordered">
    <thead>
        <tr class="bg-success text-white">
            <th>Materi Pokok</th>
            <th>Bidang</th>
            <th>Kompetensi Dasar</th>
            <th>Kegiatan Pembelajaran</th>
            <th>Indikator Keberhasilan</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($listpembelajaran as $row)
        <tr>
            <td>{{ $row->materi_pokok }}</td>
            <td>{{ $row->bidang }}</td>
            <td>{{ $row->kompetensi_dasar }}</td>
            <td>{{ $row->kegiatan_pembelajaran }}</td>
            <td>{{ $row->indikator_keberhasilan }}</td>
        </tr>
        @endforeach
    </tbody>
</table> --}}
<h1>List Pembelajaran</h1>
{{-- <iframe src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQMFAfjqiBUAQisLuuvU6I0JrkLua4iQuXp3xBbJo_LaNTBjW7zfQQAboO7vRIv2D2K5B2NakiN0W8D/pubhtml?widget=true&amp;headers=false" width="100%" height="720vh"></iframe> --}}
@foreach ($list as $row)
    
{!! $row->embed_pembelajaran !!}
@endforeach
@endsection

