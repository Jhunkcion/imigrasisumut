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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
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
        <nav class="nav container">
            <div class="nav_data">
                <a href="" class="nav_logo">
                    <img src="{{asset('')}}" alt="">Imigrasi Sumut
                </a>

                <div class="nav_toggle show-icon" id="nav-toggle">
                    <i class='bx bx-menu nav_burger'></i>
                    <i class='bx bx-chevron-left nav_close'></i>
                </div>
            </div>

            <div class="nav_menu show-menu" id="nav-menu">
                <ul class="nav_list">
                    <li><a href="#" class="nav_link">Beranda</a></li>

                    <li><a href="#" class="nav_link">Informasi Publik</a></li>

                    <li class="dropdown_item">
                        <div class="nav_link">
                            Layanan Publik<i class='bx bx-chevron-down dropdown_arrow'></i>
                        </div>
                        <ul class="dropdown_menu">
                            <li>
                                <a href="#" class="dropdown_link">Warga Negara Indonesia</a>
                            </li>
                            <li>
                                <a href="#" class="dropdown_link">Warga Negara Asing</a>
                            </li>
                        </ul>
                    </li>

                    <li><a href="#" class="nav_link">Ruang Berita</a></li>

                    <li class="dropdown_item">
                        <div class="nav_link">
                            Profil<i class='bx bx-chevron-down dropdown_arrow'></i>
                        </div>
                        <ul class="dropdown_menu">
                            <li>
                                <a href="#" class="dropdown_link">Kontak</a>
                            </li>
                            <li>
                                <a href="#" class="dropdown_link">Tentang Kami</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <main id="main">
        @yield('content')
    </main>

    <footer id="footer">
        <div class="footer-main">
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
                            <a href="https://maps.app.goo.gl/xGP6VD9sAC1KcT2J8" target="_blank">Buka Google Maps</a>
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
                </div>
            </div>
        </div>

        <!-- Copyright -->
        <div class="footer-bottom">
            &copy; 2025 Kantor Imigrasi Kota Medan. All Rights Reserved.
        </div>
    </footer>

    <!-- JavaScript Libraries -->
    <script src="{{asset('user/js/app.js')}}"></script>
    <script src="{{asset('user/js/main.js')}}"></script>
</body>

</html>