@extends('layout.layout')
@section('sentra', 'active')
@section('title', 'Sentra')
@section('content')

<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('{{ asset('images/headerr.jpg') }}');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate pb-5 text-center">
<<<<<<< HEAD
                <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('home') }}">Home
=======
                <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('home') }}">Home 
>>>>>>> 3f82662a3b0cc3032264f188785eead9e3724708
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
        <div class="row">
        <?php
        // Ambil 3 data terbaru dari kategori PaketKegiatan
        $product = App\Models\Product::where('category_id', 2)
                    ->orderBy('created_at', 'desc')
                    ->take(3)
                    ->get();
        ?>
            @foreach($product as $item)
            @if($item->category_id == 2)
            <div class="col-md-4 ftco-animate">
                <div class="project-wrap hotel">
                    <a href="#" class="img" alt="{{ $item->name }}" style="background-image: url('{{ asset('images/product/'.$item->picture) }}');">
                        <span class="price">Rp. {{ number_format($item->price, 0, ',', '.') }}</span>
                    </a>
<<<<<<< HEAD
                    <div class="text p-4">
=======
                    <div class="text p-4">  
>>>>>>> 3f82662a3b0cc3032264f188785eead9e3724708
                        <h3><a href="#">{{ $item->name }}</a></h3>
                        <div class="paragraph" style="max-width: 300px; word-wrap: break-word;">
                            {{ Illuminate\Support\Str::limit($item->description, 40) }}
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <p>Rp. {{ number_format($item->price, 0, ',', '.') }}</p>
                            </div>
                            <div class="col-md-6">
<<<<<<< HEAD
                                <p>Stok: {{ $item->stock }}</p>
=======
                                <p>Stock: {{ $item->stock }}</p>
>>>>>>> 3f82662a3b0cc3032264f188785eead9e3724708
                            </div>
                        </div>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#moreKegiatan{{ $item->id }}">
                            More Details
                        </button>
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
    </div>
</section>

<h1 class="mb-0 bread text-center font-weight-bold">PRODUK</h1>
<section class="ftco-section">
    <div class="container">
        <div class="row">
        <?php
        // Ambil 3 data terbaru dari kategori PaketKegiatan
        $product = App\Models\Product::where('category_id', 1)
                    ->orderBy('created_at', 'desc')
                    ->take(3)
                    ->get();
        ?>
            @foreach($product as $item)
            @if($item->category_id == 1)
            <div class="col-md-4 ftco-animate">
                <div class="project-wrap hotel">
                    <a href="#" class="img" alt="{{ $item->name }}" style="background-image: url('{{ asset('images/product/'.$item->picture) }}');">
                        <span class="price">Rp. {{ number_format($item->price, 0, ',', '.') }}</span>
                    </a>
<<<<<<< HEAD
                    <div class="text p-4">
=======
                    <div class="text p-4">  
>>>>>>> 3f82662a3b0cc3032264f188785eead9e3724708
                        <h3><a href="#">{{ $item->name }}</a></h3>
                        <div class="paragraph" style="max-width: 300px; word-wrap: break-word;">
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
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#moreProduk{{ $item->id }}">
                            More Details
                        </button>
                    </div>
                </div>
            </div>
            @endif
            @endforeach
        </div>
    </div>

    @guest
    <p class="text-center"><a href="{{url ('/sentra/produk')}}" class="btn btn-primary">Selengkapnya</a></p>
    @endguest
    @if (Auth::check() && Auth::user()->role == 'user')
    <p class="text-center"><a href="{{url ('/user/sentra/produk')}}" class="btn btn-primary">Selengkapnya</a></p>
<<<<<<< HEAD
    @endif

<!-- Modal -->
@foreach($product as $item)
@if($item->category_id == 1)
=======
    @endif   
  
<!-- Modal -->
@foreach($product as $item)
>>>>>>> 3f82662a3b0cc3032264f188785eead9e3724708
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
<<<<<<< HEAD
            <form method="POST" action="/sentra/addCart">
            @csrf
              <button type="button" class="btn btn-primary" id="cart-btn" onclick="addToCart({{ $item->id }}, '{{ $item->name }}', {{ $item->price }})">Add to Cart</button>
            </form>
=======
              @csrf
              <a type="button" href="javascript:void(0);" onclick="addCart({{ $item->id }});" class="btn btn-secondary" data-dismiss="modal">Add To Cart</a>
>>>>>>> 3f82662a3b0cc3032264f188785eead9e3724708

              <!-- NI BELOMMM -->
              <a href="{{ route('sentra.cekout', ['product_id' => $item->id]) }}" type="button" class="btn btn-primary">Cekout</a>
          </div>
      </div>
  </div>
</div>
<<<<<<< HEAD
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<meta name="csrf-token" content="{{ csrf_token() }}">
<script>
    $(document).ready(function(){
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

        // Pindahkan definisi fungsi addToCart ke cakupan global
        window.addToCart = function(productId, productName, productPrice) {
            $.ajax({
                url: '/sentra/addCart',
                type: 'POST',
                headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
     },
                data: {
                    _token: CSRF_TOKEN,
                    product_id: productId,
                    name: productName,
                    price: productPrice
                },
                dataType: 'JSON',
                success: function(response) {
                    alert(response.message);
                        // Di sini Anda dapat memperbarui tampilan keranjang belanja jika diperlukan
                    },
                error: function(xhr, status, error) {
                    console.error(error);
                    alert('An error occurred. Please try again.');
                }
            });
        };

    });
    </script>



@endif

@if($item->category_id == 2)
=======
@endforeach
  
<!-- Modal -->
@foreach($product as $item)
>>>>>>> 3f82662a3b0cc3032264f188785eead9e3724708
<div class="modal fade" id="moreKegiatan{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
<<<<<<< HEAD
@endif
=======
>>>>>>> 3f82662a3b0cc3032264f188785eead9e3724708
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
