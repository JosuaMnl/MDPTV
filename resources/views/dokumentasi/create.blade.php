@extends('layouts.master')

@section('title', 'Tambah Dokumentasi')

@section('content')
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">Tambah Dokumentasi</h3>
        </div>

        <div class="card-body">
            <form action="{{ route('dokumentasi.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="periods">Periode</label>
                    <select name="periods" id="periode" class="form-control" readonly="readonly">
                        <option value="{{ $periods[0]->id }}">{{ $periods[0]->tahun_akademik }}</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="periods">Semester</label>
                    <select name="periods" id="semester" class="form-control" readonly="readonly">
                        <option value="{{ $periods[0]->id }}">{{ $periods[0]->semester }}</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Penyelenggara</label>
                    <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger"
                        style="width: 100%;" name="organizers">
                        <option value="">Pilih Penyelenggara</option>
                        @foreach ($organizers as $item)
                            <option value="{{ $item->id }}">{{ $item->penyelenggara }}</option>>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="nama_kegiatan">Nama Kegiatan</label>
                    <input type="text" class="form-control" name="nama_kegiatan" id="nama_kegiatan"
                        placeholder="Masukkan Nama Kegiatan">
                </div>
                <div class="form-group">
                    <label>Tanggal Kegiatan</label>
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" name="tanggal_kegiatan" id="tanggal"
                            data-target="#reservationdate" />
                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="lokasi">Lokasi Kegiatan</label>
                    <input type="text" class="form-control" name="lokasi" id="lokasi"
                        placeholder="Masukkan Lokasi Kegiatan">
                </div>
                <div class="form-group">
                    <label>Keterangan</label>
                    <textarea class="form-control" name="keterangan" id="keterangan" rows="3"
                        placeholder="Masukkan Keterangan"></textarea>
                </div>
                <div class="form-group">
                    <label for="link_dokumentasi">Link Dokumentasi</label>
                    <input type="text" class="form-control" name="link_dokumentasi" id="link_dokumentasi"
                        placeholder="Masukkan Link Dokumentasi">
                </div>
                <button type="submit" class="btn btn-info">Submit</button>
            </form>
        </div>
        <div class="card-footer">
        </div>
    </div>
@endsection
