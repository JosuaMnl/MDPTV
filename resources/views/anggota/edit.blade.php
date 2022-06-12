@extends('layouts.master')

@section('title', 'Data Anggota')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Edit Data Anggota</h3>
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
            {{-- @php
                dd(route('members.update', ['members' => $members->id]));
            @endphp --}}
            <form action="{{ route('members.update', ['member' => $members->id]) }}" method="POST">
                @method('PATCH')
                @csrf
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama"
                        value="{{ old('nama') ?? $members->nama }}">
                    @error('nama')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Enter email"
                        value="{{ old('email') ?? $members->email }}">
                    @error('email')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="text">No HP</label>
                    <input type="text" class="form-control" name="no_hp" placeholder="Enter No HP"
                        value="{{ old('no_hp') ?? $members->no_hp }}">
                    @error('no_hp')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="text">Alamat</label>
                    <input type="text" class="form-control" name="alamat" placeholder="Masukkan Alamat"
                        value="{{ old('alamat') ?? $members->alamat }}">
                    @error('alamat')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="exampleSelectBorder">Jenis Kelamin</label>
                    <select class="custom-select form-control-border" name="jenis_kelamin">
                        <option>Pilih</option>
                        <option value="L" {{ $members->jenis_kelamin == 'L' ? 'selected' : '' }}>Laki-Laki</option>
                        <option value="P" {{ $members->jenis_kelamin == 'P' ? 'selected' : '' }}>Perempuan</option>
                    </select>
                    @error('jenis_kelamin')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="text">Angkatan</label>
                    <input type="text" class="form-control" name="angkatan" placeholder="Masukkan Angkatan"
                        value="{{ old('angkatan') ?? $members->angkatan }}">
                    @error('angkatan')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="study_programs_id">Nama Program Studi</label>
                    <select name="study_programs_id" class="form-control select2">
                        <option value="">Pilih Nama Program Studi</option>
                        @foreach ($study_programs as $item)
                            <option value="{{ $item->id }}"
                                {{ $item->id == $members->study_programs_id ? 'selected' : null }}>
                                {{ $item->nama_prodi }}</option>
                        @endforeach
                    </select>
                    @error('study_programs_id')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="divisions_id">Nama Divisi</label>
                    <select name="divisions_id" class="form-control select2">
                        <option value="">Pilih Nama divisi</option>
                        @foreach ($divisions as $item)
                            <option value="{{ $item->id }}"
                                {{ $item->id == $members->divisions_id ? 'selected' : null }}>
                                {{ $item->nama_divisi }}</option>
                        @endforeach
                    </select>
                    @error('divisions_id')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="positions_id">Nama jabatan</label>
                    <select name="positions_id" class="form-control select2">
                        <option value="">Pilih jabatan</option>
                        @foreach ($positions as $item)
                            <option value="{{ $item->id }}"
                                {{ $item->id == $members->positions_id ? 'selected' : null }}>
                                {{ $item->nama_jabatan }}
                            </option>
                        @endforeach
                    </select>
                    @error('positions_id')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div>
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
