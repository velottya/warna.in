@extends('layout.sidebar')
@section('pembayaran', 'active')
@section('title', 'Admin | Verifikasi Pembayaran')
@section('content')

  <!-- Content wrapper -->
  <div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
      <h4 class="fw-bold py-3 mb-4">Transaksi Sentra</h4>
      <div class="card">
        <div class="table-responsive text-nowrap">
          <table class="table">
            <thead>
              <tr>
                <th>no</th>
                <th>no pesanan</th>
                <th>nama pembeli</th>
                <th>Tanggal pesanan</th>
                <th>Metode bayar</th>
                <th>Total bayar</th>
                <th></th>
              </tr>
            </thead>
            <tbody class="table-border-bottom-0">
              <!-- Baris Isi Galeri -->
              <tr>
                <td>1</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>5</td>
                <td>
                    <button type="button" class="btn btn-success btn-md mx-2 mb-4 mt-4">
                    Terima
                    </button>
                    <button type="button" class="btn btn-danger btn-md mx-2 mb-4 mt-4">
                    Tolak
                    </button>
                </td>
              </tr>          
            </tbody>
          </table>
        </div>
      </div>
      <!--/ Basic Bootstrap Table -->
    </div>

@endsection