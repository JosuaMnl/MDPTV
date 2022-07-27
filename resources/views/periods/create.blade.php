@extends('layouts.master')

@section('title', 'Tambah Periode')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Tambah Periode</h3>
        </div>

        <div class="card-body">
            <form action="{{ route('periods.store') }}" method="POST">
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
                    <label for="tahun_akademik">Tahun Akademik</label>
                    <input type="text" class="form-control" name="tahun_akademik" id="tahun_akademik"
                        placeholder="Masukkan Tahun Akademik">
                </div>
                <button type="submit" class="btn btn-info">Submit</button>
            </form>
        </div>
        <div class="card-footer">
        </div>
    </div>
@endsection
