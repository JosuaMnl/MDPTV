@extends('layouts.master')

@section('title', 'Tambah Periode')

@section('content')
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">Tambah Periode</h3>
        </div>

        <div class="card-body">
            <form action="{{ route('periods.update', ['period' => $periods->id]) }}" method="POST">
                @method('PATCH')
                @csrf
                <div class="form-group">
                    <label for="tahun_akademik">Tahun Akademik</label>
                    <input type="text" class="form-control" name="tahun_akademik" id="tahun_akademik"
                        placeholder="Masukkan Tahun Akademik"
                        value="{{ old('tahun_akademik') ?? $periods->tahun_akademik }}">
                </div>
                <button type="submit" class="btn btn-info">Submit</button>
            </form>
        </div>
        <div class="card-footer">
        </div>
    </div>
@endsection
