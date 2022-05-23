@extends('layouts.master')

@section('title', 'Dokumentasi')

@section('content')
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">Tambah Dokumentasi</h3>
        </div>

        <form>
            <div class="card-body">
                <div class="form-group">
                    <label for="periode">Periode</label>
                    <input type="text" class="form-control" name="periode" id="periode" placeholder="2022/2023" disabled>
                </div>
                <div class="form-group">
                    <label>Penyelenggara</label>
                    <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger"
                        style="width: 100%;">
                        <option selected="selected">UMDP</option>
                        <option>SENAT</option>
                        <option>HIMSI</option>
                        <option>HIMIF</option>
                        <option>MANCOM</option>
                        <option>HIMAKSI</option>
                        <option>HIMMI</option>
                        <option>LDK</option>
                        <option>Futsal MDP</option>
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
                        <input type="text" class="form-control datetimepicker-input" name="tanggal" id="tanggal"
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
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-info">Submit</button>
            </div>
        </form>
    </div>
@endsection
