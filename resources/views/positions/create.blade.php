@extends('layouts.master')

@section('title', 'Tambah Jabatan')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Tambah Jabatan</h3>
        </div>

        <div class="card-body">
            <form action="{{ route('positions.store') }}" method="POST">
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
