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
            z-index: 999999999;
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
            /* background-color: rgb(0, 0, 0); */
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
                <a class="navbar-brand" href="{{ url('/') }}#page-top"><img class="navbar-icon" id="logoMdp"
                        src="{{ asset('vendors/dist/img/MDP_TV.png') }}" width="100" height="auto"></a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                    aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="{{ url('/') }}#about">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/') }}#projects">Kegiatan</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/') }}#webinar">Webinar</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/') }}#signup">Contact</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                        @if (Route::has('register'))
                            <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        <div>
            @yield('landing-page-content')
        </div>

        <!-- Footer-->
        <footer class="footer bg-black small text-center text-white-50">
            <div class="container px-4 px-lg-5">Copyright &copy; 2020-2022 MDP TV. All rights reserved.</div>
        </footer>

        {{-- Modal Details --}}
        <div class="modalCS" id="modalKU">
            <!-- Modal content -->
            <div class="modalCS-content">
                <div class="modalCS-body">
                    <div>
                        <img class="modal-foto" id="modalFoto" src="" alt="Foto">
                        <span class="closeCS">&times;</span>
                    </div>
                    <div style="padding: 5px 10px">
                        <h2 class="modalCS-title" style="text-align: center;"></h2>
                        <p class="deskripsi"></p>
                        <a class="btn btn-sm btn-secondary text-center d-block"
                            style="width: 50%; margin:0px auto; font-size: 16px;" id="linkWebinar" href="#">Link
                            Youtube</a>
                    </div>
                </div>
            </div>

        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('vendors/dist/gray/js/scripts.js') }}"></script>

        {{-- <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script> --}}

        <script src="{{ asset('vendors/plugins/jquery/jquery.min.js') }}"></script>

        {{-- Set Data to Modal --}}
        <script>
            $(document).ready(function() {
                $(document).on('click', '.btn-details', function() {
                    let prodi = $(this).attr('data-bs-kegiatan');
                    let foto = $(this).attr('data-bs-foto');
                    let deskripsi = $(this).attr('data-bs-deskripsi');
                    let link = $(this).attr('data-bs-link');
                    $('.modalCS-title').text(prodi);
                    $("#modalFoto").attr("src", foto);
                    $(".deskripsi").text(deskripsi);
                    $("#linkWebinar").attr("href", link);
                })
            })
        </script>

        {{-- Show Modal --}}
        <script>
            // Get the modalCS
            var modal = document.getElementById("modalKU");
            var span = document.getElementsByClassName("closeCS")[0];

            $(".btn-details").on("click", function(event) {
                modal.style.display = "block";
            });

            // When the user clicks on <span> (x), close the modal
            span.onclick = function() {
                modal.style.display = "none";
            }

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
        </script>

        {{-- Text Animation --}}
        <script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
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
