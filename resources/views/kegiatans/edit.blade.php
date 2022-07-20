@extends('layouts.master')

@section('title', 'Edit Kegiatan')

@section('bootstrap', $scripts)

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Edit Kegiatan</h3>
        </div>

        <div class="card-body">
            <form action="{{ route('kegiatans.update', ['kegiatan' => $kegiatans->id]) }}" method="POST"
                enctype="multipart/form-data">
                @method('PATCH')
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
                <div class="form-group">
                    <label for="foto">Flyer/Foto Kegiatan</label>
                    <input type="file" name="foto" class="form-control">
                </div>
                <div class="form-group">
                    <label for="nama_kegiatan">Nama Kegiatan</label>
                    <input type="text" class="form-control" name="nama_kegiatan" id="nama_kegiatan"
                        placeholder="Masukkan Nama Kegiatan"
                        value="{{ old('nama_kegiatan') ?? $kegiatans->nama_kegiatan }}">
                </div>
                <div class="form-group">
                    <label>Deskripsi</label>
                    <textarea class="form-control" name="deskripsi" id="deskripsi" rows="5" placeholder="Masukkan Deskripsi"
                        aria-valuetext="">{{ old('deskripsi') ?? $kegiatans->deskripsi }}</textarea>
                </div>
                <div class="form-group">
                    <label for="link">Link Kegiatan</label>
                    <input type="text" class="form-control" name="link" id="link"
                        placeholder="Masukkan Link Kegiatan" value="{{ old('link') ?? $kegiatans->link }}">
                </div>
                <button type="submit" class="btn btn-info">Submit</button>
            </form>
        </div>
        <div class="card-footer">
        </div>
    </div>
@endsection
