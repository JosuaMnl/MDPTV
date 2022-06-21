<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>MDP TV</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('vendors/dist/gray/assets/img/logo1.png') }}" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('vendors/dist/gray/css/styles.css') }}" rel="stylesheet" />
    <style>
        .carousel {
            max-width: 50em;
            height: auto;

        }

        .txt-font {
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="#page-top">MDP TV</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#projects">Projects</a></li>
                    <li class="nav-item"><a class="nav-link" href="#webinar">Webinar</a></li>
                    <li class="nav-item"><a class="nav-link" href="#signup">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                    @if (Route::has('register'))
                        <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
            <div class="d-flex justify-content-center">
                <div class="text-center">
                    {{-- <img src="{{ asset('vendors/dist/img/MDP_TV.png') }}" alt="" width="100%"
                    style="padding-top: 10px"> --}}
                    <h1 class="mx-auto my-0 text-uppercase">MDP TV</h1>
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
                    <h2 class="text-white mb-4">MDP TV</h2>
                    <p class="text-white-50">
                        MDP TV merupakan sebuah UKM di Universitas MDP ini yang baru dibangun di tahun 2020. MDP TV di
                        ketuai
                        oleh Marcelo Amazona dan pak Anugerah Widi sebagai pembina.
                    </p>
                </div>
            </div>
            <img class="img-fluid" src="{{ asset('vendors/dist/gray/assets/img/ipad1.png') }}" alt="..." />
        </div>
    </section>
    <!-- Projects-->
    <section class="projects-section bg-light" id="projects">
        <div class="container px-4 px-lg-5">
            <!-- Featured Project Row-->
            {{-- <div class="row gx-0 mb-4 mb-lg-5 align-items-center text-center">
                <div class="col-xl-8 col-lg-7"><img class="img-fluid mb-3 mb-lg-0 w-50"
                        src="{{ asset('vendors/dist/gray/assets/img/2.jpg') }}" alt="..." /></div>
                <div class="col-xl-4 col-lg-5">
                    <div class="featured-text text-center text-lg-left">
                        <h4>Shoreline</h4>
                        <p class="text-black-50 mb-0">Grayscale is open source and MIT licensed. This means you can use
                            it for any project - even commercial projects! Download it, customize it, and publish your
                            website!</p>
                    </div>
                </div>
            </div> --}}
            <!-- Project One Row-->
            <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                <div class="col-lg-6"><img class="img-fluid"
                        src="{{ asset('vendors/dist/gray/assets/img/lmgeps1.png') }}" alt="..." /></div>
                <div class="col-lg-6">
                    <div class="bg-black text-center h-100 project">
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto text-center text-lg-left">
                                <h4 class="text-white">LMG EPS 1</h4>
                                <p class="mb-0 text-white-50">LMG singkatan dari Live Music Good merupakan program baru
                                    MDP TV yang dimana program ini adalah acara live music. Jadwal program ini dilakukan
                                    dalam 2 bulan sekali. Bintang tamu dan pemain band akan berbeda setiap episode.</p>
                                <hr class="d-none d-lg-block mb-0 ms-0" />
                                <div class="d-grid gap-2 col-6 mx-auto">
                                    <a href="https://www.youtube.com/watch?v=QErYcmmx1AE" target="_blank"
                                        class="btn btn-secondary">Link
                                        Youtube</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Project Two Row-->
            <div class="row gx-0 justify-content-center">
                <div class="col-lg-6"><img class="img-fluid"
                        src="{{ asset('vendors/dist/gray/assets/img/lmgeps2.png') }}" alt="..." /></div>
                <div class="col-lg-6 order-lg-first">
                    <div class="bg-black text-center h-100 project">
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto text-center text-lg-right">
                                <h4 class="text-white ">LMG EPS 2</h4>
                                <p class="mb-0 text-white-50">LMG singkatan dari Live Music Good merupakan program baru
                                    MDP TV yang dimana program ini adalah acara live music. Jadwal program ini dilakukan
                                    dalam 2 bulan sekali. Bintang tamu dan pemain band akan berbeda setiap
                                    episode.</p>
                                <hr class="d-none d-lg-block mb-0 me-0" />
                                <a href="https://youtu.be/Ra-N0CtldX0" target="_blank" class="btn btn-secondary">Link
                                    Youtube</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class=" text-center" id="webinar">
        <h2 class="text-black mb-8 txt-font">Webinar</h2>
        <hr style="width:20%; margin-left:40% !important; margin-right:40% !important;" />
        <div id="carouselExampleCaptions" class="carousel slide carousel" data-bs-ride="carousel"
            style="margin: auto">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('vendors/dist/gray/assets/img/1.png') }}" class="d-block w-100"
                        alt="...">
                    <div class="carousel-caption d-none d-md-block txt-white">
                        {{-- <h5>
                            <a href="https://youtu.be/Ra-N0CtldX0" target="_blank">Daftar</a>
                        </h5> --}}
                        <a href="https://www.youtube.com/watch?v=DyeIPiRb3Ck" target="_blank"
                            class="btn btn-outline-secondary">Link Youtube</a>
                        <p></p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('vendors/dist/gray/assets/img/2.png') }}" class="d-block w-100"
                        alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <a href="https://www.youtube.com/watch?v=__1UYWwriuc&t=1805s" target="_blank"
                            class="btn btn-outline-secondary">Link Youtube</a>
                        <p></p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <!-- Signup-->
    <section class="signup-section" id="signup" style="margin-top: 50px;">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5">
                <div class="col-md-10 col-lg-8 mx-auto text-center">
                    <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
                    <h2 class="text-white mb-5">Subscribe to receive updates!</h2>
                    <a href="https://www.youtube.com/c/MDPTVindonesia" target="_blank"
                        class="btn btn-secondary btn-lg btn-block">YOUTUBE</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact-->
    <section class="contact-section bg-black">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5">
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0">Address</h4>
                            <hr class="my-4 mx-auto" />
                            <div class="small text-black-50">Jl. Rajawali 14, 30113 Palembang - Sumatera Selatan</div>
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
            <div class="social d-flex justify-content-center">
                <a class="mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                <a class="mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                <a class="mx-2" href="#!"><i class="fab fa-github"></i></a>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="footer bg-black small text-center text-white-50">
        <div class="container px-4 px-lg-5">Copyright &copy; 2020-2022 MDP TV. All rights reserved.</div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('vendors/dist/gray/js/scripts.js') }}"></script>

    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>
