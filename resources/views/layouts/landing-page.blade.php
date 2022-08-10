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
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
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
