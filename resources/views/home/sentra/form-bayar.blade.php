@extends('layout.layout')
@section('sentra', 'active')
@section('title', 'Form Pembayaran')
@section('content')

<section class="main-content" style=" position: absolute; z-index: 1; padding-left: 150px; padding-top: 80px; padding-bottom: 17px; display: flex; flex-direction: column; min-height: 100vh;">
    <div class="container-fluid" style="background-color: white; min-width: 160vh;">
        <div class="row">
            <section class="col-lg-12 col-md-12 shopping-cart">
                <div class="card mb-2 bg-light border-0 section-header mt-3 mx-3" style="width: 18rem;">
                    <div class="card-body p-3">
                        <h2 class="mb-0">Bayar</h2>
                    </div>
                </div>
                <div class="pembayaran-form">
                    <div class="card shadow-sm mb-3">
                        <div class="col-xxl">
                  <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="mb-0">Bukti Pembayaran</h5>
                      <small class="text-muted float-end"></small>
                    </div>
                    <div class="card-body">
                      <form>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Nama</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="basic-default-name" placeholder="Silvana Ovarista" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="payment-number">No Pembayaran</label>
                          <div class="col-sm-10">
                            <input
                              type="text"
                              class="form-control"
                              id="payment-number"
                              placeholder="87562134."
                            />
                          </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="html5-date-input" class="col-md-2 col-form-label">Tanggal Transfer</label>
                            <div class="col-md-10">
                              <input class="form-control" type="date" value="2024-03-21" id="html5-date-input" />
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="html5-number-input" class="col-md-2 col-form-label">Jumlah Transfer</label>
                            <div class="col-md-10">
                              <input class="form-control" type="number" value="200000" id="html5-number-input" />
                            </div>
                        </div>

                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-email">Email</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <input
                                type="text"
                                id="basic-default-email"
                                class="form-control"
                                placeholder="Silvarista@gmail.com"
                                aria-label="Silvarista@gmail.com"
                                aria-describedby="basic-default-email2"
                              />
                            </div>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-phone">No Telepon</label>
                          <div class="col-sm-10">
                            <input
                              type="text"
                              id="basic-default-phone"
                              class="form-control phone-mask"
                              placeholder="0812 3456 7899"
                              aria-label="0812 3456 7899"
                              aria-describedby="basic-default-phone"
                            />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-message">Pesan</label>
                          <div class="col-sm-10">
                            <textarea
                              id="basic-default-message"
                              class="form-control"
                              placeholder=""
                              aria-label=""
                              aria-describedby="basic-icon-default-message2"
                            ></textarea>
                          </div>
                        </div>
                        <div class="mb-3">
                            <label for="formFileMultiple" class="form-label">Masukan Bukti Pembayaran Anda </label>
                            <input class="form-control" type="file" id="formFileMultiple" multiple />
                          </div>
                        <div>
                        <div class="row justify-content-end">
                          <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Send</button>
                          </div>
                        </div>
                      </form>
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
