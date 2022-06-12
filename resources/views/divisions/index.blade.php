@extends('layouts.master')

@section('title', 'Tabel Divisi')

@section('content')
    <div class="card">
        <div class="card-header">
            {{-- <h3 class="card-title">Tabel Data Anggota MDPTV</h3> --}}
            <a href="{{ url('divisions/create') }}" class="btn btn-info">Tambah</a>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped" id="example1">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Divisi</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>

                    @foreach ($divisions as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->nama_divisi }}</td>
                            <td>
                                <a href="{{ url('divisions/' . $item->id . '/edit') }}"
                                    class="btn btn-sm btn-warning">Edit</a>
                                <button class="btn btn-sm btn-danger btn-hapus" data-id="{{ $item->id }}"
                                    data-name-divisions="{{ $item->nama_divisi }}" data-toggle="modal"
                                    data-target="#deleteModal">Hapus</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="card-footer">

        </div>
    </div>
    <div class="modal fade" id="deleteModal">
        <div class="modal-dialog">
            <div class="modal-content bg-danger">
                <form action="" method="post" id="formDelete">
                    @csrf
                    @method('DELETE')
                    <div class="modal-header">
                        <h4 class="modal-title">Konfirmasi Hapus Data</h4>
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
    {{-- Delete Modal master --}}
    <script>
        // var jq = $.noConflict();
        // jq(document).ready(function() {
        //     jq(".btn-hapus").click(function() {
        //         alert("tes");
        //     });
        // });

        let btn = $('.btn-hapus')

        $('.btn-hapus').click(function() {
            let id = $(this).attr('data-id');
            $('#formDelete').attr('action', '/divisions/' + id);

            let nama_divisi = $(this).attr('data-name-divisions');
            $('#mb-konfirmasi').text('Apakah anda yakin ingin menghapus data divisi ' + nama_divisi + '?');
        })

        $('#formDelete [type="submit"]').click(function() {
            $('#formDelete').submit();
        });
    </script>
@endsection