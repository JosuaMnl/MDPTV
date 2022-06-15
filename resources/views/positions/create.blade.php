@extends('layouts.master')

@section('title', 'Tambah Posisi')

@section('content')
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">Tambah Posisi</h3>
        </div>

        <div class="card-body">
            <form action="{{ route('positions.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nama_divisi">Posisi</label>
                    <input type="text" class="form-control" name="nama_jabatan" id="nama_jabatan"
                        placeholder="Masukkan Nama Posisi">
                </div>

                <button type="submit" class="btn btn-info">Submit</button>
            </form>
        </div>
        <div class="card-footer">
        </div>
    </div>
@endsection
