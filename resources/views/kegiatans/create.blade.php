@extends('layouts.master')

@section('title', 'Tambah Kegiatan MDP TV')

@section('bootstrap', $scripts)

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Tambah Kegiatan MDP TV</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('kegiatans.store') }}" method="POST" enctype="multipart/form-data">
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
                        placeholder="Masukkan Nama Kegiatan">
                </div>
                <div class="form-group">
                    <label>Deskripsi</label>
                    <textarea class="form-control" name="deskripsi" id="deskripsi" rows="5" placeholder="Masukkan Deskripsi"></textarea>
                </div>
                <div class="form-group">
                    <label for="link">Link Kegiatan</label>
                    <input type="text" class="form-control" name="link" id="link"
                        placeholder="Masukkan Link Kegiatan">
                </div>
                <button type="submit" class="btn btn-info">Submit</button>
            </form>
        </div>
        <div class="card-footer">
        </div>
    </div>
@endsection
