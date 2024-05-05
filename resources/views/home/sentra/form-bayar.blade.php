@extends('layout.layout')
@section('sentra', 'active')
@section('title', 'Form Pembayaran')
@section('content')

<section class="main-content" style="position: absolute; z-index: 1; padding-left: 150px; padding-top: 80px; padding-bottom: 17px; display: flex; flex-direction: column; min-height: 100vh;">
    <div class="container-fluid" style="background-color: white; min-width: 160vh;">
        <div class="row">
            <div class="col-lg-5 col-md-5">
                <!-- Ringkasan Data dari Halaman Cekout Sebelumnya -->
                <div class="ringkasan-cekout my-3">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h5 class="card-title">Ringkasan Cekout</h5>
                        </div>
                        <div class="card-body">
                          <!-- Tambahkan informasi ringkasan cekout di sini -->
                          <p style="color: black;">Nama: {{ $fullName }}</p>
                          <p style="color: black;">Alamat: {{ $address }}</p>
                          <p style="color: black;">No HP: {{ $phoneNumber }}</p>
                          <p style="color: black;">No Transaksi: </p>
                          <p style="color: black;">Catatan: {{ $catatan }}</p>
                      </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-md-7">
                <!-- Form Pembayaran -->
                <div class="pembayaran-form">
                    <div class="card shadow-sm my-3">
                        <div class="col-xxl">
                            <div class="card mb-4">
                                <div class="card-header d-flex align-items-center justify-content-between">
                                    <h5 class="mb-0">Bukti Pembayaran</h5>
                                    <small class="text-muted float-end"></small>
                                </div>
                                <div class="card-body">
                                    <form method="POST" action="{{ route('sentra.bayar', ['product_id' => $product->id]) }}">
                                        @csrf
                                        <!-- Tanggal Transfer, Total Pembelian, Jumlah Transfer, Transfer Melalui, Bukti Pembayaran -->
                                        <div class="mb-3 row">
                                            <label for="html5-date-input" class="col-md-4 col-form-label">Tanggal Transfer</label>
                                            <div class="col-md-8">
                                                <input class="form-control" type="date" value="2024-03-21" id="html5-date-input" />
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="total-pembelian" class="col-md-4 col-form-label">Total Pembelian</label>
                                            <div class="col-md-8">
                                                <input class="form-control" type="number" value="IDR {{ number_format($product->price, 0, ',', '.') }}" id="total-pembelian" />
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="jumlah-transfer" class="col-md-4 col-form-label">Jumlah Transfer</label>
                                            <div class="col-md-8">
                                                <input class="form-control" type="number" value="IDR {{ number_format($product->price, 0, ',', '.') }}" id="jumlah-transfer" />
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="transfer-melalui" class="col-md-4 col-form-label">Transfer Melalui</label>
                                            <div class="col-md-8">
                                                <input class="form-control" type="text" id="transfer-melalui" />
                                            </div>
                                        </div>
                                        <div class="mb-3 row mx-1">
                                            <label for="bukti-pembayaran" class=" col-form-label">Bukti Pembayaran</label>
                                            <input class="form-control" type="file" id="bukti-pembayaran" multiple />
                                        </div>
                                        <div class="row justify-content-end">
                                          <div class="col-md-12 text-center">
                                              <button type="submit" class="btn btn-primary w-100" style="max-width: 200px;">Send</button>
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
    </div>
</section>

<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('{{ asset('images/sentra.jpg') }}'); position: relative; z-index: 0; display: flex; align-items: center; justify-content: center; min-height: 120vh;">
    <div class="overlay"></div>
    <div class="container"></div>
</section>

@endsection
