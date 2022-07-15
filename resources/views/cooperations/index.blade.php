@extends('layouts.master')

@section('title', 'Kerjasama')

@section('isActive', $scripts)

@section('content')
    <div class="card">
        <div class="card-header">
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
            <table id="example" class="table dt-responsive nowrap" style="width:100%">
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
                                @can('view', $item)
                                    <a href="{{ url('cooperations/' . $item->id) }}" class="btn btn-sm btn-info">Detail</a>
                                @endcan
                                {{-- @can('update', $item)
                                    <a href="{{ url('cooperations/' . $item->id) . '/edit' }}"
                                        class="btn btn-sm btn-warning">Edit</a>
                                @endcan --}}
                                @can('delete', $item)
                                    <button class="btn btn-sm btn-danger btn-hapus" data-id="{{ $item->id }}"
                                        data-nama-cooperations="{{ $item->nama_kegiatan }}" data-toggle="modal"
                                        data-target="#deleteModal">Batal</button>
                                @endcan
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

        <div class="modal fade" id="deleteModal" style="z-index: 999999999">
            <div class="modal-dialog">
                <div class="modal-content bg-danger">
                    <form action="" method="post" id="formDelete">
                        @method('DELETE')
                        @csrf
                        <div class="modal-header">
                            <h4 class="modal-title">Konfirmasi Batal Kerjasama</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body" id="mb-konfirmasi">
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-outline-light" data-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-outline-light">Ya, Hapus</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script src="{{ asset('vendors/plugins/jquery/jquery.min.js') }}"></script>
        {{-- Modal --}}
        <script>
            // Generate alamat URL untuk proses hapus data program studi
            $('.btn-hapus').click(function() {
                let id = $(this).attr('data-id');
                $('#formDelete').attr('action', '/cooperations/' + id);

                // Get value attribute data-nama-prodi
                let nama_cooperations = $(this).attr('data-nama-cooperations');

                // Set text ke div id="mb-konfirmasi"
                $("#mb-konfirmasi").text("Apakah Anda yakin ingin membatalkan kerja sama kegiatan " +
                    nama_cooperations +
                    " ?");
            })



            // Jika tombol ya ditekan, maka submit form hapus
            $('#formDelete [type="submit"]').click(function() {
                $('#formDelete').submit();
            })
        </script>
    @endsection
