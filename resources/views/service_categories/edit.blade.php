@extends('layouts.master')

@section('title', 'Edit Kategori Layanan')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Edit Kategori Layanan</h3>
        </div>

        <div class="card-body">
            <form action="{{ route('service_categories.update', ['service_category' => $service_categories->id]) }}"
                method="POST">
                @method('PATCH')
                @csrf
                <div class="form-group">
                    <label for="nama_layanan">Nama Layanan</label>
                    <input type="text" class="form-control" name="nama_layanan" id="nama_layanan"
                        placeholder="Masukkan Nama Layanan"
                        value="{{ old('nama_layanan') ?? $service_categories->nama_layanan }}">
                </div>

                <button type=" submit" class="btn btn-info">Submit</button>
            </form>
        </div>
        <div class="card-footer">
        </div>
    </div>
@endsection
