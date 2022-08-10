@extends('layouts.master')

@section('title', 'Edit Kerjasama')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Edit Kerjasama</h3>
        </div>
        <div class="card-body">
            <div>
                <form action="{{ route('cooperations.update', ['cooperation' => $cooperations->id]) }}" method="POST"
                    enctype="multipart/form-data">
                    @method('PATCH')
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
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nama_kegiatan">Nama Kegiatan</label>
                                <input class="form-control" type="text" name="nama_kegiatan" id="nama_kegiatan"
                                    value="{{ old('nama_kegiatan') ?? $cooperations->nama_kegiatan }}">
                            </div>
                            <div class="form-group">
                                <label>Penyelenggara</label>
                                <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger"
                                    style="width: 100%;" name="organizers">
                                    <option value="">Pilih Penyelenggara</option>
                                    @foreach ($organizers as $item)
                                        <option
                                            value="{{ $item->id }}"{{ $item->id == $cooperations->organizers_id ? 'selected' : null }}>
                                            {{ $item->penyelenggara }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Tanggal Kegiatan</label>
                                <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                    <input type="text" class="form-control datetimepicker-input" name="tanggal_kegiatan"
                                        id="tanggal_kegiatan" data-target="#reservationdate"
                                        value="{{ old('tanggal_kegiatan') ?? $cooperations->tanggal_kegiatan }}" />
                                    <div class="input-group-append" data-target="#reservationdate"
                                        data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="no_hp">No. HP</label>
                                <input class="form-control" type="text" name="no_hp" id="no_hp"
                                    value="{{ old('no_hp') ?? $cooperations->no_hp }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="lokasi">Lokasi Kegiatan</label>
                                <input type="text" name="lokasi" id="lokasi" class="form-control"
                                    value="{{ old('lokasi') ?? $cooperations->lokasi }}">
                            </div>
                            <div class="form-group">
                                <label for="surat_izin">Surat Izin</label>
                                <input type="file" name="surat_izin" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="surat_kerjasama">Surat Kerjasama</label>
                                <input type="file" name="surat_kerjasama" class="form-control">
                            </div>
                        </div>
                    </div>
                    @livewire('service')
            </div>
            <div class="card-footer">

            </div>
        </div>
    @endsection
