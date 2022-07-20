@extends('layouts.master')

@section('title', 'Tambah User Levels')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Tambah User Levels</h3>
        </div>

        <div class="card-body">
            <form action="{{ route('user_levels.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="user_levels">User Levels</label>
                    <input type="text" class="form-control" name="user_levels" id="user_levels"
                        placeholder="Masukkan Nama User Levels">
                </div>

                <button type="submit" class="btn btn-info">Submit</button>
            </form>
        </div>
        <div class="card-footer">
        </div>
    </div>
@endsection
