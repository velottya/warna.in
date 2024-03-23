@extends('layout.sidebar')
@section('artikel', 'active')
@section('title', 'Admin | Artikel')
@section('content')

<!-- Content wrapper -->
<div class="content-wrapper">
  <!-- Content -->
  <div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">Artikel Blog Kampung Budaya Polowijen</h4>
    <div class="card">
      <button type="button" class="btn btn-primary btn-lg mx-4 mb-4 mt-4" style="width: 200px;" data-bs-toggle="modal" data-bs-target="#tambahGaleri"> Tambah Artikel
      </button>

      <!-- Modal Tambah Blog-->
      <div class="modal fade" id="tambahGaleri" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel1">Tambah Artikel</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" ></button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="mb-3">
                  <label for="formFile" class="form-label">Gambar Utama Blog</label>
                  <input class="form-control" type="file" id="formFile" />
                </div>
              </div>
              <div class="row">
                <div class="col mb-3">
                  <label for="nameBasic" class="form-label">Judul Blog</label>
                  <input type="text" id="nameBasic" class="form-control" placeholder="Tambahkan Judul" />
                </div>
              </div>
              <div class="row">
                <div class="col mb-3">
                  <label for="nameBasic" class="form-label">Isi Blog</label>
                  <input type="text" id="nameBasic" class="form-control" style="height: 100px;" placeholder="Tambahkan Deskripsi" />
                </div>
              </div>
              <div class="row g-2">
                  <div class="col-6 mb-0">
                    <label for="dobBasic" class="form-label">Time Stamp</label>
                    <input type="text" id="dobBasic" class="form-control" readonly />
                  </div>
                </div>
                <script> var inputTimestamp = document.getElementById('dobBasic'); var timestampNow = new Date().toLocaleDateString(); inputTimestamp.value = timestampNow;
                </script>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                Close
              </button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>
      <!-- End Modal Tambah Blog-->

      <!-- Tabel Artikel -->
      <div class="table-responsive text-nowrap" style="min-height:50vh;">
        <table class="table">
          <thead>
              <tr>
                  <th style="width: 100px; padding-left: 45px;">Assets</th>
                  <th style="width: 200px; padding-left: 45px;">Judul Blog</th>
                  <th style="width: 300px; padding-left: 120px;">Isi Blog</th>
                  <th style="width: 150px; padding-left: 15px;">Time Stamp</th>
                  <th style="width: 100px;">Actions</th>
              </tr>
          </thead>
          <tbody class="table-border-bottom-0">
            <!-- Baris Isi Artikel -->
            <tr>
              <td>
                <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                  <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xl pull-up mx-3" title="Sinau Tembang">
                    <img src="../assets/img/galeri/tembang.png" alt="Avatar"  />
                  </li>
                </ul>
              </td>
              <td style="max-width: 150px; overflow: hidden; white-space: nowrap;">
                  <strong class="truncate-text" id="truncateText">SINAU TEMBANG</strong>
              </td>
              <script>
              var truncateElement = document.getElementById('truncateText');
              var words = truncateElement.textContent.split(' ').slice(0, 2).join(' ');
              truncateElement.textContent = words + ' ...';
              </script>                       

              <td style="max-width: 150px; overflow: hidden; white-space: nowrap;">
                  <p class="truncate-text mt-3" id="truncateIsi"> Kegiatan ini rutin dilakukan pada hari jumat sabtu</p>
              </td>
              <script>
                  var truncateElement = document.getElementById('truncateIsi');
                  var words = truncateElement.textContent.split(' ').slice(0, 7).join(' ');
                  truncateElement.textContent = words + ' ...';
                  </script>               
              <td><span class="badge bg-label-primary me-1">12 Januari</span></td>
              <td>
                <div class="dropdown">
                  <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                    <i class="bx bx-dots-vertical-rounded"></i>
                  </button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#previewGaleri"
                      ><i class="bx bx-edit-alt me-1"></i> More Preview</a>
                    <a class="dropdown-item" href="javascript:void(0);"  data-bs-toggle="modal" data-bs-target="#editGaleri"
                      ><i class="bx bx-edit-alt me-1"></i> Edit</a>
                    <a class="dropdown-item" href="javascript:void(0);"
                      ><i class="bx bx-trash me-1"></i> Delete</a>
                  </div>
                </div>
              </td>

              <!-- Modal Preview-->
              <div class="modal fade" id="previewGaleri" tabindex="-1" aria-hidden="true" aria-labelledby="modalGambarLabel">
                <div class="modal-dialog modal-dialog-centered modal-sm">
                  <div class="modal-content">
                    <div class="modal-header">
                      <!-- Dibuat mengambil nama gambar dri database msukannya juga -->
                      <h5 class="modal-title text-center">Sinau Tembang</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-center">
                      <img src="../assets/img/galeri/tembang.png" class="img-fluid" alt="Gambar" style="width: 500px;"/>
                      <p class="my-4">Kegiatan ini rutin ...</p>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Modal Preview-->

              <!-- Modal Edit-->
              <div class="modal fade" id="editGaleri" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel1">Edit Galeri</h5>
                      <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"
                      ></button>
                    </div>
                    <div class="modal-body">
                      <div class="row">
                        <div class="mb-3">
                          <label for="formFile" class="form-label">Pilih Gambar</label>
                          <input class="form-control" type="file" id="formFile" />
                        </div>
                      </div>
                      <div class="row">
                        <div class="col mb-3">
                          <label for="nameBasic" class="form-label">Judul</label>
                          <input type="text" id="nameBasic" class="form-control" placeholder="Tambahkan Judul" />
                        </div>
                      </div>
                      <div class="row">
                        <div class="col mb-3">
                          <label for="nameBasic" class="form-label">Deskripsi Galeri</label>
                          <input type="text" id="nameBasic" class="form-control" style="height: 100px;" placeholder="Tambahkan Deskripsi" />
                        </div>
                      </div>
                      <div class="row g-2">
                        <div class="col-6 mb-0">
                          <label for="dobBasic" class="form-label">Time Stamp</label>
                          <input type="text" id="dobBasic" class="form-control" placeholder="12 / 02 / 2024" />
                        </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                        Close
                      </button>
                      <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Modal Edit-->
              
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <!--/ Basic Bootstrap Table -->
  </div>
    
@endsection