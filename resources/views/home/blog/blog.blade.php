@extends('layout.layout')
@section('blog', 'active')
@section('title', 'Blog')
@section('content')

<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('{{asset('images/sentratop.png')}}');">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
        <div class="col-md-9 ftco-animate pb-5 text-center">
          <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home
            <i class="fa fa-chevron-right"></i></a></span> <span>Blog <i class="fa fa-chevron-right"></i></span>
          </p>
          <h1 class="mb-0 bread">Blog</h1>
        </div>
      </div>
    </div>
  </section>

    <section class="ftco-section">
      <div class="container">
        <div class="row d-flex">

        <!-- 1 Blog -->
        <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry justify-content-end">
              <a href="blog-single.html" class="block-20" style="background-image: url('{{asset('images/image3.png')}}');">
              </a>
              <div class="text">
                <div class="d-flex align-items-center mb-4 topp">
                  <div class="one">
                    <span class="day">2</span>
                  </div>
                  <div class="two">
                    <span class="yr">2024</span>
                    <span class="mos">Februari</span>
                  </div>
                </div>
                @if (Auth::check() && Auth::user()->role == 'user')
                <h3 class="heading" align="justify"><a href="{{url('user/blog/1')}}">"Virus" Topeng Malang Dari Polowijen Ditularkan ke Para Siswa</a></h3>
                @endif
                @guest
                <h3 class="heading"><a href="{{url('user/blog/1')}}">"Virus" Topeng Malang Dari Polowijen Ditularkan ke Para Siswa</a></h3>
                @endguest
                <p align="justify">Virus tari Topeng Malang harus terus menerus ditularkan agar tujuan membangun kesadaran... </p>
                @if (Auth::check() && Auth::user()->role == 'user')
                <p><a href="{{url('user/blog/1')}}" class="btn btn-primary">Read more</a></p>
                @endif
                @guest
                <p><a href="{{url('blog/1')}}" class="btn btn-primary">Read more</a></p>
                @endguest
              </div>
            </div>
          </div>
        <!-- End 1 Blog -->

          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry justify-content-end">
              <a href="blog-single.html" class="block-20" style="background-image: url('{{asset('images/image6.png')}}');">
              </a>
              <div class="text">
              <div class="d-flex align-items-center mb-4 topp">
                <div class="one">
                <span class="day">21</span>
              </div>
              <div class="two">
                <span class="yr">2024</span>
                <span class="mos">Januari</span>
              </div>
            </div>
            <h3 class="heading" align="justify"><a href="#">Pegiat Kampung Budaya Polowijen Bentuk Asosiasi Batik Malang </a></h3>
            <p align="justify">Dari 30 pengusaha dan pengrajin batik yang kami kelola ada yang sukses go internasional...</p>
            <p><a href="/blog2" class="btn btn-primary">Read more</a></p>
            </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          <div class="blog-entry">
            <a href="blog-single.html" class="block-20" style="background-image: url('{{asset('images/image4.png')}}');">
            </a>
            <div class="text">
            <div class="d-flex align-items-center mb-4 topp">
              <div class="one">
              <span class="day">9</span>
            </div>
            <div class="two">
              <span class="yr">2023</span>
              <span class="mos">November</span>
            </div>
          </div>
          <h3 class="heading" align="justify"><a href="#">Kampung Budaya Polowijen Gelar Festival Topeng Malang</a></h3>
          <p align="justify">Kampung Budaya Polowijen (KBP) untuk pertama kalinya menggelar Festival Topeng Malang ini antara lain workshop kriya Topeng...</p>
          <p><a href="#" class="btn btn-primary">Read more</a></p>
          </div>
          </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          <div class="blog-entry">
            <a href="blog-single.html" class="block-20" style="background-image: url('{{asset('images/image1.jpg')}}');">
            </a>
            <div class="text">
            <div class="d-flex align-items-center mb-4 topp">
              <div class="one">
              <span class="day">7</span>
            </div>
            <div class="two">
              <span class="yr">2023</span>
              <span class="mos">Oktober</span>
            </div>
          </div>
          <h3 class="heading" align="justify"><a href="#">Profil tokoh budaya menjaga kearifan lokal di Kampung Polowijen sebagai pembawa tradisi</a></h3>
          <p align="justify">Semula Isa Wahyudi (48) hanya sebagai orang yang mendapat keluhan tentang...</p>
          <p><a href="#" class="btn btn-primary">Read more</a></p>
          </div>
          </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          <div class="blog-entry">
            <a href="blog-single.html" class="block-20" style="background-image: url('{{asset('images/galeri3-1.png')}}');">
            </a>
            <div class="text">
            <div class="d-flex align-items-center mb-4 topp">
              <div class="one">
              <span class="day">11</span>
            </div>
            <div class="two">
              <span class="yr">2023</span>
              <span class="mos">Agustus</span>
            </div>
          </div>
          <h3 class="heading" align="justify"><a href="#">Menghidupkan Ekonomi Kreatif: Pasar Jajan Tradisional di Kampung Budaya Polowijen</a></h3>
          <p align="justify">Pasar Jajan Tradisional Kampung Budaya Polowijen Mampu Dongkrak Ekonomi Kreatif...</p>
          <p><a href="#" class="btn btn-primary">Read more</a></p>
          </div>
          </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          <div class="blog-entry">
            <a href="blog-single.html" class="block-20" style="background-image: url('{{asset('images/GebyakWayangTopeng.png')}}');">
            </a>
            <div class="text">
            <div class="d-flex align-items-center mb-4 topp">
              <div class="one">
              <span class="day">13</span>
            </div>
            <div class="two">
              <span class="yr">2023</span>
              <span class="mos">Juni</span>
            </div>
          </div>
          <h3 class="heading" align="justify"><a href="#">Pesona Seni dan Budaya Lokal: Keindahan Kampung Budaya Polowijen di Malang</a></h3>
          <p align="justify">Kampung Budaya Polowijen saat ini banyak dikunjungi oleh masyarakat dari berbagai daerah, hingga Mancanegara...</p>
          <p><a href="#" class="btn btn-primary">Read more</a></p>
          </div>
          </div>
          </div> 
          <div class="col-md-4 d-flex ftco-animate">
          <div class="blog-entry">
            <a href="blog-single.html" class="block-20" style="background-image: url('{{asset('images/1714918982.png')}}');">
            </a>
            <div class="text">
            <div class="d-flex align-items-center mb-4 topp">
              <div class="one">
              <span class="day">9</span>
            </div>
            <div class="two">
              <span class="yr">2023</span>
              <span class="mos">November</span>
            </div>
          </div>
          <h3 class="heading" align="justify"><a href="#">Hasta Karya Warga Kampung Budaya Polowijen Malang di Bulan Ramadan</a></h3>
          <p align="justify">Karena ini bulan puasa maka kegiatan workshop Hasta Karya sekalian dijadikan kegiatan menunggu berbuka puasa,"...</p>
          <p><a href="#" class="btn btn-primary">Read more</a></p>
          </div>
          </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          <div class="blog-entry">
            <a href="blog-single.html" class="block-20" style="background-image: url('{{asset('images/1714919382.png')}}');">
            </a>
            <div class="text">
            <div class="d-flex align-items-center mb-4 topp">
              <div class="one">
              <span class="day">2</span>
            </div>
            <div class="two">
              <span class="yr">2021</span>
              <span class="mos">Juli</span>
            </div>
          </div>
          <h3 class="heading" align="justify"><a href="#" >Memperingati Hari Ibu, Kampung Budaya Polowijen Kota Malang Gelar Tutorial Pasang Sanggul dan Merias</a></h3>
          <p align="justify">Puluhan anak dan ibu menggelar tutorial pasang sanggul hingga anak merias ibunya sendiri...</p>
          <p><a href="#" class="btn btn-primary">Read more</a></p>
          </div>
          </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          <div class="blog-entry">
            <a href="blog-single.html" class="block-20" style="background-image: url('{{asset('images/1714919474.png')}}');">
            </a>
            <div class="text">
            <div class="d-flex align-items-center mb-4 topp">
              <div class="one">
              <span class="day">8</span>
            </div>
            <div class="two">
              <span class="yr">2023</span>
              <span class="mos">Mei</span>
            </div>
          </div>
          <h3 class="heading" align="justify"><a href="#">Menarik! Wisata Edukasi Kampung Budaya Polowijen</a></h3>
          <p align="justify" >Kampung Polowijen ini sangat identik dengan topeng dan wayang, terutama topeng-topeng yang sangat unik. Topeng ini di buat dan di ukir ...</p>
          <p><a href="#" class="btn btn-primary">Read more</a></p>
          </div>
          </div>
          </div> 

          @foreach($artikel as $item)
          <div class="col-md-4 ftco-animate">
            <div class="project-wrap hotel">
              <a href="#" class="img" style="background-image: url('{{ asset('images/'.$item->gambar) }}');">
              </a>
              <div class="text p-4">
                <h3><a href="#">{{ $item->judul }}</a></h3>
                <p class="location" align="justify">{{ $item->penjelasan }}</p>
              </div>
            </div>
          </div>
          @endforeach

    </div>

    {{-- <div class="row mt-5">
      <div class="col text-center">
        <div class="block-27">
          <ul>
            @guest
              <li><a href="#">&lt;</a></li>
              <li class="active"><a href="{{url ('blog')}}">1</a> </li>
              <!-- <li><a href="#">2</a></li> -->
              <!-- <li><a href="{{url ('blog/2')}}">3</a></li> -->
              <li><a href="#">&gt;</a></li>
            @endguest
            @if (Auth::check() && Auth::user()->role == 'user')
              <li><a href="#">&lt;</a></li>
              <li class="active"><a href="{{url ('user/blog')}}">1</a> </li>
              <!-- <li><a href="#">2</a></li> -->
              <!-- <li><a href="{{url ('user/blog/2')}}">3</a></li> -->
              <li><a href="#">&gt;</a></li>
            @endif
          </ul>
        </div>
      </div>
    </div> --}}
    </div>
    </section>

    <section class="ftco-intro ftco-section ftco-no-pt">
    <div class="container">
      <div class="row justify-content-center">
      <div class="col-md-12 text-center">
        <div class="img"  style="background-image: url('{{asset('images/Ask.jpg')}}');">
        <div class="overlay"></div>
        <h2>KAMPUNG BUDAYA POLOWIJEN</h2>
        <p>Warisi Tradisi Lestarikan Budaya</p>
        <p class="mb-0"><a href="contact.html" class="btn btn-primary px-4 py-3">Ask For A Quote</a></p>
      </div>
    </div>
    </div>
    </div>
    </section>
  @endsection
