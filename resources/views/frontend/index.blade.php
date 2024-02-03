@extends('frontend.layouts.app')
@section('content')
<section class="bg-image-hero center-tablet dark overlay-hero">
    <div class="full-screen -margin-bottom middle padding padding-top-tablet">
      <div class="row max-width-l">
        <div class="col-one-half middle">
          <div>
            <h1 class="hero">AntreIn</h1>
            <p class="lead">AntreIn merupakan produk yang menawarkan sebuah kemudahan dalam suatu bentuk modul
              tambahan dari sistem Point of Sales. Modul ini memberikan sebuah Solusi untuk suatu aktifitas transaksi
              yang membutuhkan antrian.</p>
            <a href="signup.html" class="button button-primary space-top" role="button">Mulai</a>
          </div>
        </div>
        <div class="col-one-half middle">
          <img src="{{ asset('assets/frontend/media/bg/image-01.png')}}" alt="AntreIn">
        </div>
      </div>
    </div>
    <div class="padding">
      <div class="row margin-bottom max-width-l">
        <div class="col-one-half middle">
          <h3>Berbentuk Modul</h3>
          <p class="paragraph">Sehingga perusahaan yang sudah mempunyai sistem berjalan dapat dengan mudah menggunakan
            AntreIn tampa harus melakukan pengembangan lagi.</p>
        </div>
        <div class="col-one-half">
          <img src="{{ asset('assets/frontend/media/bg/image-02.png')}}" alt="Berbentuk Modul">
        </div>
      </div>
      <div class=" row max-width-l reverse-order">
        <div class="col-one-half">
          <img src="{{ asset('assets/frontend/media/bg/image-03.png')}}" alt="Dapat Diakses Lewat Gadget">
        </div>
        <div class="col-one-half middle">
          <h3>Dapat Diakses Lewat Gadget</h3>
          <p class="paragraph">Pelanggan dapat dengan mudah mengajukan antrian hanya dengan mengakses handphone yang
            mereka pegang, dan juga dapat memperlihatkan nomor antrian secara langsung.</p>
          </div>
        </div>
      </div>
  </section>

  <section class="bg-gradient-light -margin-bottom-2 overlay padding">
    <div class="center max-width-m">
      <h2>Semua hal yang ada di AntreIn</h2>
      <!-- <p class="paragraph">Opalin helps you present your business in a wide variety of ways. Display full-width images, divide content in a single or multiple columns, anything to make your product or service stand out!</p> -->
    </div>
    <div class="margin-top max-width-l">
      <img class="rounded shadow-l" src="{{ asset('assets/frontend/media/content/landingantrein.jpeg') }}">
    </div>
  </section>

  <section class="bg-gradient-dark center dark padding">
    <div class="margin-top max-width-l">
      <div class="margin-bottom max-width-m">
      </div>

    </div>
  </section>

  <section class="bg-gradient-light padding">
    <div class="center max-width-l">
      <h2>5 Alasan mengapa kamu butuh AntreIn?</h2>
      <!-- <p class="paragraph">At vero eos et accusamus et iusto odio dignissimos ducimus.</p> -->
    </div>
    <div class="row margin-top">
      <div class="col-one-fourth card card-content center">
        <!-- <p class="muted">Step 1</p> -->
        <h4>Waktu Tunggu</h4>
        <p>Ga bakal bikin bete karena kamu bebas mau nunggu dimanapun.</p>
      </div>
      <div class="col-one-fourth card card-content center">
        <!-- <p class="muted">Step 2</p> -->
        <h4>Layanan Lebih Efisien</h4>
        <p>Layanan jadi lebih cepat karena ga banyak campur tangan manusia.</p>
      </div>
      <div class="col-one-fourth card card-content center">
        <!-- <p class="muted">Step 3</p> -->
        <h4>Pengalaman Yang Transparan</h4>
        <p>Kamu dikasih tau lewat notifikasi, jadi lebih jelas statusnya dan bikin puas karena bisa
          diandelin.</p>
      </div>
      <div class="col-one-fourth card card-content center">
        <!-- <p class="muted">Step 3</p> -->
        <h4>Responsif dan Adaptif</h4>
        <p>Cuma pake handphone kamu bisa mudah kalau antri loh.</p>
      </div>
      <div class="col-one-fourth card card-content center">
        <!-- <p class="muted">Step 4</p> -->
        <h4>Inovasi</h4>
        <p>Platform ini keren banget, bisa ngebantu buat ngatasi masalah antrian yang suka bikin
          kesel. Jadi, gak bakal lagi deh pelanggan atau penyedia layanan keganggu sama antrian yang bikin rugi waktu.
        </p>
      </div>
    </div>
  </section>
  @endsection