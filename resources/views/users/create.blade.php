@extends('layouts.master')

@section('title', 'Tambah Users')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Tambah Users</h3>
        </div>

        <div class="card-body">
            <form action="{{ route('users.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Username</label>
                    <input type="text" class="form-control" name="name" id="name"
                        placeholder="Masukkan Username Anda">
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" id="email"
                        placeholder="Masukkan Email Anda">
                    @error('email')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <label>Role</label>
                <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger"
                    style="width: 100%;" name="user_levels_id">
                    <option value="">Pilih Role User</option>
                    @foreach ($user_levels as $item)
                        <option value="{{ $item->id }}">{{ $item->user_levels }}</option>
                    @endforeach
                </select>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" id="password"
                        placeholder="Masukkan Password Anda" required autocomplete="new-password">
                    @error('password')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password_confirmation">Confirm Password</label>
                    <input type="password" class="form-control" name="password_confirmation" id="password_confirmation"
                        placeholder="Masukkan Ulang Password Anda">
                    @error('password-confirmation')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-info">Submit</button>
            </form>
        </div>
        <div class="card-footer">
        </div>
    </div>
@endsection
