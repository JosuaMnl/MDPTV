@extends('layouts.master')

@section('title', 'Kerjasama')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Halaman @yield('title')</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
        <div class="card-body">
            <table id="example" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>Action</th>
                        <th>Nama Kegiatan</th>
                        <th>Tanggal Kegiatan</th>
                        <th>Penyelenggara</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cooperations as $item)
                        <tr>
                            <td>
                                <a href="{{ url('cooperations/' . $item->id) }}" class="btn btn-sm btn-info">Detail</a>
                                <a href="{{ url('cooperations/' . $item->id) . '/edit' }}"
                                    class="btn btn-sm btn-warning">Edit</a>
                            </td>
                            <td>{{ $item->nama_kegiatan }}</td>
                            <td>{{ $item->tanggal_kegiatan }}</td>
                            <td>{{ $item->organizers->penyelenggara }}</td>
                            <td><span
                                    class="{{ 'Sedang Proses' == $item->status ? 'badge bg-warning' : ('Disetujui' == $item->status ? 'badge bg-success' : ('Ditolak' == $item->status ? 'badge bg-danger' : null)) }}">{{ $item->status }}</span>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
        <div class="card-footer">

        </div>
    @endsection
