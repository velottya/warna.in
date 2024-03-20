@extends('layout.layout')
@section('title', 'Sentra')
@section('content')
<body>

  <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('{{ asset('images/headerr.jpg') }}');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 text-center">
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i
                    class="fa fa-chevron-right"></i></a></span> <span>Sentra <i class="fa fa-chevron-right"></i></span>
            </p>
            <h1 class="mb-0 bread">Sentra</h1>
          </div>
        </div>
      </div>
    </section>

    <h1 class="mb-0 bread text-center pt-5 font-weight-bold">PAKET KEGIATAN</h1>
    <section class="ftco-section">
      <div class="container">
        <div class="row">
          <div class="col-md-4 ftco-animate">
            <div class="project-wrap hotel">
            <a href="blog-single.html" class="block-20" style="background-image: url('{{ asset('images/s1_1.jpeg') }}');">
              </a>
              <div class="text p-4">
                <span class="days">13:00-15:00</span>
                <h3><a href="#">Sinau Tembang Klangenan</a></h3>
                <p><a href="/sentra11" class="btn btn-primary">Kunjungi</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="project-wrap hotel">
            <a href="blog-single.html" class="block-20" style="background-image: url('{{ asset('images/s1_2.jpeg') }}');">
              </a>
              <div class="text p-4">
                <span class="days">15:00-17:00</span>
                <h3><a href="#">Sinau Jula Juli & Ludruk Malang</a></h3>
                <p><a href="/sentra12" class="btn btn-primary">Kunjungi</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="project-wrap hotel">
            <a href="blog-single.html" class="block-20" style="background-image: url('{{ asset('images/s1_3.jpg') }}');">
              </a>
              <div class="text p-4">
                <span class="days">19:00-21:00</span>
                <h3><a href="#">Sinau Budaya Malang </a></h3>
                <p><a href="#" class="btn btn-primary">Kunjungi</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <p class="text-center"><a href="/sentra1" class="btn btn-primary">Selengkapnya</a></p>
    </section>
    <h1 class="mb-0 bread text-center font-weight-bold">PRODUK</h1>
    <section class="ftco-section">
      <div class="container">
        <div class="row">
          <div class="col-md-4 ftco-animate">
            <div class="project-wrap hotel">
              <a href="#" class="img" style="background-image: url('{{ asset('images/sundari.jpg') }}');">
                <span class="price">Rp 100.000</span>
              </a>
              <div class="text p-4">
                <h3><a href="#">Batik Sundari</a></h3><br>
                <span class="days">Kondisi : </span>Baru<br>
                <span class="days">Min. pemesanan : </span>1 Buah<br>
                <span class="days">Pre-Order 3 Hari</span><br>
                <p><a href="#" class="btn btn-primary">Detail</a></p>
              </div>
            </div>
          </div>

          <div class="col-md-4 ftco-animate">
            <div class="project-wrap hotel">
              <a href="#" class="img" style="background-image: url('{{ asset('images/tm.jpeg') }}');">
                <span class="price">Rp 75.000</span>
              </a>
              <div class="text p-4">
                <h3><a href="#">Topeng Malangan</a></h3>
                <span class="days">Kondisi : </span>Baru<br>
                <span class="days">Min. pemesanan : </span>1 Buah<br>
                <span class="days">Pre-Order 3 Hari</span><br>
                <p><a href="#" class="btn btn-primary">Detail</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
          <div class="project-wrap hotel">
              <a href="#" class="img" style="background-image: url('{{ asset('images/pab.png') }}');">
                <span class="price">Rp 145.000</span>
              </a>
              <div class="text p-4">
                <h3><a href="#">Topeng Panji Asmoro Bangun </a></h3>
                <span class="days">Kondisi : </span>Baru<br>
                <span class="days">Min. pemesanan : </span>1 Buah<br>
                <span class="days">Pre-Order 3 Hari</span><br>
                <p><a href="#" class="btn btn-primary">Detail</a></p>
              </div>
            </div>
          </div>
          
        </div>
      </div>
      <p class="text-center"><a href="/sentra2" class="btn btn-primary">Selengkapnya</a></p>
    </section>

    <section class="ftco-intro ftco-section ftco-no-pt">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-12 text-center">
            <div class="img" style="background-image: url('{{ asset('images/kampung-budaya-polowijen-persiapan.jpg') }}');">
              <div class="overlay"></div>
              <h2>KAMPUNG BUDAYA POLOWIJEN</h2>
              <p>Warisi Tradisi Lestarikan Budaya</p>
              <p class="mb-0"><a href="/contact" class="btn btn-primary px-4 py-3">Ask For A Quote</a></p>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection
