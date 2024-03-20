@extends('admin.layout')
@section('title', 'Admin | Dashboard')
@section('content')
 <!-- Layout container -->
 <div class="layout-page">
  <!-- Navbar -->
  <nav
    class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
    id="layout-navbar"
  >
    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
      <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
        <i class="bx bx-menu bx-sm"></i>
      </a>
    </div>

    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
      <ul class="navbar-nav flex-row align-items-center ms-auto">
        <!-- User -->
        <li class="nav-item navbar-dropdown dropdown-user dropdown">
          <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
            <div class="avatar avatar-online">
              <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
            </div>
          </a>
          <ul class="dropdown-menu dropdown-menu-end">
            <li>
              <a class="dropdown-item" href="#">
                <div class="d-flex">
                  <div class="flex-shrink-0 me-3">
                    <div class="avatar avatar-online">
                      <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </div>
                  <div class="flex-grow-1">
                    <span class="fw-semibold d-block">John Doe</span>
                    <small class="text-muted">Admin</small>
                  </div>
                </div>
              </a>
            </li>
            <li>
              <div class="dropdown-divider"></div>
            </li>
            <li>
              <a class="dropdown-item" href="#">
                <i class="bx bx-user me-2"></i>
                <span class="align-middle">My Profile</span>
              </a>
            </li>
            <li>
              <a class="dropdown-item" href="#">
                <i class="bx bx-cog me-2"></i>
                <span class="align-middle">Settings</span>
              </a>
            </li>
            <li>
              <div class="dropdown-divider"></div>
            </li>
            <li>
              <a class="dropdown-item" href="auth-login-basic.html">
                <i class="bx bx-power-off me-2"></i>
                <span class="align-middle">Log Out</span>
              </a>
            </li>
          </ul>
        </li>
        <!--/ User -->
      </ul>
    </div>
  </nav>

  <!-- / Navbar -->

  <!-- Content wrapper -->
  <div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
      <div class="row">
        <!-- Transactions -->
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card h-100">
            <div class="card-header d-flex align-items-center justify-content-between">
              <h5 class="card-title m-0 me-2">Transactions</h5>
              <div class="dropdown">
                <button
                  class="btn p-0"
                  type="button"
                  id="cardOpt1"
                  data-bs-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <i class="bx bx-dots-vertical-rounded"></i>
                </button>
                <div class="dropdown-menu" aria-labelledby="cardOpt1">
                  <a class="dropdown-item" href="javascript:void(0);">View More</a>
                </div>
              </div>
            </div>
            <div class="card-body mt-3">
              <ul class="p-0 m-0">
                <li class="d-flex mb-4 pb-1">
                  <div class="list-group list-group-flush w-100">
                    <a href="javascript:void(0);" class="list-group-item list-group-item-action">
                      <div class="d-flex  flex-wrap align-items-center justify-content-between gap-2">
                        <div class="me-2">
                          <h6 class="mb-0">Arin</h6>
                        </div>
                        <div class="user-progress d-flex align-items-center gap-1">
                          <span class="text-muted">Rp</span>
                          <h6 class="mb-0">1.100.000</h6>
                        </div>
                        <div> <span class="badge bg-label-success me-1">Success</span> </div>
                      </div>
                    </a>
                  </div>  
                </li>
                <li class="d-flex mb-4 pb-1">
                  <div class="list-group list-group-flush w-100">
                    <a href="javascript:void(0);" class="list-group-item list-group-item-action">
                      <div class="d-flex  flex-wrap align-items-center justify-content-between gap-2">
                        <div class="me-2">
                          <h6 class="mb-0">Tatya</h6>
                        </div>
                        <div class="user-progress d-flex align-items-center gap-1">
                          <span class="text-muted">Rp</span>
                          <h6 class="mb-0">1.100.000</h6>
                        </div>
                        <div> <span class="badge bg-label-success me-1">Success</span> </div>
                      </div>
                    </a>
                  </div>  
                </li>                        
                <li class="d-flex mb-4 pb-1">
                  <div class="list-group list-group-flush w-100">
                    <a href="javascript:void(0);" class="list-group-item list-group-item-action">
                      <div class="d-flex  flex-wrap align-items-center justify-content-between gap-2">
                        <div class="me-2">
                          <h6 class="mb-0">Vina</h6>
                        </div>
                        <div class="user-progress d-flex align-items-center gap-1">
                          <span class="text-muted">Rp</span>
                          <h6 class="mb-0">1.100.000</h6>
                        </div>
                        <div> <span class="badge bg-label-success me-1">Success</span> </div>
                      </div>
                    </a>
                  </div>  
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!--/ Transactions -->
        <!-- Order Statistics -->
        <div class="col-md-6 col-lg-3 col-xl-4 mb-4">
          <div class="card h-100">
            <div class="card-header d-flex align-items-center justify-content-between pb-0">
              <div class="card-title mb-0">
                <h5 class="m-0 me-2">Order Statistics</h5>
              </div>
            </div>
            <div class="card-body mt-3">
              <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="d-flex flex-column align-items-center gap-1">
                  <h2 class="mb-2">38</h2>
                  <span>Total Transaksi</span>
                </div>
                <div id="orderStatisticsChart"></div>
              </div>
              <ul class="p-0 m-0 mt-4">
                <li class="d-flex mb-4 pb-1">
                  <div class="avatar flex-shrink-0 me-3">
                    <span class="avatar-initial rounded bg-label-primary"
                      ><i class="bx bx-mobile-alt"></i
                    ></span>
                  </div>
                  <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                    <div class="me-2">
                      <h6 class="mb-0">Booking</h6>
                    </div>
                    <div class="user-progress">
                      <small class="fw-semibold">6</small>
                    </div>
                  </div>
                </li>
                <li class="d-flex mb-4 pb-1">
                  <div class="avatar flex-shrink-0 me-3">
                    <span class="avatar-initial rounded bg-label-success"><i class="bx bx-closet"></i></span>
                  </div>
                  <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                    <div class="me-2">
                      <h6 class="mb-0">Topeng</h6>
                    </div>
                    <div class="user-progress">
                      <small class="fw-semibold">18</small>
                    </div>
                  </div>
                </li>
                <li class="d-flex mb-4 pb-1">
                  <div class="avatar flex-shrink-0 me-3">
                    <span class="avatar-initial rounded bg-label-info"><i class="bx bx-home-alt"></i></span>
                  </div>
                  <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                    <div class="me-2">
                      <h6 class="mb-0">Batik</h6>
                    </div>
                    <div class="user-progress">
                      <small class="fw-semibold">9</small>
                    </div>
                  </div>
                </li>
                <li class="d-flex">
                  <div class="avatar flex-shrink-0 me-3">
                    <span class="avatar-initial rounded bg-label-secondary"
                      ><i class="bx bx-football"></i
                    ></span>
                  </div>
                  <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                    <div class="me-2">
                      <h6 class="mb-0">Aksesoris</h6>
                    </div>
                    <div class="user-progress">
                      <small class="fw-semibold">99</small>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!--/ Order Statistics -->
        <div class="col-lg-4 col-md-4 mb-4">
          <div class="row">
            <div class="col-lg-6 col-md-12 col-6 mb-4">
              <div class="card">
                <div class="card-body">
                  <div class="card-title d-flex align-items-start justify-content-between">
                    <div class="avatar flex-shrink-0">
                      <img
                        src="{{asset ('admin/assets/img/icons/unicons/chart.png') }}"
                        alt="chart success"
                        class="rounded"
                      />
                    </div>
                    <div class="dropdown">
                      <button
                        class="btn p-0"
                        type="button"
                        id="cardOpt3"
                        data-bs-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                      >
                        <i class="bx bx-dots-vertical-rounded"></i>
                      </button>
                      <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                        <a class="dropdown-item" href="javascript:void(0);">View More</a>
                      </div>
                    </div>
                  </div>
                  <span class="fw-semibold d-block mb-1">Stok Produk</span>
                  <!-- dibuat jumlah dari stok produk(nyambung ke bgian stok) -->
                  <h3 class="card-title mb-2">63</h3> 
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-12 col-6 mb-4">
              <div class="card">
                <div class="card-body">
                  <div class="card-title d-flex align-items-start justify-content-between">
                    <div class="avatar flex-shrink-0">
                      <img
                        src="{{asset ('admin/assets/img/icons/unicons/galeri.png') }}"
                        alt="Galeri"
                        class="rounded"
                      />
                    </div>
                    <div class="dropdown">
                      <button class="btn p-0" type="button" id="cardOpt6" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="bx bx-dots-vertical-rounded"></i>
                      </button>
                      <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt6">
                        <a class="dropdown-item" href="javascript:void(0);">View More</a>
                      </div>
                    </div>
                  </div>
                  <span class="fw-semibold d-block mb-1">Total Galeri</span>
                  <h3 class="card-title text-nowrap mb-1">26</h3>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6 col-md-12 col-6 mb-4">
              <div class="card">
                <div class="card-body">
                  <div class="card-title d-flex align-items-start justify-content-between">
                    <div class="avatar flex-shrink-0">
                      <img src="{{asset ('admin/assets/img/icons/unicons/artikel.png') }}" alt="Artikel" class="rounded" />
                    </div>
                    <div class="dropdown">
                      <button
                        class="btn p-0"
                        type="button"
                        id="cardOpt4"
                        data-bs-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                      >
                        <i class="bx bx-dots-vertical-rounded"></i>
                      </button>
                      <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt4">
                        <a class="dropdown-item" href="javascript:void(0);">View More</a>
                      </div>
                    </div>
                  </div>
                  <span class="fw-semibold d-block mb-1">Total Artikel</span>
                  <h3 class="card-title text-nowrap mb-2">12</h3>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-12 col-6 mb-4">
              <div class="card">
                <div class="card-body">
                  <div class="card-title d-flex align-items-start justify-content-between">
                    <div class="avatar flex-shrink-0">
                      <img src="{{asset ('admin/assets/img/icons/unicons/wallet.png') }}" alt="Credit Card" class="rounded" />
                    </div>
                    <div class="dropdown">
                      <button
                        class="btn p-0"
                        type="button"
                        id="cardOpt1"
                        data-bs-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                      >
                        <i class="bx bx-dots-vertical-rounded"></i>
                      </button>
                      <div class="dropdown-menu" aria-labelledby="cardOpt1">
                        <a class="dropdown-item" href="javascript:void(0);">View More</a>
                      </div>
                    </div>
                  </div>
                  <span class="fw-semibold d-block mb-1">Paket Booking</span>
                  <h3 class="card-title mb-2">6</h3>
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex justify-content-between flex-sm-row flex-column gap-3">
                    <div class="d-flex flex-sm-column flex-row align-items-start justify-content-between">
                      <div class="card-title">
                        <h5 class="text-nowrap">Website Viewer</h5>
                      </div>
                      <div class="mt-1">
                        <h3 class="mb-1">185</h3>
                      </div>
                    </div>
                    <div id="profileReportChart" class="mt-1"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- / Content -->
@endsection 