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
    <link rel="stylesheet" href="{{ asset('css/style5.css') }}">
    <style>
        .icon {
            padding: 2px 18px 0px 2px;
        }

        .carousel {
            max-width: 50em;
            height: auto;

        }

        .txt-font {
            font-family: Arial, Helvetica, sans-serif;
        }

        .col:hover::before {
            left: 10%;
        }

        .efek-img {
            -webkit-transition-duration: 0.5s;
            -moz-transition-duration: 0.5s;
            -moz-transition-duration: 0.5s;
        }

        .efek-imgs {
            -webkit-transition-duration: 0.2s;
            -moz-transition-duration: 0.2s;
            -moz-transition-duration: 0.2s;
        }

        .efek-img:hover {
            -webkit-transform: scale(1.2);
            -moz-transform: scale(1.2);
            -o-transform: scale(1.2);
            opacity: 1;
            z-index: 2;
        }


        .efek-imgs:hover {
            -webkit-transform: scale(1.1);
            -moz-transform: scale(1.1);
            -o-transform: scale(1.1);
            opacity: 1;
            z-index: 2;
        }

        .map-wrapper {
            max-width: 800px;
            padding: 2%;
        }

        .map {
            width: 70%;
        }

        .navbar.navbar-expand-lg.navbar-light.fixed-top.navbar-shrink img #logoMdp {
            content: url(https://mdp.ac.id/mdp2020/wp-content/uploads/2021/07/logo-umdp-1-300x248-2.png);
        }
    </style>
    <style>
        /* The Modal (background) */
        .modalCS {
            display: none;
            /* Hidden by default */
            position: fixed;
            /* Stay in place */
            z-index: 1;
            /* Sit on top */
            padding-top: 2vw;
            padding-bottom: 2vw;
            /* Location of the box */
            left: 0;
            top: 0;
            width: 100%;
            /* Full width */
            height: 100%;
            /* Full height */
            overflow: auto;
            /* Enable scroll if needed */
            background-color: rgb(0, 0, 0);
            /* Fallback color */
            background-color: rgba(0, 0, 0, 0.568);
            /* Black w/ opacity */
        }

        /* Modal Content */
        .modalCS-content {
            position: relative;
            background-color: #fefefe;
            margin: auto;
            padding: 0;
            padding-bottom: 10px;
            border: 1px solid #888;
            width: 40%;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            -webkit-animation-name: animatetop;
            -webkit-animation-duration: 0.4s;
            animation-name: animatetop;
            animation-duration: 0.4s
        }

        .modal-foto {
            display: block;
            width: 100%;
            height: auto;
            margin: 0 auto;
        }

        .modalCS-body p {
            padding: 20px 30px 0 30px;
        }

        /* Add Animation */
        @-webkit-keyframes animatetop {
            from {
                top: -300px;
                opacity: 0
            }

            to {
                top: 0;
                opacity: 1
            }
        }

        @keyframes animatetop {
            from {
                top: -300px;
                opacity: 0
            }

            to {
                top: 0;
                opacity: 1
            }
        }

        /* The Close Button */
        .closeCS {
            position: absolute;
            top: 12px;
            right: 5%;
            text-decoration: none;
            color: #000;
            font-size: 35px;
            display: inline-block;
            line-height: 1;
            transition: all .1s;
        }

        .closeCS:hover,
        .closeCS:focus {
            color: rgb(255, 0, 0);
            text-decoration: none;
            cursor: pointer;
        }

        .modalCS-header {
            padding: 2px 16px;
            background-color: #5cb85c;
            color: white;
        }

        /* .modalCS-body {
            padding: 2px 16px;
        } */

        .modalCS-footer {
            padding: 2px 16px;
            background-color: #5cb85c;
            color: white;
        }

        .btnCS {
            font-family: sans-serif;
            text-transform: uppercase;
            text-align: center;
            color: #eee;
            background-color: rgb(72, 72, 72);
            font-weight: 300;
            border: none;
            display: inline-block;
            padding: 10px 15px;
            margin-left: 40%;
            transform: translate(-50%);
            margin-bottom: 30px;
        }

        @media screen and (max-width: 500px) {
            .modalCS {
                width: 100%;
                display: none;
                height: 100vh;
                background-color: rgba(0, 0, 0, .8);
            }

            .modalCS-content {
                width: 80%;
                background-color: #fff;
                box-shadow: 0 20px 40px rgba(0, 0, 0, .2);
            }

            .modal-foto {
                display: block;
                width: 100%;
                /* padding-bottom: 15px; */
                /* margin: 0 auto; */
            }

            .modalCS-body p {
                padding: 15px 20px 0 20px;
            }

            .closeCS {
                display: block;
                width: 100%;
                padding-left: 90%;
                color: #000;
                float: right;
                font-size: 20px;
                font-weight: bold;
            }

            .closeCS:hover,
            .closeCS:focus {
                color: rgb(255, 0, 0);
                text-decoration: none;
                cursor: pointer;
            }
        }
    </style>
</head>

<body id="page-top">
    <div onscroll="changeLogo()">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container px-4 px-lg-5">
                {{-- <a class="navbar-brand" href="#page-top">MDP TV</a> --}}
                <a class="navbar-brand" href="#page-top"><img class="navbar-icon" id="logoMdp"
                        src="{{ asset('vendors/dist/img/MDP_TV.png') }}" width="100" height="auto"></a>
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
            <div class="container px-4 px-lg-5">
                <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                    <div class="col-lg-6"><img class="img-fluid efek-imgs"
                            src="{{ asset('vendors/dist/gray/assets/img/lmgeps1.png') }}" alt="..." />
                    </div>
                    <div class="col-lg-6">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-left">
                                    <h4 class="text-white">LMG EPS 1</h4>
                                    <p class="mb-0 text-white-50">LMG singkatan dari Live Music Good merupakan program
                                        baru
                                        MDP TV yang dimana program ini adalah acara live music. Jadwal program ini
                                        dilakukan
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
                            src="{{ asset('vendors/dist/gray/assets/img/lmgeps2.png') }}" alt="..." /></div>
                    <div class="col-lg-6 order-lg-first">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-right">
                                    <h4 class="text-white ">LMG EPS 2</h4>
                                    <p class="mb-0 text-white-50">LMG singkatan dari Live Music Good merupakan program
                                        baru
                                        MDP TV yang dimana program ini adalah acara live music. Jadwal program ini
                                        dilakukan
                                        dalam 2 bulan sekali. Bintang tamu dan pemain band akan berbeda setiap
                                        episode.</p>
                                    <hr class="d-none d-lg-block mb-0 me-0" />
                                    <a href="https://youtu.be/Ra-N0CtldX0" target="_blank"
                                        class="btn btn-secondary">Link
                                        Youtube</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-3 py-2 px-2">
                    <button class="btn btn-info btn-lg" onclick="location='#'">For More</button>
                </div>
            </div>
        </section>
        {{-- <section class="section-cardCS text-center m-2 py-4" id="webinar">
            @foreach ($prodi as $item)
                <div class="cardCS colCS-12">
                    <img src="{{ asset('storage/' . $item->foto) }}" alt="webinar" class="cardCS__img colCS-6">
                    <div class="cardCS__details colCS-6">
                        <div class="cardCS__header">
                            <h1>{{ $item->nama_prodi }}</h1>
                        </div>
                        <div class="cardCS__text">
                            <div class="colCS-12">
                                <ul>
                                    <li><i class="fa-solid fa-calendar fa-1x icon"></i>20 Agustus 2022</li>
                                    <li><i class="fa-solid fa-location-dot fa-1x icon"></i>youtube MDPTV</li>
                                    <li><i class="fa-solid fa-wallet fa-1x icon"></i>20k</li>
                                </ul>
                                <a class="btn-details" data-bs-toggle="modal" data-bs-target="#myModal"
                                    data-bs-prodi="{{ $item->nama_prodi }}"
                                    data-bs-foto="{{ asset('storage/' . $item->foto) }}">Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </section> --}}
        {{-- <section class="text-center m-2 py-4" id="webinar">
            <h2 class="text-black mb-6 txt-font">Webinar</h2>
            <hr style="width:20%; margin: 0 auto;margin-bottom: 15px;border: 2px solid black" />
            <div class="section-cardCS" id="webinar">
                <div class="cardCS colCS-12">
                    <img src="{{ asset('storage/1.png') }}" alt="webinar" class="cardCS__img colCS-6">
                    <div class="cardCS__details colCS-6">
                        <div class="cardCS__header">
                            <h1>Webinar</h1>
                            <h2>Memahami dasar UI/UX Design Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                Architecto perspiciatis sint possimus delectus quas tempora adipisci soluta cum, debitis
                                nostrum sunt totam amet ratione aliquam culpa, quos accusamus reiciendis! Omnis.</h2>
                        </div>
                        <div class="cardCS__text">
                            <div class="cardCS__details colCS-12">
                                <ul>
                                    <li><i class="fa-solid fa-calendar fa-1x icon"></i>20 agustus 2022</li>
                                    <li><i class="fa-solid fa-location-dot fa-1x icon"></i>youtube MDPTV</li>
                                    <li><i class="fa-solid fa-wallet fa-1x icon"></i>20k</li>
                                </ul>
                                <a href="#popup" class="btn-details">Details</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="cardCS colCS-12">
                    <img src="{{ asset('storage/2.png') }}" alt="webinar" class="cardCS__img colCS-6">
                    <div class="cardCS__details colCS-6">
                        <div class="cardCS__header">
                            <h1>Webinar</h1>
                            <h2>Memahami dasar UI/UX Design</h2>
                        </div>
                        <div class="cardCS__text">
                            <div class="cardCS__details colCS-12">
                                <ul>
                                    <li><i class="fa-solid fa-calendar fa-1x icon"></i>20 agustus 2022</li>
                                    <li><i class="fa-solid fa-location-dot fa-1x icon"></i>youtube MDPTV</li>
                                    <li><i class="fa-solid fa-wallet fa-1x icon"></i>20k</li>
                                </ul>
                                <a href="#popup" class="btn-details">Details</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="cardCS colCS-12">
                    <img src="{{ asset('storage/1.png') }}" alt="webinar" class="cardCS__img colCS-6">
                    <div class="cardCS__details colCS-6">
                        <div class="cardCS__header">
                            <h1>Webinar</h1>
                            <h2>Memahami dasar UI/UX Design </h2>
                        </div>
                        <div class="cardCS__text">
                            <div class="cardCS__details colCS-12">
                                <ul>
                                    <li><i class="fa-solid fa-calendar fa-1x icon"></i>20 agustus 2022</li>
                                    <li><i class="fa-solid fa-location-dot fa-1x icon"></i>youtube MDPTV</li>
                                    <li><i class="fa-solid fa-wallet fa-1x icon"></i>20k</li>
                                </ul>
                                <a href="#popup" class="btn-details">Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="popup" id="popup">
                <div class="popup__content">
                    <div class="popup__img">
                        <img src="{{ asset('storage/1.png') }}" alt="" srcset="">
                        <a href="#webinar" class="popup__close">&times;</a>
                    </div>
                    <div class="popup__header">
                        <h1>Webinar</h1>
                        <h2>Memahami dasar UI/UX Design</h2>
                    </div>
                    <div class="popup__text">
                        <div class="bt1npopup__details">
                            <p class="para">
                                Hai sobat MDP TV!! kali ini ada acara baru loh dari MDPTV yaitu acara "Menyapa Dalam
                                Podcast" Pada acara ini kami mengulik beberapa motivator atau influencer yang bisa
                                menjadi
                                pegangan kita untuk berkarya kedepannya. Jadi jangan lupa saksikan di Youtube MDP TV!!!!
                                Stay tuned!!
                            </p>
                        </div>
                    </div>
                    <a href="" class="bt1n popup__btn">watch now</a>
                </div>
            </div>
        </section> --}}
        <section class="signup-section py-4" id="signup" style="margin-top: 50px;">
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

        <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>

        <script src="{{ asset('vendors/plugins/jquery/jquery.min.js') }}"></script>

        <script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js') }}"></script>

        <script>
            var typed = new Typed(".auto-typed", {
                strings: ["MDP TV"],
                typeSpeed: 150,
                backSpeed: 150,
                loop: true
            })
        </script>

        <script>
            var typed = new Typed(".auto-typed1", {
                strings: ["MDP TV"],
                typeSpeed: 150,
                backSpeed: 150,
                loop: true
            })
        </script>

        {{-- Change logo in navbar --}}
        <script>
            $(document).ready(function() {
                $(window).scroll(function() {
                    if ($(window).scrollTop() > 25) {
                        $(".navbar-icon").attr('src', '{{ asset('vendors/dist/img/MDP_TV.png') }}');
                    } else {
                        $(".navbar-icon").attr('src',
                            '{{ asset('vendors/dist/img/MDP_TV_BLACK.png') }}');
                    }

                    if ($(window).scrollTop() < 25) {
                        $(".navbar-icon").attr('src', '{{ asset('vendors/dist/img/MDP_TV.png') }}');
                    } else {
                        $(".navbar-icon").attr('src',
                            '{{ asset('vendors/dist/img/MDP_TV_BLACK.png') }}');
                    }

                })
            });
        </script>
</body>

</html>
