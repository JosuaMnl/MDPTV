@extends('layouts.master')

@section('title', 'Data Anggota')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Tabel Data Anggota MDPTV</h3>
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
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
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
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->no_hp }}</td>
                            <td>{{ $item->alamat }}</td>
                            <td>{{ $item->jenis_kelamin }}</td>
                            <td>{{ $item->angkatan }}</td>
                            <td>{{ $item->status }}</td>
                            <td>{{ $item->study_programs->nama_prodi }}</td>
                            <td>{{ $item->divisions->nama_divisi }}</td>
                            <td>{{ $item->positions->nama_jabatan }}</td>>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
