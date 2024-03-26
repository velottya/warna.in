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
            <a href="#" class="img" style="background-image: url('{{asset('images/galeri3-1.png')}}');">

            </a>
            <div class="text p-4">

              <h3><a href="#">PASAR MINGGU LEGI
                JAJAN TRADISIONAL</a></h3>
              <p class="location" align="justify">Pasar Minggu Legi adalah pasar Jajan
                Tradisional. Pasar ini di buka khusus sebulan
                sekali dalam hitungan kalender jawa oleh warga KBP.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 ftco-animate">
          <div class="project-wrap hotel">
            <a href="#" class="img" style="background-image: url('{{asset('images/galeri3-2.png')}}');">

            </a>
            <div class="text p-4">
              <h3><a href="#">PASAR TOPENG
                KAMPUNG BUDAYA
                POLOWIJEN</a></h3>
              <p class="location" align="justify">Pasar topeng di resmikan oleh Plt. Walikota
                Malang, Sutiaji pada tanggal 31 juni 2017 sebagai wadah para seniman topeng.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 ftco-animate">
          <div class="project-wrap hotel">
            <a href="#" class="img" style="background-image: url('{{asset('images/galeri3-3.png')}}');">

            </a>
            <div class="text p-4">

              <h3><a href="#">SARASEHAN
                KAMPUNG BUDAYA
                POLOWIJEN</a></h3>
              <p class="location" align="justify">Kegiatan yang mambahas tentang
                persoalan budaya yang di hadiri dari berbagai
                kalangan masyarakat.</p>
            </div>
          </div>
        </div>

        <div class="col-md-4 ftco-animate">
          <div class="project-wrap hotel">
            <a href="#" class="img" style="background-image: url('{{asset('images/galeri3-4.png')}}');">

            </a>
            <div class="text p-4">

              <h3><a href="#">SAMBANG KAMPUNG
                BUDAYA POLOWIJEN</a></h3>
              <p class="location" align="justify">
                Sambang
                Kampung selalu di awali dengan MOU atau
                kerjasama penyelenggaraan kegiatan, di lakukan secara
                resmi dari instansi pemerintah
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4 ftco-animate">
          <div class="project-wrap hotel">
            <a href="#" class="img" style="background-image: url('{{asset('images/galeri3-5.png')}}');">

            </a>
            <div class="text p-4">

              <h3><a href="#">KOTHEKAN MUSIK
                DOLANAN</a></h3>
              <p class="location" align="justify">Kegiatan permainan alat music yang
                menggunakan bamboo lesung dan kendang.
                Umumnya secara modern disebut dengan
                perkusi.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 ftco-animate">
          <div class="project-wrap hotel">
            <a href="#" class="img" style="background-image: url('{{asset('images/galeri3-6.png')}}');">

            </a>
            <div class="text p-4">

              <h3><a href="#">PERMAINAN
                TRADISIONAL</a></h3>
              <p class="location" align="justify">Kegiatan pelestarian tentang ragam
                macam pernainan tradisioal tempo dulu.
                Permaian tradisional yang penuh dengan
                sarat makna di rekonstruksi.</p>

            </div>
          </div>
        </div>
        <div class="col-md-4 ftco-animate">
          <div class="project-wrap hotel">
            <a href="#" class="img" style="background-image: url('{{asset('images/galeri3-7.png')}}');">

            </a>
            <div class="text p-4">

              <h3><a href="#">KRIYA BATIK
                MALANG</a></h3>
              <p class="location" align="justify">Kriya batik polowijen telah merekrut kurang
                lebih 50 orang untuk belajar membatik dalam
                kegiatan workshop kriya batik Polowijen
                sudah sebanyak 4 kali gelombang pelatihan.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 ftco-animate">
          <div class="project-wrap hotel">
            <a href="#" class="img" style="background-image: url('{{asset('images/galeri3-8.png')}}');">

            </a>
            <div class="text p-4">

              <h3><a href="#">PERESMIAN
                KAMPUNG BUDAYA
                POLOWIJEN</a></h3>
              <p class="location" align="justify">Kampung Budaya Polowijen diresmikan para
                daynggal 2 April 2017 selah 1 hari HUT Kota
                Malang oleh Walikota Malang, H.Moh Anton.</p>
            </div>
          </div>
        </div>

        {{-- <div class="col-md-4 ftco-animate">
          <div class="project-wrap hotel">
            <a href="#" class="img" style="background-image: url('{{asset('images/galeri3-9.png')}}');">
            </a>
            <div class="text p-4">
              <h3><a href="#">PROSES
                PEMBANGUNAN</a></h3>
              <p class="location" align="justify">Menyadari seni budaya yang makin lama
                makin punah, warga mendirikan
                Kampung Budaya Polowijen untuk melakukan
                pelestarian budaya.</p>
            </div>
          </div>
        </div> --}}

        @foreach($galeri as $item)
        <div class="col-md-4 ftco-animate">
          <div class="project-wrap hotel">
            <a href="#" class="img" style="background-image: url('{{ asset('images/'.$item->gambar) }}');">
            </a>
            <div class="text p-4">
              <h3><a href="#">{{ $item->judul }}</a></h3>
              <p class="location" align="justify">{{ $item->deskripsi }}</p>
            </div>
          </div>
        </div>
        @endforeach


      </div>
      <div class="row mt-5">
        <div class="col text-center">
          <div class="block-27">
          <ul>
            @guest
              <li><a href="#">&lt;</a></li>
              <li><a href="{{url ('galeri')}}">1</a> </li>
              <li><a href="{{url ('galeri/2')}}">2</a></li>
              <li class="active"><a href="{{url ('galeri/3')}}">3</a></li>
              <li><a href="#">&gt;</a></li>
            @endguest
            @if (Auth::check() && Auth::user()->role == 'user')
              <li><a href="#">&lt;</a></li>
              <li><a href="{{url ('user/galeri')}}">1</a> </li>
              <li><a href="{{url ('user/galeri/2')}}">2</a></li>
              <li class="active"><a href="{{url ('user/galeri/3')}}">3</a></li>
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
