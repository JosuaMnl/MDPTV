@extends('layouts.master')

@section('title', 'Tabel Program Studi')

@section('isActive', $scripts)

@section('content')
    <div class="card">
        <div class="card-header">
            {{-- <h3 class="card-title">Tabel Data Anggota MDPTV</h3> --}}
            <a href="{{ url('study_programs/create') }}" class="btn btn-info">Tambah</a>
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
                        <th>Program Studi</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>

                    @foreach ($study_programs as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->nama_prodi }}</td>
                            <td>
                                <a href="{{ url('study_programs/' . $item->id . '/edit') }}"
                                    class="btn btn-sm btn-warning">Edit</a>
                                <form method="POST" action="{{ route('study_programs.destroy', $item->id) }}"
                                    style="display: inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger show_confirm"
                                        data-name="{{ $item->nama_prodi }}" data-toggle="tooltip"
                                        title='Delete'>Delete</button>
                                </form>
                            </td>
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
                        title: 'Apakah Anda yakin ingin menghapus data program studi ' + name + '?',
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
