<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Direktorat Jenderal Imigrasi</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link href="{{asset('user/images/logo1.png')}}" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700"
        rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
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
            <button class="burger" id="burger-menu">&#9776;</button>
            <ul class="nav-links" id="nav-links">
                <li><a href="#">Beranda</a></li>
                <li class="dropdown">
                    <div class="dropdown-toggle">Profil</div>
                    <div class="dropdown-content">
                        <a href="#">Visi & Misi</a>
                        <a href="#">Struktur Organisasi</a>
                        <a href="#">Tugas & Fungsi</a>
                        <div class="dropdown nested-dropdown">
                            <div class="dropdown-toggle">Detail</div>
                            <div class="dropdown-content">
                                <a href="#">Detail 1</a>
                                <a href="#">Detail 2</a>
                                <a href="#">Detail 3</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="dropdown">
                    <div class="dropdown-toggle">Layanan</div>
                    <div class="dropdown-content">
                        <a href="#">Paspor</a>
                        <a href="#">Izin Tinggal</a>
                        <a href="#">Kewarganegaraan</a>
                        <div class="dropdown nested-dropdown">
                            <div class="dropdown-toggle">Informasi</div>
                            <div class="dropdown-content">
                                <div class="dropdown nested-dropdown">
                                    <div class="dropdown-toggle">Informasi 1</div>
                                    <div class="dropdown-content">
                                        <a href="#">Informasi 1.1</a>
                                        <a href="#">Informasi 1.2</a>
                                        <a href="#">Informasi 1.3</a>
                                    </div>
                                </div>
                                <a href="#">Informasi 2</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li><a href="#">Kontak</a></li>
            </ul>
        </nav>


    </header>
    <main id="main">
        @yield('content')
    </main>

    <!-- ========================= Footer ========================= -->
    <footer id="footer" style="background-color: #0d3359; color: #fff; padding: 40px 0;">
        <div class="footer-container">
            <div class="footer-row">

                <!-- Logo dan Alamat -->
                <div class="footer-col logo-alamat">
                    <div class="footer-logos">
                        <img src="{{ asset('user/images/logo1.png') }}" alt="Logo 1">
                        <img src="{{ asset('user/images/logo2.png') }}" alt="Logo 2">
                    </div>
                    <p><i class="fas fa-map-marker-alt"></i> <strong>Alamat Kantor</strong><br>
                        Jl. Putri Hijau No. 14<br>
                        Kota Medan 22790<br>
                        <a href="https://maps.app.goo.gl/xGP6VD9sAC1KcT2J8" target="_blank"
                            style="color: #fff; text-decoration: underline;">Buka Google Maps</a>
                    </p>
                </div>

                <!-- Kontak -->
                <div class="footer-col kontak">
                    <p><i class="fas fa-envelope"></i> <strong>Email</strong><br>kanim_sumut@imigrasi.go.id</p>
                    <p><i class="fas fa-phone"></i> <strong>Telepon</strong><br>021-79170915</p>


                    <div class="footer-social">
                        <span><i class="fas fa-share-alt"></i> <strong>Sosial Media</strong></span><br>
                        <div class="social-icons">
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-x-twitter"></i></a>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-tiktok"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Link Terkait -->
                <div class="footer-col links">
                    <h4>Link Terkait</h4>
                    <div class="link-grid">
                        <ul>
                            <li><a href="#">Pengumuman</a></li>
                            <li><a href="#">Ruang Berita</a></li>
                            <li><a href="#">Kemenkumham RI</a></li>
                            <li><a href="#">Direktorat Jendral Imigrasi</a></li>
                            <li><a href="#">Kanwil DKI Jakarta</a></li>
                        </ul>
                        <ul>
                            <li><a href="#">Immigration Lounge</a></li>
                            <li><a href="#">Alamat Kami</a></li>
                            <li><a href="#">Jam Pelayanan</a></li>
                            <li><a href="#">IKM & IPK</a></li>
                            <li><a href="#">Lapor.id</a></li>
                        </ul>
                    </div>
                </div>


                <hr style="border-color: rgba(255,255,255,0.1); margin: 30px 0;">

                <div class="footer-bottom">
                    &copy; {{ date('Y') }} Kantor Imigrasi Kota Medan. All Rights Reserved.
                </div>
            </div>
    </footer>

    <!-- JavaScript Libraries -->
    <script src="{{asset('user/js/app.js')}}"></script>
    <script src="{{asset('user/js/main.js')}}"></script>
</body>

</html>