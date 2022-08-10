@extends('layouts.master')

@section('title', 'Edit Penyelenggara')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Edit Penyelenggara</h3>
        </div>

        <div class="card-body">
            <form action="{{ route('organizers.update', ['organizer' => $organizers->id]) }}" method="POST">
                @method('PATCH')
                @csrf
                <div class="form-group">
                    <label for="penyelenggara">Nama Penyelenggara</label>
                    <input type="text" class="form-control" name="penyelenggara" placeholder="Masukkan Nama penyelenggara"
                        value="{{ old('penyelenggara') ?? $organizers->penyelenggara }}">
                    @error('penyelenggara')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <button type="submit" class="btn btn-secondary"> Simpan </button>
                </div>

            </form>
        </div>
    @endsection
