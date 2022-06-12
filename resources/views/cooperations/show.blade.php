@extends('layouts.master')

@section('title', 'Detail Kerja Sama')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">@yield('title')</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
        <div class="card-body">
            <table class="table">
                <tr>
                    <td>Nama Kegiatan</td>
                    <td>{{ $cooperations->nama_kegiatan }}</td>
                </tr>
                <tr>
                    <td>Penyelanggara</td>
                    <td>{{ $cooperations->organizers->penyelenggara }}</td>
                </tr>
                <tr>
                    <td>Tanggal Kegiatan</td>
                    <td>{{ $cooperations->tanggal_kegiatan }}</td>
                </tr>
                <tr>
                    <td>No. HP</td>
                    <td>{{ $cooperations->no_hp }}</td>
                </tr>
                <tr>
                    <td>Lokasi Kegiatan</td>
                    <td>{{ $cooperations->lokasi }}</td>
                </tr>
                <tr>
                    <td>Surat Izin</td>
                    <td>{{ $cooperations->surat_izin }}</td>
                </tr>
                <tr>
                    <td>Surat Kerjasama</td>
                    <td>{{ $cooperations->surat_kerjasama }}</td>
                </tr>
                <tr>
                    <td>Action</td>
                    <td>
                        <a class="btn btn-sm btn-success" href="{{ url('approved/' . $cooperations->id) }}">Diterima</a>
                        <a class="btn btn-sm btn-danger" href="{{ url('canceled/' . $cooperations->id) }}">Ditolak</a>
                    </td>
                </tr>
            </table>
        </div>

        <div class="card-footer">
            Footer
        </div>
    </div>
@endsection
