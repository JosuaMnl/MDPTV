@extends('layouts.master')

@section('title', 'Dokumentasi')

@section('content')
    <table id="example" class="table table-striped nowrap" style="width:100%">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama Kegiatan</th>
                <th>Tanggal Kegiatan</th>
                <th>Lokasi</th>
                <th>Keterangan</th>
                <th>Link Dokumentasi</th>
                <th>Tahun Akademik</th>
                <th>Semester</th>
                <th>Penyelenggara</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                {{-- @php
                    dd($documentation);
                @endphp --}}
                @foreach ($documentations as $item)
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->nama_kegiatan }}</td>
                    <td>{{ $item->tanggal_kegiatan }}</td>
                    <td>{{ $item->lokasi }}</td>
                    <td>{{ $item->keterangan }}</td>
                    <td>{{ $item->link_dokumentasi }}</td>
                    <td>{{ $item->organizers->penyelenggara }}</td>
                    <td>{{ $item->periods->tahun_akademik }}</td>
                    <td>{{ $item->periods->semester }}</td>
                @endforeach
            </tr>
        </tbody>
    </table>
@endsection
