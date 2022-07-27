@extends('layouts.landing-page')

@section('landing-page-content')
    <section class="bg-dark py-4">
        <div class="section-cardCS" style="margin-top: 150px;">
            @foreach ($webinar as $item)
                <div class="cardCS colCS-12">
                    <img src="{{ asset('storage/foto/' . $item->foto) }}" alt="webinar" class="cardCS__img colCS-6">
                    <div class="cardCS__details colCS-6">
                        <div class="cardCS__header">
                            <h1>{{ $item->nama_webinar }}</h1>
                        </div>
                        <div class="cardCS__text">
                            <div class="colCS-12">
                                <ul>
                                    <li><i
                                            class="fa-solid fa-calendar fa-1x icon"></i>{{ date('d F Y', strtotime($item->tanggal)) }}
                                    </li>
                                    <li><i class="fa-solid fa-location-dot fa-1x icon"></i>{{ $item->lokasi }}</li>
                                    <li><i class="fa-solid fa-wallet fa-1x icon"></i>
                                        @if ($item->biaya === 0)
                                            Rp. -
                                        @else
                                            Rp. {{ number_format($item->biaya, 0, '', '.') }}
                                        @endif
                                    </li>
                                </ul>
                                <a class="btn-details" data-bs-toggle="modalCS" data-bs-target="#modalKU"
                                    data-bs-kegiatan="{{ $item->nama_webinar }}"
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
            {!! $webinar->withQueryString()->links('pagination::bootstrap-5') !!}
        </div>
    </section>
@endsection
