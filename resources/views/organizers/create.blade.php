@extends('layouts.master')

@section('title', 'Tambah Penyelenggara')

@section('content')
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">Tambah Penyelenggara</h3>
        </div>

        <div class="card-body">
            <form action="{{ route('organizers.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="penyelenggara">Penyelenggara</label>
                    <input type="text" class="form-control" name="penyelenggara" id="penyelenggara"
                        placeholder="Masukkan Nama Penyelenggara">
                </div>

                <button type="submit" class="btn btn-info">Submit</button>
            </form>
        </div>
        <div class="card-footer">
        </div>
    </div>
@endsection
