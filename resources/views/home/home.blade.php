@extends('layout.layout')
@section('home', 'active')
@section('title', 'Home | Netral.in')
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

<div class="hero-wrap js-fullheight" style="background-image: url('images/background.png');">
    {{-- <div class="overlay"></div> --}}
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center" data-scrollax-parent="true">
            <div class="col-md-7 ftco-animate">
                {{-- <span class="subheading">Welcome to</span> --}}
                <p class="caps">Platform Belajar Kimia</p>
                <h1 class="mb-4">AYO BELAJAR KIMIA HARI INI</h1>
            </div>

            {{-- <a href="https://www.youtube.com/embed/O3ZDI1pjr2M?si=hVjtOkSFO5yOo7P6" id="video-link" class="icon-video d-flex align-items-center justify-content-center mb-4">
                <span class="fa fa-play"></span>
            </a> --}}

            <div id="lightbox" class="lightbox" style="display:none;">
                <iframe id="video-frame" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>

            <script>
                // Mendapatkan elemen link dan lightbox
                var videoLink = document.getElementById('video-link');
                var lightbox = document.getElementById('lightbox');
                var videoFrame = document.getElementById('video-frame');

                // Menambahkan event listener untuk klik pada link
                videoLink.addEventListener('click', function(event) {
                    event.preventDefault(); // Menghentikan aksi default dari link

                    // Mendapatkan URL video dari link
                    var videoUrl = this.getAttribute('href');

                    // Menetapkan URL video ke iframe
                    videoFrame.src = videoUrl;

                    // Menampilkan lightbox
                    lightbox.style.display = 'flex';
                });

                // Menambahkan event listener untuk klik di luar lightbox
                lightbox.addEventListener('click', function(event) {
                    if (event.target === this) {
                        // Menyembunyikan lightbox jika area di luar iframe diklik
                        lightbox.style.display = 'none';
                        // Menghentikan video saat lightbox disembunyikan
                        videoFrame.src = '';
                    }
                });
            </script>
        </div>
    </div>
</div>
<section class="ftco-section ftco-no-pb ftco-no-pt ftco-animate">
  <div class="container">
    <div class="w-100">
        <br><br>
        <h2 class="mb-4 section-title">Jelajahi Fitur</h2>
    </div>
    <div class="feature-buttons">
      <a href="{{route('materi')}}" class="feature-btn">Belajar menggunakan Virtual Lab</a>
      <a href="{{route('quiz')}}" class="feature-btn">Mulai Tes Ishihara</a>
      <a href="{{route('lab')}}" class="feature-btn">Ngobrol dengan Chatbot</a>
      <a href="{{route('lab')}}" class="feature-btn">Memahami Fundamental Larutan</a>
      <a href="{{route('lab')}}" class="feature-btn">Mengerjakan Quiz Harian</a>
    </div>
    </div>
    </div>
  </div>
</section>


    <section class="ftco-section services-section">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-6 order-md-last heading-section pl-md-5 ftco-animate d-flex align-items-center">
                    <div class="w-100">
                        <span class="subheading">Welcome to Netral.in</span>
                        <h2 class="mb-4">Pembelajaran Kimia Inklusif</h2>
                        <p align="justify">
                            Pembelajaran berbasis warna sering menjadi tantangan bagi individu dengan buta warna, terutama pada mata pelajaran sains yang mengandalkan visualisasi warna untuk memahami konsep. Keterbatasan aksesibilitas ini dapat menghambat pemahaman dan partisipasi siswa, sehingga diperlukan inovasi pembelajaran inklusif.
                        </p>
                        <p align="justify">
                            Untuk menjawab tantangan tersebut, dikembangkan <strong>Netral.in</strong>, sebuah platform berbasis aplikasi yang memanfaatkan teknologi Artificial Intelligence (AI) untuk membantu pengguna mengenali dan memahami warna secara adaptif. Fitur utama platform ini mencakup penyesuaian tampilan warna sesuai jenis buta warna (deuteranopia, protanopia, tritanopia), pemantauan mood siswa untuk mendukung guru dalam menyesuaikan metode pembelajaran, serta mini-game terapi visual untuk melatih persepsi warna secara interaktif.
                        </p>
                        <div class="card-button ftco-animate">
                            <button class="btn-custom2">Pelajari Lebih Lanjut</button>
                        </div>
                        </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-12 col-lg-12 d-flex align-self-stretch ftco-animate">
                            <div class="services services-1"
                                style="background-image: url(images/background2.png); height: 600px;">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section img ftco-select-destination" style="background:#0C3569;">
  <div class="container">
    <div class="row justify-content-center pb-4">
      <div class="col-md-12 heading-section text-center ftco-animate">
        <h2 class="mb-4" style="color: white;">Belajar Apa Hari Ini?</h2>
      </div>
    </div>

    <!-- grid card -->
    <div class="row justify-content-center">
      <!-- Card 1 -->
      <div class="col-md-3 ftco-animate">
        <div class="materi-card bg-cream">
          <img src="images/icon1.png" alt="Icon" class="materi-icon">
          <h3>Pengertian</h3>
          <p>Reaksi Netralisasi</p>
          <div class="materi-footer">
            <img src="images/book.png" alt="book" class="book-icon"> Materi-1
          </div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="col-md-3 ftco-animate">
        <div class="materi-card bg-yellow">
          <img src="images/icon2.png" alt="Icon" class="materi-icon">
          <h3>Sifat-sifat</h3>
          <p>Asam dan Basa</p>
          <div class="materi-footer">
            <img src="images/book.png" alt="book" class="book-icon"> Materi-2
          </div>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="col-md-3 ftco-animate">
        <div class="materi-card bg-darkblue">
          <img src="images/icon3.png" alt="Icon" class="materi-icon">
          <h3>Indikator</h3>
          <p>Asam dan Basa</p>
          <div class="materi-footer">
            <img src="images/book.png" alt="book" class="book-icon"> Materi-3
          </div>
        </div>
      </div>

      <!-- Card 4 -->
      <div class="col-md-3 ftco-animate">
        <div class="materi-card bg-white">
          <img src="images/icon4.png" alt="Icon" class="materi-icon">
          <h3>Hasil Reaksi</h3>
          <p>Netralisasi</p>
          <div class="materi-footer">
            <img src="images/book.png" alt="book" class="book-icon"> Materi-4
          </div>
        </div>
      </div>
      <div class="card-button ftco-animate">
        <br>
        <button class="btn-custom2">Tampilkan Lebih Banyak</button>
    </div>
    </div>
  </div>
</section>


    <section class="ftco-section ftco-animate">
        <div class="container">
            <div class="row">
                <div class="card-custom">
                    <div class="card-content">
                        <!-- Icon -->
                        <div class="card-icon">
                            <img src="images/Frame2108.png" alt="Chatbot Icon">
                        </div>

                        <!-- Text -->
                        <div class="card-text">
                            <h2>Chatbot</h2>
                            <h3>Tanyakan berbagai hal tentang Kimia di Chatbot</h3>
                        </div>

                        <!-- Button -->
                        <div class="card-button">
                            <button class="btn-custom">Tanya</button>
                        </div>
                    </div>
                </div>
                <br>
                <div class="card-custom2">
                    <div class="card-content">
                        <!-- Icon -->
                        <div class="card-icon">
                            <img src="images/_x31_8.png" alt="Quiz Icon">
                        </div>

                        <!-- Text -->
                        <div class="card-text">
                            <h2>Quiz</h2>
                            <h3>Kerjakan quiz menarik untuk mengasah skill</h3>
                        </div>

                        <!-- Button -->
                        <div class="card-button">
                            <button class="btn-custom">Mulai</button>
                        </div>
                    </div>
                </div>
                <br>
                <div class="card-custom3">
                    <div class="card-content">
                        <!-- Icon -->
                        <div class="card-icon">
                            <img src="images/vlab.png" alt="Quiz Icon">
                        </div>

                        <!-- Text -->
                        <div class="card-text">
                            <h2>Virtual Lab</h2>
                            <h3>Coba lab digital untuk pengalaman menarik</h3>
                        </div>

                        <!-- Button -->
                        <div class="card-button">
                            <button class="btn-custom">Mulai</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    {{-- <section class="ftco-section ftco-materi img"style="background-image: url(images/video.png);">
        <div class="overlay"></div>
        <div class="container py-md-5">
            <div class="row py-md-5">
                <div class="col-md d-flex align-items-center justify-content-center">
                <a href="https://www.youtube.com/embed/0oHMoSSelo0?si=dRvXdKhsDjLna2dP" id="video-link" class="icon-video d-flex align-items-center justify-content-center mb-4">
                <span class="fa fa-play"></span>
            </a>

            <div id="lightbox" class="lightbox" style="display:none;">
                <iframe id="video-frame" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <script>
                // Mendapatkan elemen link dan lightbox
                var videoLink = document.getElementById('video-link');
                var lightbox = document.getElementById('lightbox');
                var videoFrame = document.getElementById('video-frame');

                // Menambahkan event listener untuk klik pada link
                videoLink.addEventListener('click', function(event) {
                    event.preventDefault(); // Menghentikan aksi default dari link

                    // Mendapatkan URL video dari link
                    var videoUrl = this.getAttribute('href');

                    // Menetapkan URL video ke iframe
                    videoFrame.src = videoUrl;

                    // Menampilkan lightbox
                    lightbox.style.display = 'flex';
                });

                // Menambahkan event listener untuk klik di luar lightbox
                lightbox.addEventListener('click', function(event) {
                    if (event.target === this) {
                        // Menyembunyikan lightbox jika area di luar iframe diklik
                        lightbox.style.display = 'none';
                        // Menghentikan video saat lightbox disembunyikan
                        videoFrame.src = '';
                    }
                });
            </script>
                </div>
            </div>
        </div>
    </section>

        <section class="ftco-section ftco-about ftco-no-pt img">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-12 about-intro">
                    <div class="row">
                        <div class="col-md-6 d-flex align-items-stretch">
                            <div class="img d-flex w-100 align-items-center justify-content-center" style="background-image:url(images/Group113.png);">
                            </div>
                        </div>
                        <div class="col-md-6 pl-md-5 py-5">
                            <div class="row justify-content-start pb-3">
                                <div class="col-md-12 heading-section ftco-animate">
                                    <h2 class="mb-4">Laboratorium Virtual Interaktif</h2>
                                    <p>Virtual Lab adalah fitur simulasi percobaan kimia secara digital tanpa perlu laboratorium fisik. Melalui tampilan interaktif, siswa dapat mencoba berbagai reaksi, memahami konsep dasar, dan memvisualisasikan perubahan kimia dengan aman, praktis, serta inklusif. Fitur ini dirancang untuk mendukung pembelajaran mandiri sekaligus memperkaya pengalaman belajar.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

@endsection
