@extends('layouts.master')

@section('title', 'Edit Webinar')

@section('date', $date)

@section('bootstrap', $scripts)

@section('content')
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">Edit Webinar</h3>
        </div>

        <div class="card-body">
            <form action="{{ route('webinars.update', ['webinar' => $webinars->id]) }}" method="POST"
                enctype="multipart/form-data">
                @method('PATCH')
                @csrf
                <div class="form-group">
                    <label for="foto">Flyer/Foto Webinar</label>
                    <input type="file" name="foto" class="form-control">
                </div>
                <div class="form-group">
                    <label for="nama_webinar">Nama Webinar</label>
                    <input type="text" class="form-control" name="nama_webinar" id="nama_webinar"
                        placeholder="Masukkan Nama Webinar" value="{{ old('nama_webinar') ?? $webinars->nama_webinar }}">
                </div>
                <div class="form-group">
                    <label>Tanggal Webinar</label>
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" name="tanggal" id="tanggal"
                            data-target="#reservationdate" value="{{ old('tanggal') ?? $webinars->tanggal }}" />
                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="lokasi">Lokasi Webinar</label>
                    <input type="text" name="lokasi" id="lokasi" class="form-control"
                        value="{{ old('lokasi') ?? $webinars->lokasi }}">
                </div>
                <div class="form-group">
                    <label for="biaya">Biaya</label>
                    <input type="text" name="biaya" id="biaya" class="form-control"
                        value="{{ old('biaya') ?? $webinars->biaya }}">
                </div>
                <div class="form-group">
                    <label>Deskripsi</label>
                    <textarea class="form-control" name="deskripsi" id="deskripsi" rows="5" placeholder="Masukkan Deskripsi">{{ old('deskripsi') ?? $webinars->deskripsi }}</textarea>
                </div>
                <div class="form-group">
                    <label for="link">Link Webinar</label>
                    <input type="text" class="form-control" name="link" id="link"
                        placeholder="Masukkan Link Webinar" value="{{ old('link') ?? $webinars->link }}">
                </div>
                <button type="submit" class="btn btn-info">Submit</button>
            </form>
        </div>
        <div class="card-footer">
        </div>
    </div>
@endsection
