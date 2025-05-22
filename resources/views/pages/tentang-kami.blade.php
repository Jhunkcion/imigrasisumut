@extends('layouts.user')

@section('content')
<section class="profil-kantor-section">
  <div class="profil-container">
    <aside class="profil-sidebar">
      <ul>
        <li><a href="#sejarah">Sejarah / Profil Singkat</a></li>
        <li><a href="#maklumat">Maklumat Pelayanan</a></li>
        <li><a href="#visi-misi">Visi, Misi, Moto dan Janji Layanan</a></li>
        <li><a href="#wilayah-kerja">Wilayah Kerja</a></li>
        <li><a href="#kepala-kantor">Kepala Kantor Dari Masa Ke Masa</a></li>
      </ul>
    </aside>

    <main class="profil-content">
      <section id="maklumat">
        <h2>Maklumat Pelayanan</h2>
        <img src="{{ asset('user/images/imigrasi.jpg') }}" alt="Maklumat Pelayanan" class="responsive-image"> 
      </section>

      <section id="sejarah">
        <h2>Sejarah</h2>
        <p class="caption">Ali Anham Sjahri, B.A</p>
        <p class="text">
          Kantor Imigrasi Kelas I Khusus TPI Medan adalah instansi vertikal yang memberikan layanan keimigrasian kepada masyarakat Sumatera Utara. [...]
        </p>
        <div class="profil-gallery">
          <!-- <img src="{{ asset('user/images/gedung1.jpg') }}" alt="Gedung Kantor 1"> -->
          <!-- <img src="{{ asset('user/images/gedung2.jpg') }}" alt="Gedung Kantor 2"> -->
        </div>
      </section>

      <section id="visi-misi">
        <h2>Visi, Misi, Moto dan Janji Layanan</h2>
        <div class="icon-section">
          <div class="icon-box">
            <p>Visi</p>
          </div>
          <div class="icon-box">
            <p>Misi</p>
          </div>
          <div class="icon-box">
            <p>Janji Layanan</p>
          </div>
        </div>
      </section>

      <section id="janji-layanan">
        <div class="janji-layanan">
          <div class="gambar-layanan">
              <img src="{{ asset('user/images/janji-layanan.png') }}" alt="Janji Layanan">
          </div>
          <div class="teks-layanan">
              <h3>Janji Layanan</h3>
              <ul>
                  <li>Kepastian Persyaratan</li>
                  <li>Kepastian Waktu</li>
                  <li>Kepastian Biaya</li>
              </ul>
          </div>
        </div>
      </section>

      <section id="wilayah-kerja">
        <h3>Wilayah Kerja Kanim Jakarta Selatan</h3>
        <p>
            Wilayah Kerja Kantor Imigrasi Kelas I Khusus Non TPI Jakarta Selatan mencakup 10 kecamatan di wilayah Jakarta Selatan, yaitu: Kebayoran Baru, Kebayoran Lama, Pesanggrahan, Cilandak, Pasar Minggu, Jagakarsa, Mampang Prapatan, Pancoran, Tebet dan Setiabudi.
        </p>
        <div>
            <img src="{{ asset('user/images/wilayah-kerja.png') }}" alt="Peta Wilayah Kerja" class="wilayah-img">
        </div>
      </section>

      <section id="kepala-kantor">
        <h3>Kepala Kantor Dari Masa Ke Masa</h3>
        <div class="cards-wrapper">
          <div class="card-kepala">
              <img src="{{ asset('user/images/kepala1.png') }}" alt="Kepala 1">
              <h4>MALFUDZIN, S.H., M.H.</h4>
              <p>Masa Jabatan: 2019 – 2021</p>
          </div>
          <div class="card-kepala">
              <img src="{{ asset('user/images/kepala2.png') }}" alt="Kepala 2">
              <h4>MUHAMMAD TITO ANDRIANTO, S.H., M.H.</h4>
              <p>Masa Jabatan: 2021 – 2022</p>
          </div>
          <div class="card-kepala">
              <img src="{{ asset('user/images/kepala3.png') }}" alt="Kepala 3">
              <h4>JAMALUDDIN, S.H., M.H.</h4>
              <p>Masa Jabatan: September 2022 – April 2023</p>
          </div>
        </div>
      </section>

    </main>
  </div>
</section>
@endsection