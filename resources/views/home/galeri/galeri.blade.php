@extends('layout.layout')
@section('title', 'Asesmen')
@section('content')
<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('{{asset('images/galeri-cover.jpg')}}');">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
        <div class="col-md-9 ftco-animate pb-5 text-center">
          <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i
                  class="fa fa-chevron-right"></i></a></span> <span>Galeri <i class="fa fa-chevron-right"></i></span>
          </p>
          <h1 class="mb-0 bread">Galeri</h1>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section">
    <div class="container">
      <div class="row">
        <div class="col-md-4 ftco-animate">
          <div class="project-wrap hotel">
            <a href="#" class="img" style="background-image: url('{{asset ('images/tembang-mocapat.png')}}');">

            </a>
            <div class="text p-4">

              <h3><a href="#">SINAU TAMBANG MACOPAT JAWA</a></h3>
              <p class="location" align="justify">Kegiatan ini rutin diselanggarakan tiap Jumat Malam di asuh oleh Ki Suryono yang
                dengan sabar melatihkan mocopat disertai dengan tembang-tembang. </p>
            </div>
          </div>
        </div>
        <div class="col-md-4 ftco-animate">
          <div class="project-wrap hotel">
            <a href="#" class="img" style="background-image: url('{{asset('images/budaya-tandur.png')}}');">

            </a>
            <div class="text p-4">
              <h3><a href="#">BUDAYA TANDUR, WIWIT DAN METIK</a></h3>
              <p class="location" align="justify">kegiatan menanam dan memanen padi di sekitar KBP. Waktu tergantung pada penggarapan
                lahan sawah yang mau di tamani atau padi yang siap di panen</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 ftco-animate">
          <div class="project-wrap hotel">
            <a href="#" class="img" style="background-image: url('{{asset('images/hari-tari-sedunia.png')}}');">

            </a>
            <div class="text p-4">

              <h3><a href="#">PERINGATAN HARI TARI SEDUNIA</a></h3>
              <p class="location" align="justify">Peringatan Hari tari Sedunia di KBP selalu meriah dan disuport mahasiswa Jurusan Seni
                Tari dan Musik UM, Sanggar
                Tunjung Sekar, Sanggar Seni Tari Sanggar.</p>
            </div>
          </div>
        </div>

        <div class="col-md-4 ftco-animate">
          <div class="project-wrap hotel">
            <a href="#" class="img" style="background-image: url('{{asset('images/temu-topeng.png')}}');">

            </a>
            <div class="text p-4">

              <h3><a href="#">TEMU TOPENG DAN SESEKARAN TOPENG MALANG</a></h3>
              <p class="location" align="justify">
                Temu topeng adalah agenda rutin tahunan yang di selenggarkan oleh KBP agar para seniman topeng Malang.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4 ftco-animate">
          <div class="project-wrap hotel">
            <a href="#" class="img" style="background-image: url('{{asset('images/perpustakaan.png')}}');">

            </a>
            <div class="text p-4">

              <h3><a href="#">PERPUSTAKAAN KAMPUNG BUDAYA POLOWIJEN</a></h3>
              <p class="location" align="justify">Perpustakaan KBP di gagas dari Himpunan Mahasiswa Jurusan
                Akuntansi Universitas Widyagama.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 ftco-animate">
          <div class="project-wrap hotel">
            <a href="#" class="img" style="background-image: url('{{asset('images/galeri-foto.png')}}');">

            </a>
            <div class="text p-4">

              <h3><a href="#">GALERI FOTO DAN SENI KBP</a></h3>
              <p class="location" align="justify">Galeri Foto dan seni yang ada di KBP merupakan hasil dokumentasi kegiatan KBP yang
                berkaitan dengan proses kegiatan.</p>

            </div>
          </div>
        </div>
        <div class="col-md-4 ftco-animate">
          <div class="project-wrap hotel">
            <a href="#" class="img" style="background-image: url('{{asset('images/duta-budaya.png')}}');">

            </a>
            <div class="text p-4">

              <h3><a href="#">SEKOLAH DUTA BUDAYA</a></h3>
              <p class="location" align="justify">Sekolah Duta Budaya adalah sekolah informal yang dipersiapkan kepada generasi muda
                untuk mengetahui budaya daerah yang ada di Malang Raya</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 ftco-animate">
          <div class="project-wrap hotel">
            <a href="#" class="img" style="background-image: url('{{asset('images/KriyaTopengMalang.png')}}');">

            </a>
            <div class="text p-4">

              <h3><a href="#">KRIYA TOPENG MALANG</a></h3>
              <p class="location" align="justify">Kegiatan ini rutin diselanggarakan tiap Jumat Malam di asuh oleh Ki Suryono yang
                dengan sabar melatihkan mocopat disertai dengan tembang-tembang. </p>

            </div>
          </div>
        </div>
        <div class="col-md-4 ftco-animate">
          <div class="project-wrap hotel">
            <a href="#" class="img" style="background-image: url('{{asset('images/gladitaritopeng.png')}}');">

            </a>
            <div class="text p-4">
              <h3><a href="#">GLADHI TARI TOPENG MALANG</a></h3>
              <p class="location" align="justify">Kegiatan rutin yang dilakukan oleh anak-anak, ramaja dan ibu-ibu KBP yang rutin
                berlatih tari topeng serta tari tari tradisional pada hari Sabtu Malang dan Minggu pagi.</p>

            </div>
          </div>
        </div>
      </div>
      <div class="row mt-5">
        <div class="col text-center">
          <div class="block-27">
            <ul>
              @guest
                <li><a href="#">&lt;</a></li>
                <li class="active"><a href="{{url ('galeri')}}">1</a> </li>
                <li><a href="{{url ('galeri/2')}}">2</a></li>
                <li><a href="{{url ('galeri/3')}}">3</a></li>
                <li><a href="#">&gt;</a></li>
              @endguest
              @if (Auth::check() && Auth::user()->role == 'user')
                <li><a href="#">&lt;</a></li>
                <li class="active"><a href="{{url ('user/galeri')}}">1</a> </li>
                <li><a href="{{url ('user/galeri/2')}}">2</a></li>
                <li><a href="{{url ('user/galeri/3')}}">3</a></li>
                <li><a href="#">&gt;</a></li>
              @endif
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-intro ftco-section ftco-no-pt">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-12 text-center">
          <div class="img" style="background-image: url('{{asset('images/ask.jpg')}}');">
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
