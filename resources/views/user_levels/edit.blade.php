@extends('layouts.master')

@section('title', 'Edit User Levels')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Ubah User Levels</h3>
        </div>

        <div class="card-body">
            <form action="{{ route('user_levels.update', ['user_level' => $user_levels->id]) }}" method="POST">
                @method('PATCH')
                @csrf
                <div class="form-group">
                    <label for="user_levels">User Levels</label>
                    <input type="text" class="form-control" name="user_levels" id="user_levels"
                        placeholder="Masukkan Nama Prodi" value="{{ old('user_levels') ?? $user_levels->user_levels }}">
                </div>

                <button type="submit" class="btn btn-info">Submit</button>
            </form>
        </div>
        <div class="card-footer">
        </div>
    </div>
@endsection
