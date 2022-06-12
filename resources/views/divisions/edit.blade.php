@extends('layouts.master')

@section('title', 'Edit Divisi')

@section('content')
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">Ubah Divisi</h3>
        </div>

        <div class="card-body">
            <form action="{{ route('divisions.update', ['division' => $divisions->id]) }}" method="POST">
                @method('PATCH')
                @csrf
                <div class="form-group">
                    <label for="nama_divisi">Divisi</label>
                    <input type="text" class="form-control" name="nama_divisi" id="nama_divisi"
                        placeholder="Masukkan Nama Divisi" value="{{ old('nama_divisi') ?? $divisions->nama_divisi }}">
                </div>

                <button type="submit" class="btn btn-info">Submit</button>
            </form>
        </div>
        <div class="card-footer">
        </div>
    </div>
@endsection
