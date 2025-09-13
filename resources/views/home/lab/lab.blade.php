@extends('layout.layout')
@section('lab', 'active')
@section('title', 'lab | Netral.in')
@section('content')

<style>
    /* Style untuk lightbox */
    .lightbox {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.7);
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 9999;
    }

    .lightbox iframe {
        width: 80%;
        height: 80%;
    }
</style>

<div class="hero-wrap js-fullheight" style="background-image: url('{{ asset('images/bgmateri.png') }}');">
    {{-- <div class="overlay"></div> --}}
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center" data-scrollax-parent="true">
            <div class="col-md-7 ftco-animate">
                {{-- <span class="subheading">Welcome to</span> --}}
                <h1 class="mb-4">Materi</h1>
                <p class="caps">Mau belajar apa hari ini?</p>
            </div>

            {{-- <a href="https://www.youtube.com/embed/O3ZDI1pjr2M?si=hVjtOkSFO5yOo7P6" id="video-link" class="icon-video d-flex align-items-center justify-content-center mb-4">
                <span class="fa fa-play"></span>
            </a> --}}

            <div id="lightbox" class="lightbox" style="display:none;">
                <iframe id="video-frame" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>

            <script>
                var videoLink = document.getElementById('video-link');
                var lightbox = document.getElementById('lightbox');
                var videoFrame = document.getElementById('video-frame');

                if (videoLink) {
                    videoLink.addEventListener('click', function(event) {
                        event.preventDefault();
                        var videoUrl = this.getAttribute('href');
                        videoFrame.src = videoUrl;
                        lightbox.style.display = 'flex';
                    });
                }

                lightbox.addEventListener('click', function(event) {
                    if (event.target === this) {
                        lightbox.style.display = 'none';
                        videoFrame.src = '';
                    }
                });
            </script>
        </div>
    </div>
</div>

<section class="ftco-section services-section">
  <div class="container">
    <div class="heading-section ftco-animate text-left">
        <span class="subheading">Daftar Materi</span>
        <h2 class="mb-4">Netralisasi</h2>
        <div class="materi-grid">

  <!-- Card 1 -->
  <div class="materi-card bg-cream">
    <img src="{{ asset('images/icon1.png') }}" alt="Icon" class="materi-icon">
    <h3>Pengertian</h3>
    <p>Reaksi Netralisasi</p>
    <div class="materi-footer">
      <img src="{{ asset('images/book.png') }}" alt="book" class="book-icon"> Materi-1
    </div>
  </div>

  <!-- Card 2 -->
  <div class="materi-card bg-yellow">
    <img src="{{ asset('images/icon2.png') }}" alt="Icon" class="materi-icon">
    <h3>Sifat-sifat</h3>
    <p>Asam dan Basa</p>
    <div class="materi-footer">
      <img src="{{ asset('images/book.png') }}" alt="book" class="book-icon"> Materi-2
    </div>
  </div>

  <!-- Card 3 -->
  <div class="materi-card bg-darkblue">
    <img src="{{ asset('images/icon3.png') }}" alt="Icon" class="materi-icon">
    <h3>Indikator</h3>
    <p>Asam dan Basa</p>
    <div class="materi-footer">
      <img src="{{ asset('images/book.png') }}" alt="book" class="book-icon"> Materi-3
    </div>
  </div>

  <!-- Card 4 -->
  <div class="materi-card bg-cream">
    <img src="{{ asset('images/icon4.png') }}" alt="Icon" class="materi-icon">
    <h3>Hasil Reaksi</h3>
    <p>Netralisasi</p>
    <div class="materi-footer">
      <img src="{{ asset('images/book.png') }}" alt="book" class="book-icon"> Materi-4
    </div>
  </div>

  <!-- Card 5 -->
  <div class="materi-card bg-yellow">
    <img src="{{ asset('images/icon2.png') }}" alt="Icon" class="materi-icon">
    <h3>Jenis</h3>
    <p>Asam dan Basa</p>
    <div class="materi-footer">
      <img src="{{ asset('images/book.png') }}" alt="book" class="book-icon"> Materi-5
    </div>
  </div>

</div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
