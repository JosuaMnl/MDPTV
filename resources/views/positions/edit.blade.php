@extends('layouts.master')

@section('title', 'Edit Posisi')

@section('content')
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">Edit Posisi</h3>
        </div>

        <div class="card-body">
            <form action="{{ route('positions.update', ['position' => $positions->id]) }}" method="POST">
                @method('PATCH')
                @csrf
                <div class="form-group">
                    <label for="nama_divisi">Posisi</label>
                    <input type="text" class="form-control" name="nama_jabatan" id="nama_jabatan"
                        placeholder="Masukkan Nama Posisi" value="{{ old('nama_jabatan') ?? $positions->nama_jabatan }}">
                </div>

                <button type=" submit" class="btn btn-info">Submit</button>
            </form>
        </div>
        <div class="card-footer">
        </div>
    </div>
@endsection
