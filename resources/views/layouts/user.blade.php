<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Direktorat Jenderal Imigrasi</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link href="{{asset('user/images/logo1.png')}}" rel="icon">
    <link href="{{asset('user/images/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700"
        rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="{{asset('user/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="{{asset('user/lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('user/lib/animate/animate.min.css')}}" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="{{asset('user/css/style.css')}}" rel="stylesheet">

    @yield('header')
    <style>
        
    .nav-menu>li {
        position: relative;
    }

    .nav-menu>li>a {
        padding: 10px 20px;
        color: #333;
        text-decoration: none;
        display: block;
    }

    /* Dropdown level 1 */
    .nav-menu .dropdown-content {
        position: absolute;
        top: 100%;
        left: 0;
        background: white;
        min-width: 200px;
        z-index: 1000;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);

        opacity: 0;
        transform: translateY(10px);
        visibility: hidden;
        transition: opacity 0.5s ease, transform 2s ease;
        pointer-events: none;
    }

    .nav-menu .dropdown:hover>.dropdown-content {
        opacity: 1;
        transform: translateY(0);
        visibility: visible;
        pointer-events: auto;
    }

    /* Dropdown level 2 dan 3 */
    .dropdown-content .dropdown {
        position: relative;
    }

    .dropdown-content .dropdown-content-right {
        position: absolute;
        top: 0;
        left: 100%;
        min-width: 200px;
        background: white;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        z-index: 1000;

        opacity: 0;
        transform: translateX(10px);
        visibility: hidden;
        transition: opacity 0.5s ease, transform 0.5s ease;
        pointer-events: none;
    }

    .dropdown-content .dropdown:hover>.dropdown-content-right {
        opacity: 1;
        transform: translateX(0);
        visibility: visible;
        pointer-events: auto;
    }

    /* Tampilan link */
    .nav-menu a {
        padding: 10px 15px;
        display: block;
        color: #333;
        white-space: nowrap;
    }

    .nav-menu a:hover {
        background-color: rgb(17, 48, 79);
        color: #007bff;
    }

    /* Aktif */
    .menu-active>a {
        color: #007bff;
    }
    </style>

</head>

<body>

    @php
    $url = request()->segment(1);
    @endphp

    <header id="header" class="bg-[#003366] shadow-md py-2">
    <div class="container mx-auto flex items-center justify-between">
        <!-- Logo dan Judul -->
        <a href="#hero" class="flex items-center gap-3 text-white">
            <img src="{{ asset('user/images/logo2.png') }}" class="h-10 w-auto" alt="Logo" />
            <span class="text-xl font-bold whitespace-nowrap">Imigrasi Sumut</span>
        </a>

        <!-- Navigasi -->
        <nav id="nav-menu-container">
            <ul class="nav-menu flex gap-4 items-center">
                <li class="">
                    <a href="#hero" class="text-white hover:text-[#00bfff] transition">Beranda</a>
                </li>
                <li class="dropdown {{$url == 'destination' ? 'menu-active' : ''}}">
                    <a href="#" class="text-white hover:text-[#00bfff] transition">Layanan Publik</a>
                    <ul class="dropdown-content">
                        <li class="dropdown">
                            <a href="#">Berita Daerah</a>
                            <ul class="dropdown-content-right">
                                <li class="dropdown">
                                    <a href="#">Sub Daerah A</a>
                                    <ul class="dropdown-content-right">
                                        <li><a href="#">Sub Sub A1</a></li>
                                        <li><a href="#">Sub Sub A2</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Sub Daerah B</a></li>
                            </ul>
                        </li>
                        <li><a href="#news">Berita Nasional</a></li>
                    </ul>
                </li>
                <li class="">
                    <a href="#about" class="text-white hover:text-[#00bfff] transition">Informasi Publik</a>
                </li>
                <li class="">
                    <a href="#news" class="text-white hover:text-[#00bfff] transition">Berita</a>
                </li>
                 <li class="">
                    <a href="#footer" class="text-white hover:text-[#00bfff] transition">Kontak</a>
                </li>
            </ul>
        </nav>
    </div>
</header>



    <!--========================== Hero Section ============================-->
    <section id="hero">
        <div class="hero-container">
            @yield('hero')
        </div>
    </section>

    <main id="main">

        @yield('content')

    </main>

    <!--==========================
    Footer
  ============================-->
    <footer id="footer" class="bg-dark text-white pt-4">
        <div class="container">
            <div class="row">
                <!-- Alamat Kantor -->
                <div class="col-md-4 mb-4">
                    <img src="user/images/logo2.png" alt="Logo RI" width="60">
                    <p class="mt-2 mb-1">Jl. Putri HIjau No. 14<br>Medan Barat 12790</p>
                    <a href="https://maps.app.goo.gl/JzjmJnTrSmeDd9r89" target="_blank"
                        class="text-info text-decoration-none">Buka Google Maps</a>
                </div>

                <!-- Kontak dan Sosial Media -->
                <div class="col-md-4 mb-4">
                    <p class="mb-1"><strong>Email:</strong> kanim_medan@imigrasi.go.id</p>
                    <p class="mb-1"><strong>Telepon:</strong> 021-79170915</p>
                    <p class="mb-2"><strong>Whatsapp:</strong> 0811-1616-423</p>
                    <div class="d-flex gap-2">
                        <a href="https://www.instagram.com/kanimjaksel" target="_blank"
                            class="btn btn-dark rounded p-2 shadow-sm">
                            <i class="bi bi-instagram text-white fs-5"></i>
                        </a>
                        <a href="https://twitter.com/kanimjaksel" target="_blank"
                            class="btn btn-dark rounded p-2 shadow-sm">
                            <i class="bi bi-twitter text-white fs-5"></i>
                        </a>
                        <a href="https://www.facebook.com/kanimjaksel" target="_blank"
                            class="btn btn-dark rounded p-2 shadow-sm">
                            <i class="bi bi-facebook text-white fs-5"></i>
                        </a>
                        <a href="https://www.tiktok.com/@kanimjaksel" target="_blank"
                            class="btn btn-dark rounded p-2 shadow-sm">
                            <i class="bi bi-tiktok text-white fs-5"></i>
                        </a>
                        <a href="https://www.youtube.com/@kanimjaksel" target="_blank"
                            class="btn btn-dark rounded p-2 shadow-sm">
                            <i class="bi bi-youtube text-white fs-5"></i>
                        </a>
                    </div>
                </div>

                <!-- Link Terkait -->
                <div class="col-md-4 mb-4">
                    <h6 class="text-white mb-3">Link Terkait</h6>
                    <div class="row">
                        <div class="col-6">
                            <ul class="list-unstyled">
                                <li><a href="#" class="text-white d-block mb-1">Pengumuman</a></li>
                                <li><a href="#" class="text-white d-block mb-1">Ruang Berita</a></li>
                                <li><a href="#" class="text-white d-block mb-1">Kemenkumham RI</a></li>
                                <li><a href="#" class="text-white d-block mb-1">Direktorat Jendral Imigrasi</a></li>
                                <li><a href="#" class="text-white d-block mb-1">Kanwil DKI Jakarta</a></li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <ul class="list-unstyled">
                                <li><a href="#" class="text-white d-block mb-1">Immigration Lounge</a></li>
                                <li><a href="#" class="text-white d-block mb-1">Alamat Kami</a></li>
                                <li><a href="#" class="text-white d-block mb-1">Jam Pelayanan</a></li>
                                <li><a href="#" class="text-white d-block mb-1">IKM & IPK</a></li>
                                <li><a href="#" class="text-white d-block mb-1">Lapor.id</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <hr class="bg-light">
            <p class="text-center mb-0">Copyright © 2025. Imigrasi Kota Medan. All Rights Reserved.</p>
        </div>
    </footer>
    <!-- #footer -->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="{{asset('user/lib/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('user/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('user/lib/wow/wow.min.js')}}"></script>

    <script src="{{asset('user/lib/superfish/superfish.min.js')}}"></script>

    <!-- Contact Form JavaScript File -->
    {{-- <script src="{{asset('user/contactform/contactform.js')}}"></script> --}}

    <!-- Template Main Javascript File -->
    <script src="{{asset('user/js/main.js')}}"></script>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>