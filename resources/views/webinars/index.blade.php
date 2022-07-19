@extends('layouts.master')

@section('title', 'Tabel Periode')

@section('isActive', $scripts)

@section('content')
    <div class="card">
        <div class="card-header">
            {{-- <h3 class="card-title">Tabel Data Anggota MDPTV</h3> --}}
            <a href="{{ url('periods/create') }}" class="btn btn-info">Tambah</a>
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
            @if (session()->has('success'))
                @push('alertStyle')
                    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
                        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
                        crossorigin="anonymous">
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
                        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
                    </script>
                @endpush
                <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                    <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                        <path
                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                    </symbol>
                </svg>
                <div class="alert alert-success alert-dismissible fade show d-flex align-items-center" role="alert"
                    id="alertS">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
                        <use xlink:href="#check-circle-fill" />
                    </svg>
                    <div>
                        {{ session()->get('success') }}
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <table id="example" class="table dt-responsive nowrap" style="width:100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tahun Akademik</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($periods as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->tahun_akademik }}</td>
                            <td>
                                <a href="{{ url('periods/' . $item->id . '/edit') }}"
                                    class="btn btn-sm btn-warning">Edit</a>
                                <form method="POST" action="{{ route('periods.destroy', $item->id) }}"
                                    style="display: inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger show_confirm"
                                        data-name="{{ $item->tahun_akademik }}" data-toggle="tooltip"
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
                        title: 'Apakah Anda yakin ingin menghapus data periode ' + name + '?',
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
