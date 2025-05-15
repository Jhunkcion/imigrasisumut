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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="{{asset('user/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="{{asset('user/lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('user/lib/animate/animate.min.css')}}" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="{{asset('user/css/app.css')}}" rel="stylesheet">
    <link href="{{asset('user/css/main.css')}}" rel="stylesheet">
</head>

<body>

    @php
    $url = request()->segment(1);
    @endphp

<header>
        <nav class="navbar">
            <div class="logo">
                <img src="{{ asset('user/images/logo2.png') }}" alt="Logo Kantor Imigrasi">
                <span>Kantor Imigrasi</span>
            </div>
            <ul>
                <li><a href="#">Beranda</a></li>
                <li class="dropdown">
                    <div class="dropdown-toggle">Profil</div>
                    <div class="dropdown-content">
                        <a href="#">Visi & Misi</a>
                        <a href="#">Struktur Organisasi</a>
                        <a href="#">Tugas & Fungsi</a>
                    </div>
                </li>
                <li class="dropdown">
                    <div class="dropdown-toggle">Layanan</div>
                    <div class="dropdown-content">
                        <a href="#">Paspor</a>
                        <a href="#">Izin Tinggal</a>
                        <a href="#">Kewarganegaraan</a>
                    </div>
                </li>
                <li><a href="#">Kontak</a></li>
            </ul>
        </nav>
    </header>
    <main id="main">
        @yield('content')
    </main>

<!-- Footer -->
<footer id="footer" class="footer">
        <div class="footer-container">
            <div class="footer-row">

                <div class="footer-col">
                    <h4>KANTOR IMIGRASI KOTA MEDAN</h4>
                    <p><strong>Alamat:</strong> Jl. Putri Hijau No. 14 Medan</p>
                    <p><strong>Telepon:</strong> (061) 8451611</p>
                    <p><strong>Fax:</strong> (061) 8463957</p>
                    <p><strong>Email:</strong> kanim_sumut@imigrasi.go.id</p>
                </div>

                <div class="footer-col">
                    <h4>Tautan Cepat</h4>
                    <ul class="list-unstyled">
                        <li><a href="#">Immigration Lounge</a></li>
                        <li><a href="#">Alamat Kami</a></li>
                        <li><a href="#">Jam Pelayanan</a></li>
                        <li><a href="#">IKM & IPK</a></li>
                        <li><a href="#">Lapor.id</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4>Ikuti Kami</h4>
                    <div class="footer-social">
                        <a href="https://www.facebook.com/kanimjaksel" target="_blank"><i
                                class="fab fa-facebook-f"></i></a>
                        <a href="https://twitter.com/kanimjaksel" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.instagram.com/kanimjaksel" target="_blank"><i
                                class="fab fa-instagram"></i></a>
                        <a href="https://www.youtube.com/@kanimjaksel" target="_blank"><i
                                class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>

            <hr>

            <div class="footer-bottom">
                &copy; {{ date('Y') }} Kantor Imigrasi Kota Medan. All Rights Reserved.
            </div>
        </div>
    </footer>

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="{{asset('user/lib/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('user/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('user/lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('user/js/app.js')}}"></script>

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