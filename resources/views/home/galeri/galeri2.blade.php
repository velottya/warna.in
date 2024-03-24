@extends('layout.layout')
@section('galeri', 'active')
@section('title', 'Galeri')
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
            <a href="#" class="img" style="background-image: url('{{asset('images/perguruan-tinggi.png')}}');">

            </a>
            <div class="text p-4">

              <h3><a href="#">PERGURUAN TINGGI KE KAMPUNG BUDAYA POLOWIJEN</a></h3>
              <p class="location"align="justify">Lebih dari 30 Perguruan tinggi berkunjung ke
                KBP dalam rangka penyelenggaraan belajar
                budaya bagi mahasiswanya. </p>
            </div>
          </div>
        </div>
        <div class="col-md-4 ftco-animate">
          <div class="project-wrap hotel">
            <a href="#" class="img" style="background-image: url('{{asset('images/galeri2-2.png')}}');">

            </a>
            <div class="text p-4">
              <h3><a href="#">NEGARA YANG BEKUNJUNG KE KBP</a></h3>
              <p class="location" align="justify">Negara yang berkunjung
                antara lain Thailand, Amerika, Papua Nugini,
                Uzbekistan, Afganistan, Vietnam, Kamboja, Mesir, India, Korea Selatan, Ukraina, dll.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 ftco-animate">
          <div class="project-wrap hotel">
            <a href="#" class="img" style="background-image: url('{{asset('images/galeri2-3.png')}}');">

            </a>
            <div class="text p-4">

              <h3><a href="#">PENITISAN, JAMASAN DAN RUWATAN TOPENG MALANG</a></h3>
              <p class="location" align="justify">Satu tradisi yang berkaitan topeng
yang secara turun- temurun di wariskan pada
generasi penerusnya.</p>
            </div>
          </div>
        </div>

        <div class="col-md-4 ftco-animate">
          <div class="project-wrap hotel">
            <a href="#" class="img" style="background-image: url('{{asset('images/galeri2-4.png')}}');">

            </a>
            <div class="text p-4">

              <h3><a href="#">PERINGATAN HARI TARI SEDUNIA</a></h3>
              <p class="location" align="justify">
                Peringatan Hari Tari Sedunia merupakan hari rayanya para penari yang jatuh pada tanggal 29 Mei. Semua penari bersuka cita merayakan
                hari raya.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4 ftco-animate">
          <div class="project-wrap hotel">
            <a href="#" class="img" style="background-image: url('{{asset('images/galeri2-5.png')}}');">

            </a>
            <div class="text p-4">

              <h3><a href="#">GREBEG SURO</a></h3>
              <p class="location" align="justify">Kegiatan yang di selenggarakan
                sebagai bentuk peringatan Tahun Baru Islam.
                Grebeg Suro di selenggarakan pada
                tanggal 1-10 Muharram sebagai
                wujud syukur kepada Allah SWT.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 ftco-animate">
          <div class="project-wrap hotel">
            <a href="#" class="img" style="background-image: url('{{asset('images/galeri2-6.png')}}');">

            </a>
            <div class="text p-4">

              <h3><a href="#">GEBYAK WAYANG
                TOPENG POLOWIJEN</a></h3>
              <p class="location" align="justify">Pagelaran wayang topeng yang di
                selenggarakan oleh KBP bersama warga
                LPMK Polowijen sebagai bagian rangkaian
                Bersih Desa Polowijen.</p>

            </div>
          </div>
        </div>
        <div class="col-md-4 ftco-animate">
          <div class="project-wrap hotel">
            <a href="#" class="img" style="background-image: url('{{asset('images/galeri2-7.png')}}');">

            </a>
            <div class="text p-4">

              <h3><a href="#">PANAWIDJEN
                DJAMAN BIJEN</a></h3>
              <p class="location" align="justify">Acara peringatan hari Jadi polowijen
                yang jatuh pada bulan November di
                selenggarakan dengan konsep jaman biyen
                atau tempo dulu.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 ftco-animate">
          <div class="project-wrap hotel">
            <a href="#" class="img" style="background-image: url('{{asset('images/galeri2-8.png')}}');">

            </a>
            <div class="text p-4">

              <h3><a href="#">FESTIVAL KAMPUNG
                BUDAYA POLOWIJEN</a></h3>
              <p class="location" align="justify">Festival peringatah Hari Ulang Tahun
                KBP yang di rayakan setahun sekali yang di
                meriahkan dengan berbagai macam atraksi.</p>

            </div>
          </div>
        </div>
        <div class="col-md-4 ftco-animate">
          <div class="project-wrap hotel">
            <a href="#" class="img" style="background-image: url('{{asset('images/galeri2-9.png')}}');">

            </a>
            <div class="text p-4">
              <h3><a href="#">PAMERAN DAN
                EVENT</a></h3>
              <p class="location" align="justify">KBP selama ini aktif mengikuti
                pameran yang bertemakan investasi,
                pariwisata dan perdagangan. Pameran yang
                di selenggarakan oleh Disbudpra Kota Malang.</p>

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
              <li><a href="{{url ('galeri')}}">1</a> </li>
              <li class="active"><a href="{{url ('galeri/2')}}">2</a></li>
              <li><a href="{{url ('galeri/3')}}">3</a></li>
              <li><a href="#">&gt;</a></li>
            @endguest
            @if (Auth::check() && Auth::user()->role == 'user')
              <li><a href="#">&lt;</a></li>
              <li><a href="{{url ('user/galeri')}}">1</a> </li>
              <li class="active"><a href="{{url ('user/galeri/2')}}">2</a></li>
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
