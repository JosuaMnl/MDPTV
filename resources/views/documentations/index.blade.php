@extends('layouts.master')

@section('title', 'Dokumentasi')

@section('tableDokumentasi', $tables)

@section('content')
    <div class="card">
        <div class="card-header">
            {{-- <h3 class="card-title">Halaman @yield('title')</h3> --}}
            @if (Auth::user()->user_levels->user_levels === 'MDP TV')
                <a href="{{ url('documentation/create') }}" class="btn btn-info">Tambah</a>
            @endif
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
            <table id="example" class="table nowrap" style="width:100%">
                <thead>
                    <tr>
                        <th>Nama Kegiatan</th>
                        <th>Tanggal Kegiatan</th>
                        <th>Lokasi</th>
                        <th>Semester</th>
                        <th>Keterangan</th>
                        <th>Link Dokumentasi</th>
                        <th>Penyelenggara</th>
                        <th>Action</th>
                        <th>Tahun Akademik</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($documentations as $item)
                        <tr>
                            <td>{{ $item->nama_kegiatan }}</td>
                            <td>{{ $item->tanggal_kegiatan }}</td>
                            <td>{{ $item->lokasi }}</td>
                            <td>{{ $item->semester }}</td>
                            <td>{{ $item->keterangan }}</td>
                            <td><a href="{{ $item->link_dokumentasi }}">Link</a></td>
                            <td>{{ $item->organizers->penyelenggara }}</td>
                            <td>
                                <a href="{{ url('documentation/' . $item->id . '/edit') }}"
                                    class="btn btn-sm btn-warning">Edit</a>
                                <form method="POST" action="{{ route('documentation.destroy', $item->id) }}"
                                    style="display: inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger show_confirm"
                                        data-name="{{ $item->nama_kegiatan }}" data-toggle="tooltip"
                                        title='Delete'>Delete</button>
                                </form>
                            </td>
                            <td>{{ $item->periods->tahun_akademik }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            Footer
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
                        title: 'Apakah Anda yakin ingin menghapus data dokumentasi ' + name + '?',
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
