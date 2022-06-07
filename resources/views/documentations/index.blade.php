@extends('layouts.master')

@section('title', 'Dokumentasi')

@section('content')
    <div class="card">
        <div class="card-header">
            {{-- <h3 class="card-title">Halaman @yield('title')</h3> --}}
            <a href="{{ url('documentation/create') }}" class="btn btn-info">Tambah</a>
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
            <table id="example" class="table table-striped nowrap" style="width:100%">
                <thead>
                    <tr>
                        <th>Nama Kegiatan</th>
                        <th>Tanggal Kegiatan</th>
                        <th>Lokasi</th>
                        <th>Keterangan</th>
                        <th>Link Dokumentasi</th>
                        <th>Penyelenggara</th>
                        <th>Action</th>
                        <th>Tahun Akademik</th>
                        <th>Semester</th>
                    </tr>
                </thead>
                <tbody>

                    {{-- @php
                    dd($documentation);
                @endphp --}}
                    @foreach ($documentations as $item)
                        <tr>
                            <td>{{ $item->nama_kegiatan }}</td>
                            <td>{{ $item->tanggal_kegiatan }}</td>
                            <td>{{ $item->lokasi }}</td>
                            <td>{{ $item->keterangan }}</td>
                            <td>{{ $item->link_dokumentasi }}</td>
                            <td>{{ $item->organizers->penyelenggara }}</td>
                            <td>
                                <a href="{{ url('documentation/' . $item->id . '/edit') }}"
                                    class="btn btn-sm btn-warning">Edit</a>
                                <button class="btn btn-sm btn-danger btn-hapus" data-id="{{ $item->id }}"
                                    data-nama-documentation="{{ $item->nama_kegiatan }}" data-toggle="modal"
                                    data-target="#deleteModal">Hapus</button>
                            </td>
                            <td>{{ $item->periods->tahun_akademik }}</td>
                            <td>{{ $item->periods->semester }}</td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
        <div class="card-footer">
            Footer
        </div>
        <div class="modal fade" id="deleteModal" style="z-index: 999999999">
            <div class="modal-dialog">
                <div class="modal-content bg-danger">
                    <form action="" method="post" id="formDelete">
                        @method('DELETE')
                        @csrf
                        <div class="modal-header">
                            <h4 class="modal-title">Konfirmasi Hapus Data</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body" id="mb-konfirmasi">
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-outline-light" data-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-outline-light">Ya, Hapus</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
