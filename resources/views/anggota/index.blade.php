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
                        <th>NPM</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>No. WhatsApp</th>
                        <th>Alamat</th>
                        <th>Jenis Kelamin</th>
                        <th>Program Studi</th>
                        <th>Divisi</th>
                        <th>Jabatan</th>
                        <th>Angkatan</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>2024240001</td>
                        <td>Marcelo Amazon</td>
                        <td>marcelo@mhs.mdp.ac.id</td>
                        <td>0895123456789</td>
                        <td>Jln. Prabumulih</td>
                        <td>Laki-Laki</td>
                        <td>Sistem Informasi</td>
                        <td>Multimedia</td>
                        <td>Ketua</td>
                        <td>2</td>
                        <td>Aktif</td>
                    </tr>
                    <tr>
                        <td>2024240001</td>
                        <td>Marcelo Amazon</td>
                        <td>marcelo@mhs.mdp.ac.id</td>
                        <td>0895123456789</td>
                        <td>Jln. Prabumulih</td>
                        <td>Laki-Laki</td>
                        <td>Sistem Informasi</td>
                        <td>Multimedia</td>
                        <td>Ketua</td>
                        <td>2</td>
                        <td>Aktif</td>
                    </tr>
                    <tr>
                        <td>2024240001</td>
                        <td>Marcelo Amazon</td>
                        <td>marcelo@mhs.mdp.ac.id</td>
                        <td>0895123456789</td>
                        <td>Jln. Prabumulih</td>
                        <td>Laki-Laki</td>
                        <td>Sistem Informasi</td>
                        <td>Multimedia</td>
                        <td>Ketua</td>
                        <td>2</td>
                        <td>Aktif</td>
                    </tr>
                    <tr>
                        <td>2024240001</td>
                        <td>Marcelo Amazon</td>
                        <td>marcelo@mhs.mdp.ac.id</td>
                        <td>0895123456789</td>
                        <td>Jln. Prabumulih</td>
                        <td>Laki-Laki</td>
                        <td>Sistem Informasi</td>
                        <td>Multimedia</td>
                        <td>Ketua</td>
                        <td>2</td>
                        <td>Aktif</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
