@extends('layout.layout')
@section('title', 'Checkout')
@section('content')

<section class="main-content" style=" position: absolute; z-index: 1; padding-left: 150px; padding-top: 80px; padding-bottom: 120px; display: flex; flex-direction: column; min-height: 100vh;">
    <div class="container-fluid" style="background-color: white; min-width: 160vh;">
        <div class="row">
            <section class="col-lg-12 col-md-12 shopping-cart">
                <div class="card mb-4 bg-light border-0 section-header mt-5 mx-5">
                    <div class="card-body p-5">
                        <h2 class="mb-0">Checkout</h2>
                    </div>
                </div>
                <div class="row mx-3">
                    <div class="col-lg-6 col-md-6">
                        <div class="d-flex justify-content-between">
                            <h5 class="mb-0"><i class='bx bx-map'></i> Delivery Address</h5>
                            <a href="#" class="btn btn-outline-secondary btn-sm">Add a new address</a>
                        </div>
                        <div class="mt-3">
                            <div class="row">
                                <div class="col-lg-6 col-12 mb-4">
                                    <div class="card card-body p-6">
                                        <div class="form-check mb-4">
                                            <input class="form-check-input delivery-address" value="#" type="radio" name="address_id" id="homeRadio" checked>
                                            <label class="form-check-label text-dark" for="homeRadio">Rumah</label>
                                        </div>
                                        <!-- address -->
                                        <address>
                                            <strong>Silvana Ovarista</strong>
                                            <br>
                                            Jl. Terusan Ambarawan no. 137 Malang
                                            <br>
                                            <abbr title="Phone">0864-7389-****</abbr>
                                        </address>
                                        <span class="text-danger">Default address</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h5 class="mb-0"><i class='bx bxs-truck'></i> Delivery Service</h5>
                        <div class="mt-3">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input courier-code" type="radio" name="courier_code" id="inlineRadio1" value="ambil" checked>
                                <label class="form-check-label" for="inlineRadio1">Ambil ditempat</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input courier-code" type="radio" name="courier_code" id="inlineRadio2" value="pos">
                                <label class="form-check-label" for="inlineRadio2">POS</label>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between mt-4 mb-5">
                            <a href="products_index_link" class="btn btn-first" style="background-color: #F15D30; color: white; padding: 10px 20px; border-radius: 5px; text-decoration: none;">
                                Back to Shopping Cart</a>
                            <a href="#" type="submit" class="btn btn-second" style="background-color: transparent; color: #F15D30; border: 2px solid #F15D30; padding: 10px 20px; border-radius: 5px;">
                                Place Order</a>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 col-md-6">
                        <div class="mb-5 card mt-6 shadow">
                            <div class="card-body p-6">
                                <!-- heading -->
                                <h2 class="h5 mb-4">Order Details</h2>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item py-3 ">
                                        <div class="row align-items-center">
                                            <div class="col-6 col-md-6 col-lg-7">
                                                <div class="d-flex">
                                                    <img src="{{ asset('images/KriyaBatik.png') }}" alt="Ecommerce" style="height: 70px; width: 100px; padding-right: 10px; object-fit: cover;">
                                                    <div class="ms-3 mt-3">
                                                        <a href="#">
                                                            <h6 class="mb-0">Batik Tulis</h6>
                                                        </a>
                                                        <span class="my-2">
                                                            <small style= "color: black;" class="mt-2">IDR 120.000</small>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-1 col-md-1 col-lg-1">
                                                1
                                            </div>
                                            <div class="col-4 text-lg-end text-start text-md-end col-md-4">
                                                <span class="fw-bold">IDR 120.000</span>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="list-group-item py-3">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div>Item Subtotal</div>
                                            <div class="fw-bold">IDR 120.000</div>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div>Discount</div>
                                            <div class="fw-bold">IDR 12.000</div>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div>Tax (11%)</div>
                                            <div class="fw-bold">IDR 12.000</div>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mb-2">
                                            <div>Shipping Fee</div>
                                            <div class="fw-bold" id="shipping-fee">IDR 0</div>
                                        </div>

                                    </li>
                                    <li class="list-group-item py-3">
                                        <div class="d-flex align-items-center justify-content-between mb-4 fw-bold">
                                            <div>Grand Total</div>
                                            <div id="grand-total">IDR 120.000</div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="text-center">
                                    <a href="products_index_link" class="btn btn-first " 
                                    style="background-color: #F15D30; 
                                    color: white; 
                                    padding: 10px 20px; 
                                    border-radius: 5px; 
                                    text-decoration: none;">
                                    Payment Form</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</section>

<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('{{ asset('images/sentra.jpg') }}'); position: relative; z-index: 0; display: flex; align-items: center; justify-content: center; min-height: 150vh;">
        <div class="overlay"></div>
        <div class="container"></div>
</section>

@endsection