@extends('layouts.main')

@section('container')
<table class="table ">
    <thead class="bg-bts-3 text-center text-light">
        <th style='border-top-left-radius:1rem'>
            Keterangan
        </th>
        <th style='border-top-right-radius:1rem'>
            Nilai
        </th>
    </thead>
    <tbody>
        <tr>
            <td class='table-light w-25'>Judul</td>
            <td> {{ $berita->judul }} </td>
        </tr>
        <tr>
            <td class='table-light'>Tipe BTS</td>
            <td> {{ $berita->isi_berita}} </td>
        </tr>
    </tbody>
</table>

@endsection
