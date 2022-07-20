<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="icon" href="{{ asset('vendors/dist/img/MDPTV_Logo.png') }}" sizes="50x50">

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href="{{ asset('vendors/plugins/fontawesome-free/css/all.min.css') }}">

    @hasSection('bootstrap')
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    @endif

    <link rel="stylesheet" href="{{ asset('vendors/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">

    {{-- Date Picker --}}
    <link rel="stylesheet"
        href="{{ asset('vendors/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">

    {{-- Select2 --}}
    <link rel="stylesheet" href="{{ asset('vendors/plugins/select2/css/select2.min.css') }}">

    <link rel="stylesheet" href="{{ asset('vendors/dist/css/adminlte.min.css?v=3.2.0') }}">

    {{-- Toastr --}}
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">


    @hasSection('isActive')
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.bootstrap5.min.css">
    @endif

    @hasSection('dataTableAnggota')
        <link rel="stylesheet" href="{{ asset('vendors/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
        <link rel="stylesheet"
            href="{{ asset('vendors/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
        <link rel="stylesheet"
            href="{{ asset('vendors/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
    @endif
    @hasSection('tableDokumentasi')
        <link rel="stylesheet" href="{{ asset('vendors/dist/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('vendors/dist/css/dataTables.bootstrap5.min.css') }}">
        <link rel="stylesheet" href="{{ asset('vendors/dist/css/responsive.bootstrap5.min.css') }}">
    @endif

    <style>
        body {
            font-family: "Open Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", Helvetica, Arial, sans-serif;
        }
    </style>

    {{-- Icon --}}
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <script nonce="2635d354-606f-47f6-beb6-c95193b40239">
        (function(w, d) {
            ! function(a, e, t, r) {
                a.zarazData = a.zarazData || {}, a.zarazData.executed = [], a.zaraz = {
                    deferred: []
                }, a.zaraz.q = [], a.zaraz._f = function(e) {
                    return function() {
                        var t = Array.prototype.slice.call(arguments);
                        a.zaraz.q.push({
                            m: e,
                            a: t
                        })
                    }
                };
                for (const e of ["track", "set", "ecommerce", "debug"]) a.zaraz[e] = a.zaraz._f(e);
                a.addEventListener("DOMContentLoaded", (() => {
                    var t = e.getElementsByTagName(r)[0],
                        z = e.createElement(r),
                        n = e.getElementsByTagName("title")[0];
                    for (n && (a.zarazData.t = e.getElementsByTagName("title")[0].text), a.zarazData.x =
                        Math.random(), a.zarazData.w = a.screen.width, a.zarazData.h = a.screen.height, a
                        .zarazData.j = a.innerHeight, a.zarazData.e = a.innerWidth, a.zarazData.l = a
                        .location.href, a.zarazData.r = e.referrer, a.zarazData.k = a.screen.colorDepth, a
                        .zarazData.n = e.characterSet, a.zarazData.o = (new Date).getTimezoneOffset(), a
                        .zarazData.q = []; a.zaraz.q.length;) {
                        const e = a.zaraz.q.shift();
                        a.zarazData.q.push(e)
                    }
                    z.defer = !0;
                    for (const e of [localStorage, sessionStorage]) Object.keys(e).filter((a => a
                        .startsWith("_zaraz_"))).forEach((t => {
                        try {
                            a.zarazData["z_" + t.slice(7)] = JSON.parse(e.getItem(t))
                        } catch {
                            a.zarazData["z_" + t.slice(7)] = e.getItem(t)
                        }
                    }));
                    z.referrerPolicy = "origin", z.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(
                        JSON.stringify(a.zarazData))), t.parentNode.insertBefore(z, t)
                }))
            }(w, d, 0, "script");
        })(window, document);
    </script>
    @livewireStyles
    @stack('alertStyle')
</head>

<body
    class="dark-mode layout-navbar-fixed sidebar-closed sidebar-collapse sidebar-mini-xs layout-fixed sidebar-mini sidebar-mini-md">
    <div class="wrapper">

        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__wobble" src="{{ asset('vendors/dist/img/MDP_TV.png') }}" alt="AdminLTELogo"
                height="180" width="180">
        </div>

        <nav class="main-header navbar navbar-expand navbar-dark border-bottom-0">

            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{ url('/') }}" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{ url('/#contact') }}" class="nav-link">Contact</a>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto">

                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                    aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>
            </ul>
        </nav>

        <aside class="main-sidebar sidebar-dark-danger elevation-4">

            <a href="#" class="brand-link">
                <img src="{{ asset('vendors/dist/img/MDP_TV.png') }}" alt="MDPTV Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">MDP TV</span>
            </a>

            <div class="sidebar">

                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        {{-- <img src="{{ asset('vendors/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2"
                            alt="User Image"> --}}
                        <i class="fa fa-user-circle fa-2x mt-2 py-1"></i>
                    </div>
                    <div class="info">
                        <a href="#" class="d-block text-decoration-none">{{ Auth::user()->name }} <br>
                            {{ Auth::user()->user_levels->user_levels }}</a>
                    </div>
                </div>

                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column nav-collapse-hide-child text-sm"
                        data-widget="treeview" role="menu" data-accordion="false">

                        <li class="nav-item">
                            <a href="{{ url('dashboard') }}" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        @if (Auth::user()->user_levels->user_levels === 'MDP TV')
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-copy"></i>
                                    <p>
                                        Master
                                        <i class="fas fa-angle-left right"></i>
                                        <span class="badge badge-info right txtMaster">

                                        </span>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="master nav-item">
                                        <a href="{{ url('service_categories') }}" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Tabel Kategori Layanan</p>
                                        </a>
                                    </li>
                                    <li class="master nav-item">
                                        <a href="{{ url('positions') }}" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Tabel Jabatan</p>
                                        </a>
                                    </li>
                                    <li class="master nav-item">
                                        <a href="{{ url('study_programs') }}" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Tabel Program Studi</p>
                                        </a>
                                    </li>
                                    <li class="master nav-item">
                                        <a href="{{ url('organizers') }}" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Tabel Penyelenggara</p>
                                        </a>
                                    </li>
                                    <li class="master nav-item">
                                        <a href="{{ url('divisions') }}" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Tabel Divisi</p>
                                        </a>
                                    </li>
                                    <li class="master nav-item">
                                        <a href="{{ url('periods') }}" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Tabel Periode</p>
                                        </a>
                                    </li>
                                    <li class="master nav-item">
                                        <a href="{{ url('user_levels') }}" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Tabel Level User</p>
                                        </a>
                                    </li>
                                    <li class="master nav-item">
                                        <a href="{{ url('users') }}" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Tabel Users</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        @endif
                        @if (Auth::user()->user_levels->user_levels === 'MDP TV')
                            <li class="nav-item">
                                <a href="{{ url('members') }}" class="nav-link">
                                    <i class="nav-icon fas fa-users"></i>
                                    <p>
                                        Data Anggota
                                    </p>
                                </a>
                            </li>
                        @endif
                        @if (Auth::user()->user_levels->user_levels === 'MDP TV' || Auth::user()->user_levels->user_levels === 'Mitra')
                            <li class="nav-item">
                                @if (Auth::user()->user_levels->user_levels === 'MDP TV')
                                    <a href="{{ url('cooperations') }}" class="nav-link">
                                        <i class="nav-icon fas fa-handshake"></i>
                                        <p>
                                            Agenda Kerja Sama
                                        </p>
                                    @else
                                        <a href="{{ url('cooperations/create') }}" class="nav-link">
                                            <i class="nav-icon fas fa-tree"></i>
                                            <p>
                                                Pengajuan Kerja Sama
                                            </p>
                                @endif

                                </a>
                            </li>
                        @endif
                        @if (Auth::user()->user_levels->user_levels === 'MDP TV')
                            <li class="nav-item">
                                <a href="{{ url('kegiatans') }}" class="nav-link">
                                    <i class="nav-icon fas fa-images"></i>
                                    <p>
                                        Kegiatan MDP TV
                                    </p>
                                </a>
                            </li>
                        @endif
                        @if (Auth::user()->user_levels->user_levels === 'MDP TV')
                            <li class="nav-item">
                                <a href="{{ url('webinars') }}" class="nav-link">
                                    <i class="nav-icon fas fa-video"></i>
                                    <p>
                                        Webinar
                                    </p>
                                </a>
                            </li>
                        @endif
                        @if (Auth::user()->user_levels->user_levels === 'MDP TV')
                            <li class="nav-item">
                                <a href="{{ url('documentation') }}" class="nav-link">
                                    <i class="nav-icon fas fa-edit"></i>
                                    <p>
                                        Dokumentasi
                                    </p>
                                </a>
                            </li>
                        @endif
                        @if (Auth::user()->user_levels->user_levels === 'Multimedia')
                            <li class="nav-item">
                                <a href="{{ url('documentation/create') }}" class="nav-link">
                                    <i class="nav-icon fas fa-edit"></i>
                                    <p>
                                        Tambah Dokumentasi
                                    </p>
                                </a>
                            </li>
                        @endif
                        <li class="nav-item">
                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}" class="nav-link">
                                @csrf

                                <a class="text-decoration-none" href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    <i class="nav-icon fas fa-sign-out-alt"></i>
                                    <p>
                                        Log Out
                                    </p>
                                </a>
                            </form>
                        </li>
                    </ul>
                </nav>

            </div>

        </aside>

        <div class="content-wrapper">

            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">@yield('title')</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">@yield('title')</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>


            <section class="content">
                <div class="container-fluid">

                    @yield('content')

                </div>
            </section>

        </div>


        <aside class="control-sidebar control-sidebar-dark">

        </aside>


        <footer class="main-footer">
            <strong>Copyright &copy; 2019-2022 <a href="{{ url('/') }}">MDP TV</a>.</strong>
            All rights reserved.
        </footer>
    </div>

    <script src="{{ asset('vendors/plugins/jquery/jquery.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script>
        @if (Session::has('success'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true,
            }
            toastr.success("{{ session('success') }}");
        @endif

        @if (Session::has('error'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.error("{{ session('error') }}");
        @endif

        @if (Session::has('info'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.info("{{ session('info') }}");
        @endif

        @if (Session::has('warning'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.warning("{{ session('warning') }}");
        @endif
    </script>
    <script src="{{ asset('vendors/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('vendors/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>

    <script src="{{ asset('vendors/dist/js/adminlte.js?v=3.2.0') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
    {{-- <script src="{{ asset('vendors/dist/js/demo.js') }}"></script> --}}

    {{-- <script src="{{ asset('vendors/dist/js/pages/dashboard2.js') }}"></script> --}}
    @hasSection('isActive')
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.3.0/js/responsive.bootstrap5.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#example').DataTable();
            });
        </script>
    @endif

    @stack('modalDelete')

    @hasSection('dataTableAnggota')
        {{-- DataTables Anggota --}}
        <script src="{{ asset('vendors/plugins/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('vendors/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('vendors/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset('vendors/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('vendors/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
        <script src="{{ asset('vendors/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>

        <script src="{{ asset('vendors/plugins/jszip/jszip.min.js') }}"></script>
        <script src="{{ asset('vendors/plugins/pdfmake/pdfmake.min.js') }}"></script>
        <script src="{{ asset('vendors/plugins/pdfmake/vfs_fonts.js') }}"></script>

        <script src="{{ asset('vendors/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
        <script src="{{ asset('vendors/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
        <script src="{{ asset('vendors/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>

        {{-- DataTable Button --}}
        <script>
            $(function() {
                $("#example1").DataTable({
                    "responsive": true,
                    "lengthChange": false,
                    "autoWidth": false,
                    "buttons": ["csv", "excel", "pdf", "print", "colvis"]
                }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)')
            });
        </script>
    @endif

    @hasSection('tableDokumentasi')
        {{-- DataTables Dokumentasi --}}
        <script src="{{ asset('vendors/plugins/datatables/dokumentasi/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('vendors/plugins/datatables-bs5/js/dataTables.bootstrap5.min.js') }}"></script>
        <script src="{{ asset('vendors/plugins/datatables-responsive/js/dokumentasi/dataTables.responsive.min.js') }}">
        </script>
        <script src="{{ asset('vendors/plugins/datatables-responsive/js/responsive.bootstrap5.min.js') }}"></script>

        <script>
            $(document).ready(function() {
                $('#example').DataTable({
                    responsive: {
                        details: {
                            display: $.fn.dataTable.Responsive.display.modal({
                                header: function(row) {
                                    var data = row.data();
                                    return 'Details for ' + data[0];
                                }
                            }),
                            renderer: $.fn.dataTable.Responsive.renderer.tableAll({
                                tableClass: 'table'
                            })
                        }
                    }
                });
            });
        </script>
    @endif

    @hasSection('date')
        {{-- Date Picker --}}
        <script src="{{ asset('vendors/plugins/moment/moment.min.js') }}"></script>
        <script src="{{ asset('vendors/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
        <script>
            $(function() {
                //Date picker
                $('#reservationdate').datetimepicker({
                    format: 'YYYY-MM-DD'
                });
            });
        </script>
    @endif

    {{-- Select2 --}}
    <script src="{{ asset('vendors/plugins/select2/js/select2.full.min.js') }}"></script>

    <script>
        $(function() {
            //Initialize Select2 Elements
            $('.select2').select2();
        });
    </script>

    <script>
        var txtMaster = document.getElementsByClassName('txtMaster');
        var numItems = document.getElementsByClassName('master');
        var lengthMaster = numItems.length;

        txtMaster[0].innerHTML = lengthMaster;
    </script>
    @livewireScripts
</body>

</html>
