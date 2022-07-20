@extends('layouts.master')

@section('title', 'Tambah Studi Program')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Tambah Studi Program</h3>
        </div>

        <div class="card-body">
            <form action="{{ route('study_programs.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nama_prodi">Studi Program</label>
                    <input type="text" class="form-control" name="nama_prodi" id="nama_prodi"
                        placeholder="Masukkan Nama Studi Program">
                </div>

                <button type="submit" class="btn btn-info">Submit</button>
            </form>
        </div>
        <div class="card-footer">
        </div>
    </div>
@endsection
