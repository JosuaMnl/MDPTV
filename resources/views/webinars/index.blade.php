@extends('layouts.master')

@section('title', 'Webinar')

@section('isActive', $scripts)

@section('content')
    <div class="card">
        <div class="card-header">
            {{-- <h3 class="card-title">Tabel Data Anggota MDPTV</h3> --}}
            <a href="{{ url('webinars/create') }}" class="btn btn-info">Tambah</a>
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
            <table id="example" class="table dt-responsive nowrap" style="width:100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Foto/Flyer</th>
                        <th>Nama Webinar</th>
                        <th>Tanggal</th>
                        <th>Action</th>
                        <th>Lokasi</th>
                        <th>Biaya</th>
                        <th>Deskripsi</th>
                        <th>Link</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($webinars as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td><img src="{{ asset('storage/foto/' . $item->foto) }}" alt="Foto" width="100px"></td>
                            <td>{{ $item->nama_webinar }}</td>
                            <td>{{ $item->tanggal }}</td>
                            <td>
                                <a href="{{ url('webinars/' . $item->id . '/edit') }}"
                                    class="btn btn-sm btn-warning">Edit</a>
                                <form method="POST" action="{{ route('webinars.destroy', $item->id) }}"
                                    style="display: inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger show_confirm"
                                        data-name="{{ $item->nama_webinar }}" data-toggle="tooltip"
                                        title='Delete'>Delete</button>
                                </form>
                            </td>
                            <td>{{ $item->lokasi }}</td>
                            <td>{{ $item->biaya }}</td>
                            <td>{{ $item->deskripsi }}</td>
                            <td>{{ $item->link }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="card-footer">

        </div>
    </div>

    {{-- Delete Modal --}}
    @push('modalDelete')
        <script type="text/javascript">
            $('.show_confirm').click(function(event) {
                var form = $(this).closest("form");
                var name = $(this).data("name");
                event.preventDefault();
                swal({
                        title: 'Apakah Anda yakin ingin menghapus data ' + name + '?',
                        text: "If you delete this, it will be gone forever.",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    })
                    .then((willDelete) => {
                        if (willDelete) {
                            form.submit();
                        }
                    });
            });
        </script>
    @endpush
@endsection
