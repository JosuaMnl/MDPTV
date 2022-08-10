@extends('layouts.master')

@section('title', 'Data Anggota')

@section('dataTableAnggota', $scripts)

@section('content')
    <div class="card">
        <div class="card-header">
            {{-- <h3 class="card-title">Tabel Data Anggota MDPTV</h3> --}}
            <a href="{{ url('members/create') }}" class="btn btn-info">Tambah</a>
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
            <table class="table table-bordered table-responsive" id="example1">
                <thead>
                    <tr>
                        <th>Action</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>No. WhatsApp</th>
                        <th>Alamat</th>
                        <th>Jenis Kelamin</th>
                        <th>Angkatan</th>
                        <th>Status</th>
                        <th>Program Studi</th>
                        <th>Divisi</th>
                        <th>Jabatan</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($members as $item)
                        <tr>
                            <td>
                                <a href="{{ url('members/' . $item->id . '/edit') }}"
                                    class="btn btn-sm btn-warning">Edit</a>
                                <form method="POST" action="{{ route('members.destroy', $item->id) }}"
                                    style="display: inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger show_confirm"
                                        data-name="{{ $item->nama }}" data-toggle="tooltip" title='Delete'>Delete</button>
                                </form>
                            </td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->no_hp }}</td>
                            <td>{{ $item->alamat }}</td>
                            <td>{{ $item->jenis_kelamin }}</td>
                            <td>{{ $item->angkatan }}</td>
                            <td>{{ $item->status }}</td>
                            <td>{{ $item->study_programs->nama_prodi }}</td>
                            <td>{{ $item->divisions->nama_divisi }}</td>
                            <td>{{ $item->positions->nama_jabatan }}</td>
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
                        title: 'Apakah Anda yakin ingin menghapus data anggota ' + name + '?',
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
