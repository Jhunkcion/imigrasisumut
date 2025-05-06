<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>EweEweEwe</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <link href="{{asset('user/images/logo1.png')}}" rel="icon">
  <link href="{{asset('user/images/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{asset('user/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{asset('user/lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{asset('user/lib/animate/animate.min.css')}}" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{asset('user/css/style.css')}}" rel="stylesheet">

  @yield('header')


</head>

<body>

  @php
$url = request()->segment(1);
  @endphp

  <!--========================== Header ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <a href="#hero">
          <img src="{{asset('user/images/logo2.png')}}" style="margin-bottom:10px "/></img>
          <h2 class="d-inline text-light">Imigrasi Sumut</h2>
        </a>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="{{$url == 'home' ? 'menu-active' : ''}}">
            <a href="{{url('home')}}">Beranda</a>
          </li>
      
          <li class="dropdown {{$url == 'destination' ? 'menu-active' : ''}}">
            <a href="#">Layanan Publik</a>
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
              <li><a href="#">Berita Nasional</a></li>
            </ul>
          </li>
      
          <li class="{{$url == 'contact' ? 'menu-active' : ''}}">
            <a href="{{url('contact')}}">Informasi Publik</a>
          </li>
        </ul>
      </nav>

<!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

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
  <footer id="footer">
    <div class="footer-top">
      <div class="container">

      <div class="container">
    <div class="row">
      <div class="col-md-4">
        <img src="logo_ri.png" alt="Logo RI" width="60">
        <p class="mt-2">Jl. Hj. Tuty Alawiyah No. 207<br>Jakarta Selatan 12790</p>
        <a href="#" class="text-info">Buka Google Maps</a>
      </div>
      <div class="col-md-4">
        <p><strong>Email:</strong> kanim_jaksel@imigrasi.go.id</p>
        <p><strong>Telepon:</strong> 021-79170915</p>
        <p><strong>Whatsapp:</strong> 0811-1616-423</p>
        <div class="d-flex gap-2">
          <a href="#" class="text-white"><i class="bi bi-instagram"></i></a>
          <a href="#" class="text-white"><i class="bi bi-x"></i></a>
          <a href="#" class="text-white"><i class="bi bi-facebook"></i></a>
          <a href="#" class="text-white"><i class="bi bi-tiktok"></i></a>
          <a href="#" class="text-white"><i class="bi bi-youtube"></i></a>
        </div>
      </div>
      <div class="col-md-4">
        <h6>Link Terkait</h6>
        <ul class="list-unstyled">
          <li><a href="#" class="text-white">Pengumuman</a></li>
          <li><a href="#" class="text-white">Ruang Berita</a></li>
          <li><a href="#" class="text-white">Kemenkumham RI</a></li>
          <li><a href="#" class="text-white">Direktorat Jendral Imigrasi</a></li>
          <li><a href="#" class="text-white">Kanwil Sumatra Utara</a></li>
        </ul>
      </div>
    </div>
    <hr class="bg-light">
    <p class="text-center mb-0">Copyright © 2024. Imigrasi Jakarta Selatan. All Rights Reserved.</p>
  </div>
  </footer><!-- #footer -->

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

</body>
</html>
