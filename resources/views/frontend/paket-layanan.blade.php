@extends('frontend.layouts.app')
@section('content')
<section class="bg-gradient-light padding padding-top">
    <div class="center max-width-l">
      <h1 class="hero">Find the perfect plan for your business.</h1>
    </div>
    <div class="row margin-top max-width-l">
      <div class="col-one-third card card-content">
        <p class="muted">Free Forever</p>
        <img src="{{ asset('assets/frontend/media/content/pricing-1.png') }}" width="100" height="100">
        <h5>Modul + Documentation</h5>
        <h2>
          <span class="pricing-price" style="font-size: 2rem">Rp200.000,00</span>
        </h2>
        <p class="paragraph">Solusi Inovatif untuk Manajemen Antrian yang Efisien.</p>
        <ul class="space-bottom">
          <li>Pengambilan Nomor Antrian Tanpa Antri Fisik</li>
          <li>Pemindaian QR Code</li>
          <li>Analitik Dasar</li>
          <li>Kemudahan Penggunaan</li>
          <li>Dokumentasi Lengkap</li>
        </ul>
        <a href="signup.html" class="button button-secondary full-width space-top" role="button">Hubungi Kami</a>
      </div>
      <div class="col-one-third card card-content">
        <p class="muted">For Teams</p>
        <img src="{{ asset('assets/frontend/media/content/pricing-2.png') }}" width="100" height="100">
        <h5>Modul + Sistem</h5>
        <h2>
          <span class="pricing-price" style="font-size: 2rem">Rp1.500.000,00</span>
          {{-- <span class="pricing-duration muted sans">/MO</span> --}}
        </h2>
        <p class="paragraph">Memberdayakan Tim dengan Manajemen Antrian yang Mulus.</p>
        <ul class="space-bottom">
          <li>Semua Fitur Paket Free</li>
          <li>Peningkatan Sistem</li>
          <li>Dukungan Tim</li>
          <li>Perbarui Otomatis</li>
          <li>Prioritas dalam Pengembangan Fitur Baru</li>
        </ul>
        <a href="signup.html" class="button button-secondary full-width space-top" role="button">Hubungi Kami</a>
      </div>
      <div class="col-one-third card card-content">
        <p class="muted">For Enterprises</p>
        <img src="{{ asset('assets/frontend/media/content/pricing-3.png') }}" width="100" height="100">
        <h5>Modul + Sistem (custom)</h5>
        <h2>
          <span class="pricing-price" style="font-size: 2rem">Negosiasi</span>
          {{-- <span class="pricing-duration muted sans">/MO</span> --}}
        </h2>
        <p class="paragraph">Solusi Khusus untuk Manajemen Antrian Tingkat Lanjut.</p>
        <ul class="space-bottom">
          <li>Semua Fitur Paket For Teams</li>
          <li>Penyesuaian Custom</li>
          <li>Analitik Mendalam</li>
          <li>Dukungan Prioritas 24/7</li>
          <li>Keamanan Tingkat Tinggi</li>
          <p> </p>
        </ul>
        <br>
        <a href="signup.html" class="button button-primary full-width space-top mt-2" role="button">Hubungi Kami</a>
      </div>
    </div>
  </section>
  @endsection
  @push('scripts')
    <script>
      $('.header-main').removeClass('dark').addClass('light');
    </script>
  @endpush