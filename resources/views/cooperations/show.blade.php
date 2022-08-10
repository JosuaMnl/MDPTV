@extends('layouts.master')

@section('title', 'Detail Kerja sama')

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
            <table class="table nowrap table-responsive" style="width:100%">
                <tbody>
                    <tr>
                        <td>Nama Mitra</td>
                        <td>{{ $cooperations->users->name }}</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>{{ $cooperations->users->email }}</td>
                    </tr>
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
                        <td>
                            <a href="{{ asset('storage/files/' . $cooperations->surat_izin) }}"><button
                                    class="btn btn-info btn-sm">Lihat</button></a>
                            <a href="{{ url('/download', $cooperations->surat_izin) }}"><button
                                    class="btn btn-secondary btn-sm">Download</button></a>
                        </td>
                    </tr>
                    <tr>
                        <td>Surat Kerjasama</td>
                        <td>
                            <a href="{{ asset('storage/files/' . $cooperations->surat_kerjasama) }}"><button
                                    class="btn btn-info btn-sm">Lihat</button></a>
                            <a href="{{ url('/download', $cooperations->surat_kerjasama) }}"><button
                                    class="btn btn-secondary btn-sm">Download</button></a>
                        </td>
                    </tr>
                    <tr>
                        <td>Layanan yang diminta</td>
                        <td>
                            <ul>
                                @foreach ($service_details as $item)
                                    <li>{{ $item->service_categories->nama_layanan }}</li>
                                @endforeach
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>Action</td>
                        <td>
                            <a class="btn btn-sm btn-success"
                                href="{{ url('approved/' . $cooperations->id) }}">Diterima</a>
                            <a class="btn btn-sm btn-danger"
                                href="{{ url('canceled/' . $cooperations->id) }}">Ditolak</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="card-footer">
            Footer
        </div>
    </div>
@endsection
