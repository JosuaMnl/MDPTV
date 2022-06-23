@extends('layouts.master')

@section('title', 'Data Anggota')

@section('dataTableAnggota', $scripts)

@section('content')
    <div class="card">
        <div class="card-header">
            {{-- <h3 class="card-title">Tabel Data Anggota MDPTV</h3> --}}
            <a href="{{ url('members/create') }}" class="btn btn-secondary">Tambah</a>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped" id="example1">
                <thead>
                    <tr>
                        <th>Action</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>No. WhatsApp</th>
                        <th>Alamat</th>
                        <th>Jenis Kelamin</th>
                        <th>Angkatan</th>
                        <th>Status</th>
                        <th>Program Studi</th>
                        <th>Divisi</th>
                        <th>Jabatan</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($members as $item)
                        <tr>
                            <td>
                                <a href="{{ url('members/' . $item->id . '/edit') }}"
                                    class="btn btn-sm btn-warning">Edit</a>
                                <button class="btn btn-sm btn-danger btn-hapus" data-id="{{ $item->id }}"
                                    data-name-members="{{ $item->nama }}" data-toggle="modal"
                                    data-target="#deleteModal">Hapus</button>
                            </td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->no_hp }}</td>
                            <td>{{ $item->alamat }}</td>
                            <td>{{ $item->jenis_kelamin }}</td>
                            <td>{{ $item->angkatan }}</td>
                            <td>{{ $item->status }}</td>
                            <td>{{ $item->study_programs->nama_prodi }}</td>
                            <td>{{ $item->divisions->nama_divisi }}</td>
                            <td>{{ $item->positions->nama_jabatan }}</td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="card-footer">

        </div>
    </div>

    <div class="modal fade" id="deleteModal">
        <div class="modal-dialog">
            <div class="modal-content bg-danger">
                <form action="" method="post" id="formDelete">
                    @csrf
                    @method('DELETE')
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

    {{-- <script src="{{ asset('vendors/plugins/jquery/jquery.min.js') }}"></script> --}}
    {{-- Delete Modal master --}}


@endsection
