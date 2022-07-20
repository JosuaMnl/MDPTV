@extends('layouts.master')

@section('title', 'Tambah Kategori Layanan')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Tambah Kategori Layanan</h3>
        </div>

        <div class="card-body">
            <form action="{{ route('service_categories.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nama_layanan">Nama Layanan</label>
                    <input type="text" class="form-control" name="nama_layanan" id="nama_layanan"
                        placeholder="Masukkan Nama Layanan">
                </div>

                <button type="submit" class="btn btn-info">Submit</button>
            </form>
        </div>
        <div class="card-footer">
        </div>
    </div>
@endsection
