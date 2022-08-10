@extends('layouts.landing-page')

@section('landing-page-content')
    <section class="bg-dark py-4">
        <div class="section-cardCS" style="margin-top: 150px;">
            @foreach ($kegiatan as $item)
                <div class="cardCS colCS-12">
                    <img src="{{ asset('storage/foto/' . $item->foto) }}" alt="webinar" class="cardCS__img colCS-6">
                    <div class="cardCS__details colCS-6">
                        <div class="cardCS__header">
                            <h1>{{ $item->nama_kegiatan }}</h1>
                        </div>
                        <div class="cardCS__text">
                            <div class="colCS-12">
                                <p class="py-4 px-4">{{ $item->deskripsi }}</p>
                                <a class="btn-details" data-bs-toggle="modalCS" data-bs-target="#modalKU"
                                    data-bs-kegiatan="{{ $item->nama_kegiatan }}"
                                    data-bs-foto="{{ asset('storage/foto/' . $item->foto) }}"
                                    data-bs-deskripsi="{{ $item->deskripsi }}"
                                    data-bs-link="{{ $item->link }}">Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="py-2 m-4">
            {!! $kegiatan->withQueryString()->links('pagination::bootstrap-5') !!}
        </div>
    </section>
@endsection
