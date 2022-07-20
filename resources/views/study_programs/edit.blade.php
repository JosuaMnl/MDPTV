@extends('layouts.master')

@section('title', 'Edit Program Studi')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Ubah Program Studi</h3>
        </div>

        <div class="card-body">
            <form action="{{ route('study_programs.update', ['study_program' => $study_programs->id]) }}" method="POST">
                @method('PATCH')
                @csrf
                <div class="form-group">
                    <label for="nama_prodi">Prodi</label>
                    <input type="text" class="form-control" name="nama_prodi" id="nama_prodi"
                        placeholder="Masukkan Nama Prodi" value="{{ old('nama_prodi') ?? $study_programs->nama_prodi }}">
                </div>

                <button type="submit" class="btn btn-info">Submit</button>
            </form>
        </div>
        <div class="card-footer">
        </div>
    </div>
@endsection
