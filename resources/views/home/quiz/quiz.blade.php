@extends('layout.layout')
@section('quiz', 'active')
@section('title', 'quiz | Netral.in')
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

<div class="hero-wrap js-fullheight" style="background-image: url('{{ asset('images/bgquiz.png') }}');">
    {{-- <div class="overlay"></div> --}}
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center" data-scrollax-parent="true">
            <div class="col-md-7 ftco-animate">
                <h1 class="mb-4">Quiz</h1>
                <p class="caps">Kerjakan berbagai macam quiz untuk mengasah skill kamu</p>
            </div>

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
        <span class="subheading">Daftar Quiz</span>
        <h2 class="mb-4">Latihan Netralisasi</h2>
        <div class="materi-grid">

          <!-- Card 1 -->
          <div class="materi-card bg-cream">
            <img src="{{ asset('images/icon1.png') }}" alt="Icon" class="materi-icon">
            <h3>Quiz 1</h3>
            <p>Reaksi Netralisasi</p>
            <div class="materi-footer">
              <img src="{{ asset('images/book.png') }}" alt="book" class="book-icon"> Mulai
            </div>
          </div>

          <!-- Card 2 -->
          <div class="materi-card bg-yellow">
            <img src="{{ asset('images/icon2.png') }}" alt="Icon" class="materi-icon">
            <h3>Quiz 2</h3>
            <p>Sifat Asam dan Basa</p>
            <div class="materi-footer">
              <img src="{{ asset('images/book.png') }}" alt="book" class="book-icon"> Mulai
            </div>
          </div>

          <!-- Card 3 -->
          <div class="materi-card bg-darkblue">
            <img src="{{ asset('images/icon3.png') }}" alt="Icon" class="materi-icon">
            <h3>Quiz 3</h3>
            <p>Indikator Asam dan Basa</p>
            <div class="materi-footer">
              <img src="{{ asset('images/book.png') }}" alt="book" class="book-icon"> Mulai
            </div>
          </div>

          <!-- Card 4 -->
          <div class="materi-card bg-cream">
            <img src="{{ asset('images/icon4.png') }}" alt="Icon" class="materi-icon">
            <h3>Quiz 4</h3>
            <p>Hasil Reaksi</p>
            <div class="materi-footer">
              <img src="{{ asset('images/book.png') }}" alt="book" class="book-icon"> Mulai
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>
@endsection
