@extends('layout.layout')
@section('sentra', 'active')
@section('title', 'Sentra')
@section('content')

<section class="hero-wrap hero-wrap-2 js-fullheight"
      style="background-image: url('images/2.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 text-center">
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i
                    class="fa fa-chevron-right"></i></a></span> <span>Sentra <i class="fa fa-chevron-right"></i></span>
            </p>
            <h1 class="mb-0 bread">Sambang Kampung</h1>
          </div>
        </div>
      </div>
  </section>
  <section class="ftco-section services-section">
  <div class="container">
    <div class="row d-flex">
      <div class="col-md-15 order-md-last heading-section pl-md-20 ftco-animate d-flex align-items-center">
        <div class="w-100">
          <span class="subheading"></span>
          <h2 class="mb-4">Paket Edukasi</h2>
          <p align="justify">Paket edukasi "Kampung Budaya Polowijen" merupakan sebuah program atau inisiatif yang bertujuan untuk memperkenalkan dan mempromosikan kekayaan budaya dan tradisi yang dimiliki oleh Kampung Budaya Polowijen kepada masyarakat luas, terutama generasi muda. Program ini biasanya mencakup serangkaian kegiatan seperti kunjungan edukatif, lokakarya, pameran budaya, dan acara komunitas lainnya.</p>
          <p align="justify"><b>Paket Berisikan :</b></p>
          <p align="justify">o Kriya Batik Malang</p>
          <p align="justify">o Kriya Topeng Malang</p>
          <p align="justify">o Seni Rupa</p>
          <p align="justify"><b>Harga Paket</b></p>
          <p align="justify">Rp 50.000/ perorang</p>
          <p><a href="/login" class="btn btn-primary">Booking</a></p>
        </div>
      </div>
    </div>
  </div>
</section>
<p class="text-center"><a href="/sentra1" class="btn btn-primary">Kembali</a></p>

<section class="ftco-intro ftco-section ftco-no-pt">
  <div class="container pt-5">
    <div class="row justify-content-center">
      <div class="col-md-12 text-center">
        <div class="img" style="background-image: url(images/Ask.jpg);">
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
