@extends('layouts.master')

@section('title', 'Tambah Webinar')

@section('date', $date)

@section('bootstrap', $scripts)

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Tambah Webinar</h3>
        </div>

        <div class="card-body">
            <form action="{{ route('webinars.store') }}" method="POST" enctype="multipart/form-data">
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
                    <label for="foto">Flyer/Foto Webinar</label>
                    <input type="file" name="foto" class="form-control">
                </div>
                <div class="form-group">
                    <label for="nama_webinar">Nama Webinar</label>
                    <input type="text" class="form-control" name="nama_webinar" id="nama_webinar"
                        placeholder="Masukkan Nama Webinar">
                </div>
                <div class="form-group">
                    <label>Tanggal Webinar</label>
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" name="tanggal" id="tanggal"
                            data-target="#reservationdate" />
                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="lokasi">Lokasi Webinar</label>
                    <input type="text" name="lokasi" id="lokasi" class="form-control">
                </div>
                <div class="form-group">
                    <label for="biaya">Biaya</label>
                    <input type="text" name="biaya" id="biaya" class="form-control">
                </div>
                <div class="form-group">
                    <label>Deskripsi</label>
                    <textarea class="form-control" name="deskripsi" id="deskripsi" rows="5" placeholder="Masukkan Deskripsi"></textarea>
                </div>
                <div class="form-group">
                    <label for="link">Link Webinar</label>
                    <input type="text" class="form-control" name="link" id="link"
                        placeholder="Masukkan Link Webinar">
                </div>
                <button type="submit" class="btn btn-info">Submit</button>
            </form>
        </div>
        <div class="card-footer">
        </div>
    </div>
@endsection
