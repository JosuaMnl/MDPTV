@extends('layouts.master')

@section('title', 'Data Anggota')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Tambah Data Anggota</h3>
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
            <form action="{{ route('members.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @if ($errors->any())
                    <div class="alert
                    alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama"
                                value="">
                            @error('nama')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Enter email"
                                value="">
                            @error('email')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="text">No HP</label>
                            <input type="text" class="form-control" name="no_hp" placeholder="Enter No HP"
                                value="">
                            @error('no_hp')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="text">Alamat</label>
                            <input type="text" class="form-control" name="alamat" placeholder="Masukkan Alamat"
                                value="">
                            @error('alamat')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleSelectBorder">Jenis Kelamin</label>
                            <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger"
                                style="width: 100%;" name="jenis_kelamin">
                                <option>Pilih</option>
                                <option value="L">Laki-Laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                            @error('jenis_kelamin')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="text">Angkatan</label>
                            <input type="text" class="form-control" name="angkatan" placeholder="Masukkan Angkatan"
                                value="">
                            @error('angkatan')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="study_programs_id">Nama Program Studi</label>
                            <select name="study_programs_id" class="form-control select2 select2-danger"
                                data-dropdown-css-class="select2-danger" style="width: 100%;">
                                <option value="">Pilih Nama Program Studi</option>
                                @foreach ($study_programs as $item)
                                    <option value="{{ $item->id }}">{{ $item->nama_prodi }}</option>
                                @endforeach
                            </select>
                            @error('study_programs_id')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="divisions_id">Nama Divisi</label>
                            <select name="divisions_id" class="form-control select2 select2-danger"
                                data-dropdown-css-class="select2-danger" style="width: 100%;">
                                <option value="">Pilih Nama divisi</option>
                                @foreach ($divisions as $item)
                                    <option value="{{ $item->id }}">{{ $item->nama_divisi }}</option>
                                @endforeach
                            </select>
                            @error('divisions_id')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="positions_id">Nama jabatan</label>
                            <select name="positions_id" class="form-control select2 select2-danger"
                                data-dropdown-css-class="select2-danger" style="width: 100%;">
                                <option value="">Pilih jabatan</option>
                                @foreach ($positions as $item)
                                    <option value="{{ $item->id }}">{{ $item->nama_jabatan }}</option>
                                @endforeach
                            </select>
                            @error('positions_id')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div>
                    <button type="submit" class="btn btn-secondary"> Simpan </button>
                </div>
            </form>
        </div>

    </div>
    <div class="card-footer">
    </div>

    </div>
@endsection
