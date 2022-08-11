@extends('layouts.landing-page')

@section('landing-page-content')
    <!-- Masthead-->
    <header class="masthead">
        <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
            <div class="d-flex justify-content-center">
                <div class="text-center">
                    <h1 class="mx-auto my-0 text-uppercase"><span class="auto-typed"></span></h1>
                    <h2 class="text-white-50 mx-auto mt-2 mb-5">Innovation Without Limit</h2>
                    <a class="btn btn-secondary" href="#about">Get Started</a>
                </div>
            </div>
        </div>
    </header>
    <!-- About-->
    <section class="about-section text-center" id="about">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-8">
                    <h2 class="text-white mb-4"><span class="auto-typed1"></span></h2>
                    <p class="text-white-50">
                        MDP TV merupakan sebuah UKM di Universitas MDP ini yang baru dibangun di tahun 2020. MDP TV
                        di
                        ketuai
                        oleh Marcelo Amazona dan pak Anugerah Widi sebagai pembina.
                    </p>
                </div>
            </div>
            <img class="img-fluid" src="{{ asset('vendors/dist/gray/assets/img/ipad1.png') }}" alt="..." />
        </div>
    </section>
    <!-- Projects-->
    <section class="projects-section bg-light py-4 m-2" id="projects">
        <h2 class="text-black mb-6 text-center">Kegiatan</h2>
        <hr style="width:20%; margin: 0 auto;margin-bottom: 15px;border: 2px solid black" />
        <div class="container px-4 px-lg-5">
            @if ($kegiatan->count() <= 1)
                <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                    <div class="col-lg-6"><img class="img-fluid efek-imgs"
                            src="{{ asset('vendors/dist/gray/img/lmgeps1.png') }}" alt="..." />
                    </div>
                    <div class="col-lg-6">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-left">
                                    <h4 class="text-white">LMG EPS 1</h4>
                                    <p class="mb-0 text-white-50">LMG singkatan dari Live Music Good merupakan program baru
                                        MDP TV yang dimana program ini adalah acara live music. Jadwal program ini dilakukan
                                        dalam 2 bulan sekali. Bintang tamu dan pemain band akan berbeda setiap episode.
                                    </p>
                                    <hr class="d-none d-lg-block mb-0 ms-0" />
                                    {{-- <div class="d-grid gap-2 col-6 mx-auto"> --}}
                                    <a href="https://www.youtube.com/watch?v=QErYcmmx1AE" target="_blank"
                                        class="btn btn-secondary">Link
                                        Youtube</a>
                                    {{-- </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Project Two Row-->
                <div class="row gx-0 justify-content-center">
                    <div class="col-lg-6"><img class="img-fluid efek-imgs"
                            src="{{ asset('vendors/dist/gray/img/lmgeps2.png') }}" alt="..." /></div>
                    <div class="col-lg-6 order-lg-first">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-right">
                                    <h4 class="text-white ">LMG EPS 2</h4>
                                    <p class="mb-0 text-white-50">LMG singkatan dari Live Music Good merupakan program baru
                                        MDP TV yang dimana program ini adalah acara live music. Jadwal program ini dilakukan
                                        dalam 2 bulan sekali. Bintang tamu dan pemain band akan berbeda setiap episode.</p>
                                    <hr class="d-none d-lg-block mb-0 me-0" />
                                    <a href="https://youtu.be/Ra-N0CtldX0" target="_blank" class="btn btn-secondary">Link
                                        Youtube</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                    <div class="col-lg-6"><img class="img-fluid efek-imgs"
                            src="{{ asset('storage/foto/' . $kegiatan[1]->foto) }}" alt="..." />
                    </div>
                    <div class="col-lg-6">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-left">
                                    <h4 class="text-white">{{ $kegiatan[1]->nama_kegiatan }}</h4>
                                    <p class="mb-0 text-white-50">{{ $kegiatan[1]->deskripsi }}
                                    </p>
                                    <hr class="d-none d-lg-block mb-0 ms-0" />
                                    {{-- <div class="d-grid gap-2 col-6 mx-auto"> --}}
                                    <a href="{{ $kegiatan[1]->link }}" target="_blank" class="btn btn-secondary">Link
                                        Youtube</a>
                                    {{-- </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Project Two Row-->
                <div class="row gx-0 justify-content-center">
                    <div class="col-lg-6"><img class="img-fluid efek-imgs"
                            src="{{ asset('storage/foto/' . $kegiatan[0]->foto) }}" alt="..." /></div>
                    <div class="col-lg-6 order-lg-first">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-right">
                                    <h4 class="text-white ">{{ $kegiatan[0]->nama_kegiatan }}</h4>
                                    <p class="mb-0 text-white-50">{{ $kegiatan[0]->deskripsi }}</p>
                                    <hr class="d-none d-lg-block mb-0 me-0" />
                                    <a href="{{ $kegiatan[0]->link }}" target="_blank" class="btn btn-secondary">Link
                                        Youtube</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            <div class="text-center mt-3 py-2 px-2">
                <button class="btn btn-sm btn-info" onclick="location='{{ url('kegiatan') }}'">For More</button>
            </div>
        </div>
    </section>
    <section class="py-4" id="webinar">
        <h2 class="text-black mb-6 text-center">Webinar</h2>
        <hr style="width:20%; margin: 0 auto;margin-bottom: 15px;border: 2px solid black" />
        <div class="section-cardCS">
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
        <div class="text-center mt-3 py-2 px-2">
            <button class="btn btn-sm btn-info" onclick="location='{{ url('webinar') }}'">For More</button>
        </div>
    </section>
    <section class="signup-section py-4" id="signup" style="margin-top: 25px;">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5">
                <div class="col-md-10 col-lg-8 mx-auto text-center">
                    <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
                    <h2 class="text-white mb-4">Subscribe to receive updates!</h2>
                    <a href="https://www.youtube.com/c/MDPTVindonesia" target="_blank"
                        class="btn btn-secondary btn-lg btn-block">YOUTUBE</a>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center maps-wrapper mt-4 efek-imgs">
            <iframe class="map"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.4458698056055!2d104.7618922148427!3d-2.9736922978342513!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e3b766d817f6461%3A0x706e9b5b5569067!2sJl.%20Rajawali%20No.14%2C%209%20Ilir%2C%20Kec.%20Ilir%20Tim.%20II%2C%20Kota%20Palembang%2C%20Sumatera%20Selatan%2030113!5e0!3m2!1sid!2sid!4v1655812362164!5m2!1sid!2sid"
                width="800" height="400" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </section>
    <!-- Contact-->
    <section class="contact-section bg-black py-5">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5">
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0">Address</h4>
                            <hr class="my-4 mx-auto" />
                            <div class="small text-black-50">Jl. Rajawali 14, 30113 Palembang - Sumatera Selatan
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-envelope text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0">Email</h4>
                            <hr class="my-4 mx-auto" />
                            <div class="small text-black-50"><a href="#!">mdptv@mhs.mdp.ac.id</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-mobile-alt text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0">Phone</h4>
                            <hr class="my-4 mx-auto" />
                            <div class="small text-black-50">+62 895-0148-8103</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
