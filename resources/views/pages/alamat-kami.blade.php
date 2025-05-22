@extends('layouts.user')

@section('content')
<section class="alamat-kami-section">
  <div class="container">
    <h2>Alamat Kantor Kami</h2>

    {{-- Card 1 --}}
    <div class="alamat-card fade-right">
      <img src="{{ asset('user/images/imigrasi.jpg') }}" alt="Kantor Imigrasi Jakarta Selatan">
      <div class="alamat-content">
        <h3>Kantor Imigrasi Kelas 1 Khusus TPI Medan</h3>
        <p>Jalan Gatot Subroto KM.6,2 No.268A, Sei Sikambing C. II, Kec. Medan Helvetia, Kota Medan, Sumatera Utara</p>
        <a href="https://maps.app.goo.gl/kvVjHEV5AstdXMLY7" target="_blank">Buka Google Map</a>
      </div>
    </div>

    {{-- Card 2 --}}
    <div class="alamat-card reverse fade-left">
      <img src="{{ asset('user/images/imigrasi.jpg') }}" alt="Immigration Lounge Pondok Indah">
      <div class="alamat-content">
        <h3>Kantor Imigrasi Kelas 1 TPI Polonia</h3>
        <p>Jl. Mangkubumi No.2, A U R, Kec. Medan Maimun, Kota Medan, Sumatera Utara 20214</p>
        <a href="https://maps.app.goo.gl/UGXEKn3QHKpLFDt39" target="_blank">Buka Google Map</a>
      </div>
    </div>

    {{-- Card 3 --}}
    <div class="alamat-card fade-right">
      <img src="{{ asset('user/images/imigrasi.jpg') }}" alt="ULP Pondok Pinang">
      <div class="alamat-content">
        <h3>Unit Layanan Paspor Kualanamu - Kantor Imigrasi Kelas I Khusus TPI Medan</h3>
        <p>Ps. Enam Kuala Namu, Kec. Beringin, Kabupaten Deli Serdang, Sumatera Utara 20553</p>
        <a href="https://maps.app.goo.gl/4g438cDK4dFykeRN8" target="_blank">Buka Google Map</a>
      </div>
    </div>

    {{-- Card 4 --}}
    <div class="alamat-card reverse fade-left">
      <img src="{{ asset('user/images/imigrasi.jpg') }}" alt="Kantor 4">
      <div class="alamat-content">
        <h3>Kantor Imigrasi Belawan</h3>
        <p>Jl. Serma Hanafiah No.1, Belawan I, Medan Kota Belawan, Kota Medan, Sumatera Utara 20412</p>
        <a href="https://maps.app.goo.gl/zhcvqfrgUrQVhmFz5" target="_blank">Buka Google Map</a>
      </div>
    </div>

  </div>
</section>
@endsection