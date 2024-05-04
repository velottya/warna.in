@extends('layout.layout')
@section('sentra', 'active')
@section('title', 'Sentra')
@section('content')

  <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('{{ asset('images/headerr.jpg') }}');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 text-center">
            <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('home') }}">Home 
              <i class="fa fa-chevron-right"></i></a></span> <span>Sentra <i class="fa fa-chevron-right"></i></span>
            </p>
            <h1 class="mb-0 bread">Sentra</h1>
          </div>
        </div>
      </div>
    </section>

    <h1 class="mb-0 bread text-center pt-5 font-weight-bold">PAKET KEGIATAN</h1>
    <section class="ftco-section">
      <div class="container">
      <?php
      // Ambil 3 data terbaru dari kategori PaketKegiatan
      $products = App\Models\Product::where('category_id', 1)
                  ->orderBy('created_at', 'desc')
                  ->take(3)
                  ->get();
      ?>
        @foreach($products as $item)
        @if($item->category_id == 2)
        <div class="row">
          <div class="col-md-4 ftco-animate">
            <div class="project-wrap hotel">
              <a href="#" class="img" alt="{{ $item->name }}" style="background-image: url('{{ asset('images/product/'.$item->picture) }}');">
                <span class="price">Rp. {{ number_format($item->price, 0, ',', '.') }}</span>
              </a>
              <div class="text p-4">  
                <h3><a href="#">{{ $item->name }}</a></h3>
                <div class="paragraph" style="max-width: 300px; word-wrap: break-word;" >
                  {{ Illuminate\Support\Str::limit($item->description, 40) }}
                </div>
                <div class="row mt-3">
                  <div class="col-md-6">
                  <p>Rp. {{ number_format($item->price, 0, ',', '.') }}</p>
                  </div>
                  <div class="col-md-6">
                    <p>Stock: {{ $item->stock }}</p>
                  </div>
                </div>
                <p><a href="/sentra11" class="btn btn-primary">More</a></p>

                <a class="btn btn-primary" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#previewProduk{{ $item->id }}"
                ><i class="bx bx-edit-alt me-1"></i> More</a>

              </div>
            </div>
          </div>
        @endif
        @endforeach
      </div>

      @guest
        <p class="text-center"><a href="{{url ('/sentra/kegiatan')}}" class="btn btn-primary">Selengkapnya</a></p>
      @endguest
      @if (Auth::check() && Auth::user()->role == 'user')
        <p class="text-center"><a href="{{url ('/user/sentra/kegiatan')}}" class="btn btn-primary">Selengkapnya</a></p>
      @endif
    </section>
    <h1 class="mb-0 bread text-center font-weight-bold">PRODUK</h1>
    <section class="ftco-section">
      <div class="container">
      <?php
      // Ambil 3 data terbaru dari kategori PaketKegiatan
      $products = App\Models\Product::where('category_id', 1)
                  ->orderBy('created_at', 'desc')
                  ->take(3)
                  ->get();
      ?>
        @foreach($products as $item)
        @if($item->category_id == 1)
        <div class="row">
          <div class="col-md-4 ftco-animate">
            <div class="project-wrap hotel">
              <a href="#" class="img" alt="{{ $item->name }}" style="background-image: url('{{ asset('images/product/'.$item->picture) }}');">
                <span class="price">Rp. {{ number_format($item->price, 0, ',', '.') }}</span>
              </a>
              <div class="text p-4">  
                <h3><a href="#">{{ $item->name }}</a></h3>
                <div class="paragraph" style="max-width: 300px; word-wrap: break-word;" >
                  {{ Illuminate\Support\Str::limit($item->description, 40) }}
                </div>
                <div class="row mt-3">
                  <div class="col-md-6">
                  <p>Rp. {{ number_format($item->price, 0, ',', '.') }}</p>
                  </div>
                  <div class="col-md-6">
                    <p>Stok: {{ $item->stock }}</p>
                  </div>
                </div>
               
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#moreProduk{{ $item->id }}">
                  More Details
                </button>

            </div>
          </div>
        @endif
        @endforeach
      </div>
      @guest
        <p class="text-center"><a href="{{url ('/sentra/produk')}}" class="btn btn-primary">Selengkapnya</a></p>
      @endguest
      @if (Auth::check() && Auth::user()->role == 'user')
        <p class="text-center"><a href="{{url ('/user/sentra/produk')}}" class="btn btn-primary">Selengkapnya</a></p>
      @endif   
    
      <!-- Modal -->
      @foreach($products as $item)
      <div class="modal fade" id="moreProduk{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">{{ $item->name }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-7">
                            <img src="{{ asset('images/product/'.$item->picture) }}" class="img-fluid" alt="{{ $item->name }}" style="width: 250px; height: 250px; object-fit: cover;">
                        </div>
                        <div class="col-md-5 mt-4">
                            <p><strong>Stok:</strong> {{ $item->stock }}</p>
                            <p><strong>Harga:</strong> Rp. {{ number_format($item->price, 0, ',', '.') }}</p>
                        </div>
                    </div>
                    <hr>
                    <p class="my-4" style="text-align: justify;">{{ $item->description }}</p>
                </div>
                <div class="modal-footer">
                    @csrf
                    <a type="button" href="javascript:void(0);" onclick="addCart({{ $item->id }});" class="btn btn-secondary" data-dismiss="modal">Add To Cart</a>

                    <!-- NI BELOMMM -->
                    <a href="{{ route('sentra.cekout', ['product_id' => $item->id]) }}" type="button" class="btn btn-primary">Cekout</a>
                </div>
            </div>
        </div>
      </div>
      @endforeach
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