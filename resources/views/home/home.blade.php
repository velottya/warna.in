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
    <div class="overlay"></div>
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
<section class="ftco-section ftco-no-pb ftco-no-pt">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="ftco-search d-flex justify-content-center">
                    <div class="row">
                        <div class="col-md-12 nav-link-wrap">
                            <div class="nav nav-pills text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <a class="nav-link active mr-md-1" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">INFORMATION</a>
                            </div>
                        </div>
                        <div class="col-md-12 tab-wrap">
                            <div class="tab-content" id="v-pills-tabContent">
                                <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-nextgen-tab">
                                    <form action="#" class="search-property-1">
                                        <div class="row no-gutters">
                                            <div class="col-md d-flex">
                                                <div class="form-group p-4 border-0">
                                                    <label for="#">MATERI</label>
                                                    <div class="form-field">
                                                        <div><span></span></div>
                                                        <input type="text" class="form-control" placeholder="{{ $jumlahPesanan }} ++">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md d-flex">
                                                <div class="form-group p-4">
                                                    <label for="#">QUIZ</label>
                                                    <div class="form-field">
                                                        <div><span></span></div>
                                                        <input type="text" class="form-control" placeholder="{{ $jumlahGaleri }} ++">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md d-flex">
                                                <div class="form-group p-4">
                                                    <label for="#">LAB</label>
                                                    <div class="form-field">
                                                        <div><span></span></div>
                                                        <input type="text" class="form-control" placeholder="{{ $jumlahProduk }} ++">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md d-flex">
                                                <div class="form-group d-flex w-100 border-0">
                                                    <div class="form-field w-100 align-items-center d-flex">
                                                        <input type="submit" value="MULAI" class="align-self-stretch form-control btn btn-primary">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
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
                        <span class="subheading">Welcome to Authentic Polowijen</span>
                        <h2 class="mb-4">Kampung Budaya Polowijen</h2>
                        <p align="justify">Kampung Budaya Polowijen adalah wujud nyata dari semangat pelestarian dan pengembangan warisan budaya yang kaya di Kelurahan Polowijen, Kecamatan Blimbing, Malang. Didirikan dan diprakarsai oleh Sdr. ISA WAHYUDI, serta dirumuskan dengan dukungan penuh dari Pemerintah Kota Malang, kampung budaya ini menjadi pusat kegiatan yang memadukan tradisi dan inovasi.</p>
                        <p align="justify">Kampung Polowijen adalah pusat kebudayaan yang menghidupkan warisan tradisionalnya melalui kegiatan seperti tari, pembuatan topeng, membatik, dan banyak lagi. Di sini, terdapat pelatihan yang menyelenggarakan kelas-kelas untuk menari, membuat batik, dan mengukir topeng, membantu mempertahankan keaslian budaya Polowijen secara berkelanjutan. Dengan beragam aktivitas budaya dan fasilitas pelatihan yang ditawarkan, Kampung Polowijen menjadi destinasi yang menarik bagi mereka yang ingin merasakan kekayaan budaya lokal dan mengembangkan keterampilan seni tradisional.</p>
                        <p><a href="{{route('materi')}}" class="btn btn-primary py-3 px-4">Sejarah lebih lanjut</a></p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
                            <div class="services services-1 color-1 d-block img" style="background-image: url(images/sejarah.jpg);">
                                <div class="icon d-flex align-items-center justify-content-center"><img src="{{ asset('images/icon/sejarah.svg') }}" width="50" alt="Quiz Icon"></div>

                                <div class="media-body">
                                    <h3 class="heading mb-3">Sejarah</h3>
                                    <p>Sejaran rinci dari Kampung Budaya Polowijen</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
                            <div class="services services-1 color-2 d-block img" style="background-image: url(images/Quiz.jpg);">
                            <div class="icon d-flex align-items-center justify-content-center"><img src="{{ asset('images/icon/Quiz.svg') }}" width="50" alt="Quiz Icon"></div>
                                <div class="media-body">
                                    <h3 class="heading mb-3">Quiz Produk</h3>
                                    <p>Pasar Budaya, Mejual segala kriya tangan warga lokal</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
                            <div class="services services-1 color-3 d-block img" style="background-image: url(images/Lab.jpg);">
                            <div class="icon d-flex align-items-center justify-content-center"><img src="{{ asset('images/icon/Lab.svg') }}" width="50" alt="Quiz Icon"></div>
                                <div class="media-body">
                                    <h3 class="heading mb-3">Lab</h3>
                                    <p>Lab Kegiatan di Kampung Budaya Polowijen</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section img ftco-select-destination" style="background-image: url(images/bg_3.jpg);">
        <div class="container">
            <div class="row justify-content-center pb-4">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <span class="subheading">Galery</span>
                    <h2 class="mb-4">Lab Kegiatan Kampung Polowijen</h2>
                </div>
            </div>
        </div>
        <div class="container container-2" style="center">
            <div class="row">
                <div class="col-md-10">
                    <div class="carousel-destination owl-carousel ftco-animate">
                        <div class="item">
                            <div class="project-destination">
                                <a href="#" class="img" style="background-image: url(images/PeringatanHaritari.png);">
                                    <div class="text">
                                        <h3>Peringatan Hari Tari</h3>
                                        <span>12 Oktober</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="project-destination">
                                <a href="#" class="img" style="background-image: url(images/GebyakWayangTopeng.png);">
                                    <div class="text">
                                        <h3>Gebyak Wayang Topeng</h3>
                                        <span>23 Januari</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="project-destination">
                                <a href="#" class="img" style="background-image: url(images/KriyaBatik.png);">
                                    <div class="text">
                                        <h3>Kriya Batik</h3>
                                        <span>1 Maret</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="project-destination">
                                <a href="#" class="img" style="background-image: url(images/megengan.jpg);">
                                    <div class="text">
                                        <h3>Megengan</h3>
                                        <span>12 Juni</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="project-destination">
                                <a href="#" class="img" style="background-image: url(images/blog.png);">
                                    <div class="text">
                                        <h3>Temu Topeng</h3>
                                        <span>21 Agustus</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center pb-4">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <span class="subheading">Authentic Polowijen</span>
                    <h2 class="mb-4">Kegiatan di Kampung Polowijen</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 ftco-animate">
                    <div class="project-wrap">
                        <a href="#" class="img" style="background-image: url(images/GladhiTari.png);">
                            <span class="price">Gladi Tari</span>
                        </a>
                        <div class="text p-4">
                            <span class="days">7 KEGIATAN</span>
                            <h3><a href="#">Gladi Tari Topeng Malang</a></h3>
                            <p><span></span align="justify">Saksikan keindahan dan keanggunan tarian tradisional Jawa yang dilestarikan oleh para penari Kampung Polowijen.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ftco-animate">
                    <div class="project-wrap">
                        <a href="#" class="img" style="background-image: url(images/KriyaTopengMalang.png);">
                            <span class="price">Kriya Topeng</span>
                        </a>
                        <div class="text p-4">
                            <span class="days">3 KEGIATAN</span>
                            <h3><a href="#">Kriya Topeng Malang</a></h3>
                            <p align="justify"><span></span> Pelajari seni pembuatan topeng tradisional dengan berbagai karakter dan makna yang unik.</p>
                            <h3></h3><br><br>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ftco-animate">
                    <div class="project-wrap">
                        <a href="#" class="img" style="background-image: url(images/KriyaBatikMalang.png);">
                            <span class="price">Kriya Batik</span>
                        </a>
                        <div class="text p-4">
                            <span class="days">5 KEGIATAN</span>
                            <h3><a href="#">Kriya Batik Malang</a></h3>
                            <p align="justify"><span></span>Ciptakan batik khas Polowijen dengan motif-motif tradisional yang sarat makna dan nilai budaya.</p>
                            <h3></h3><br>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 ftco-animate">
                    <div class="project-wrap">
                        <a href="#" class="img" style="background-image: url(images/FestivalKampungBudaya.png);">
                            <span class="price">Festival Kampung</span>
                        </a>
                        <div class="text p-4">
                            <span class="days">25 KEGIATAN</span>
                            <h3><a href="#">Festival Kampung Polowijen</a></h3>
                            <p align="justify"><span></span> Rasakan kemeriahan festival budaya tahunan yang menampilkan berbagai pertunjukan seni, kuliner, dan tradisi lokal.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ftco-animate">
                    <div class="project-wrap">
                        <a href="#" class="img" style="background-image: url(images/KothekanMusikDolanan.png);">
                            <span class="price">Kothekan Musik</span>
                        </a>
                        <div class="text p-4">
                            <span class="days">7 Kegiatan</span>
                            <h3><a href="#">Kothekan Musik Dolanan</a></h3>
                            <p align="justify"><span></span>Mainkan berbagai alat musik tradisional bersama para warga dan ciptakan kenangan yang tak terlupakan.</p>
                            <h3></h3><br>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ftco-animate">
                    <div class="project-wrap">
                        <a href="#" class="img" style="background-image: url(images/GrebegSuro.png);">
                            <span class="price">Grebeg Suro</span>
                        </a>
                        <div class="text p-4">
                            <span class="days">2 Kegiatan</span>
                            <h3><a href="#">Grebeg Suro</a></h3>
                            <p align="justify"><span></span>Grebeg Suro adalah salah satu tradisi yang dilakukan oleh masyarakat Jawa, terutama di kota Solo, dalam rangka perayaan Tahun Baru Islam atau Muharram. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-materi img"style="background-image: url(images/materiUs2.jpg);">
        <div class="overlay"></div>
        <div class="container py-md-5">
            <div class="row py-md-5">
                <div class="col-md d-flex align-items-center justify-content-center">
                <a href="https://www.youtube.com/embed/O3ZDI1pjr2M?si=hVjtOkSFO5yOo7P6" id="video-link" class="icon-video d-flex align-items-center justify-content-center mb-4">
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

    <section class="ftco-section ftco-materi ftco-no-pt img">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-12 materi-intro">
                    <div class="row">
                        <div class="col-md-6 d-flex align-items-stretch">
                            <div class="img d-flex w-100 align-items-center justify-content-center" style="background-image:url(images/materiUs1.jpg);">
                            </div>
                        </div>
                        <div class="col-md-6 pl-md-5 py-5">
                            <div class="row justify-content-start pb-3">
                                <div class="col-md-12 heading-section ftco-animate">
                                    <span class="subheading">materi Us</span>
                                    <h2 class="mb-4">Ayo Jelajahi Pesona Budaya Polowijen!</h2>
                                    <p>o Terjun langsung dalam 34 kegiatan budaya</p>
                                    <p>o Temukan 25 festival budaya yang semarak</p>
                                    <p>o Jelajahi tradisi unik Megengan & Mya:</p>
                                    <p>o Dapatkan pengetahuan dan pengalaman baru</p>
                                    <p>o Ciptakan kenangan indah bersama keluarga</p></p>
                                    <p><a href="{{route('login')}}" class="btn btn-primary">Booking Kunjungan</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section testimony-section bg-bottom" style="background-image: url(images/Feedback.jpg);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center pb-4">
                <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
                    <span class="subheading">Testimonial</span>
                    <h2 class="mb-4">Feedback Pengunjung</h2>
                </div>
            </div>
            <div class="row ftco-animate">
                <div class="col-md-12">
                    <div class="carousel-testimony owl-carousel">
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="text">
                                    <p class="star">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </p>
                                    <p class="mb-4" align="justify">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dignissimos eveniet, quibusdam recusandae quo voluptas ipsum voluptatum quia ipsam eligendi odit blanditiis architecto corporis unde est aliquam alias dolor sapiente dolores.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="text">
                                    <p class="star">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </p>
                                    <p class="mb-4" align="justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores est architecto voluptates ut blanditiis obcaecati nemo, nobis repellat repudiandae aliquam laboriosam dolores officia distinctio illo beatae in commodi recusandae explicabo.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="text">
                                    <p class="star">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </p>
                                    <p class="mb-4" align="justify">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non doloribus iure rerum ipsam et est earum, quod iste vero saepe cumque aperiam vel dignissimos facere alias, sequi perspiciatis minus omnis!</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/person_3.jpg)"></div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="text">
                                    <p class="star">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </p>
                                    <p class="mb-4" align="justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus vitae molestiae, ullam accusantium illo nobis, ratione voluptatum totam odit velit ex fugiat id quas est esse dolores. Veniam, neque quam.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="text">
                                    <p class="star">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </p>
                                    <p class="mb-4" align="justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque voluptas impedit quos veritatis quas magnam id consectetur ducimus delectus! Eveniet, ipsa ducimus fugiat earum facilis cupiditate quis nulla natus. Reiciendis?</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
