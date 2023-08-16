@extends('admin.index')
@section('Recruitment')
<div class="row mt-3">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body text-center">
          <h5 class="card-title">Recruitment</h5>
          <span class="badge bg-success">Hijau Untuk Setujui</span>
          <span class="badge bg-danger">Merah Untuk Tolak</span>
          <div class="table-responsive">
           <table class="table">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Id Recruitment</th>
                  <th scope="col">Nama Lengkap</th>
                  <th scope="col">Alamat</th>
                  <th scope="col">Usia</th>
                  <th scope="col">Pendidikan Terakhir</th>
                  <th scope="col">Keterangan</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row"></th>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td>
                    <!-- Tombol untuk memicu modal -->
                    <button type="button" class="btn btn-primary" onclick="openModal()"><i class="bi bi-person-fill"></i> Lihat Details</button>
                  </td>
                  <td>
                    <button class="btn btn-success" type="submit"><i class="bi bi-check-lg"></i></button>
                    <button class="btn btn-danger" type="submit"><i class="bi bi-x-lg"></i></button>
                </td>
                </tr>
                <tr>
                  <th scope="row"></th>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td>
                    <!-- Tombol untuk memicu modal -->
                    <button type="button" class="btn btn-primary" onclick="openModal()"><i class="bi bi-person-fill"></i> Lihat Details</button>
                  </td>
                  <td>
                    <button class="btn btn-success" type="submit"><i class="bi bi-check-lg"></i></button>
                    <button class="btn btn-danger" type="submit"><i class="bi bi-x-lg"></i></button>
                  </td>
                </tr>
                <tr>
                  <th scope="row"></th>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td>
                    <!-- Tombol untuk memicu modal -->
                    <button type="button" class="btn btn-primary" onclick="openModal()"><i class="bi bi-person-fill"></i> Lihat Details</button>
                  </td>
                  <td>
                    <button class="btn btn-success" type="submit"><i class="bi bi-check-lg"></i></button>
                    <button class="btn btn-danger" type="submit"><i class="bi bi-x-lg"></i></button>
                  </td>
                </tr>
              </tbody>
            </table>
        </div>
        </div>
      </div>
    </div>
    <!-- Batas -->
  </div><!--End Row-->

    <!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Details Recruitment</h1>
        </div>
        <div class="modal-body">
          <!-- Batas -->
          <div class="col-lg-12">
            <div class="card mb-4">
              <div class="card-body custom-bg">
                <div class="row custom-bg">
                  <div class="col-sm-3">
                    <p class="mb-0">Nama Lengkap</p>
                  </div>
                  <div class="col-sm-9">
                    <p class="mb-0"></p>
                  </div>
                </div>
                <hr class="batas">
                <div class="row custom-bg">
                  <div class="col-sm-3">
                    <p class="mb-0">Alamat</p>
                  </div>
                  <div class="col-sm-9">
                    <p class="mb-0"></p>
                  </div>
                </div>
                <hr class="batas">
                <div class="row custom-bg">
                  <div class="col-sm-3">
                    <p class="mb-0">Usia</p>
                  </div>
                  <div class="col-sm-9">
                    <p class="mb-0"></p>
                  </div>
                </div>
                <hr class="batas">
                <div class="row custom-bg">
                    <div class="col-sm-3">
                      <p class="mb-0">Pendidikan Terakhir</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="mb-0"></p>
                    </div>
                </div>
                <hr class="batas">
                <div class="row custom-bg">
                  <div class="col-sm-3">
                    <p class="mb-0">Nomor Telepon</p>
                  </div>
                  <div class="col-sm-9">
                    <p class="mb-0"></p>
                  </div>
                </div>
                <hr class="batas">
                <div class="row custom-bg">
                  <div class="col-sm-3">
                    <p class="mb-0">Email</p>
                  </div>
                  <div class="col-sm-9">
                    <p class="mb-0"></p>
                  </div>
                </div>
                <hr class="batas">
                <div class="row custom-bg">
                    <div class="col-sm-3">
                      <p class="mb-0">Foto Diri</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="mb-0"></p>
                    </div>
                  </div>
                  <hr class="batas">
                  <div class="row custom-bg">
                    <div class="col-sm-3">
                      <p class="mb-0">Foto KTP</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="mb-0"></p>
                    </div>
                  </div>
                  <hr class="batas">
                  <div class="row custom-bg">
                    <div class="col-sm-3">
                      <p class="mb-0">Ijazah</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="mb-0"></p>
                    </div>
                  </div>
                  <hr class="batas">
                  <div class="row custom-bg">
                    <div class="col-sm-3">
                      <p class="mb-0">CV</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="mb-0"></p>
                    </div>
                  </div>
                  <hr class="batas">
                  <div class="row custom-bg">
                    <div class="col-sm-3">
                      <p class="mb-0">Surat Kelakuan Baik</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="mb-0"></p>
                    </div>
                  </div>
                  <hr class="batas">
                  <div class="row custom-bg">
                    <div class="col-sm-3">
                      <p class="mb-0">Npwp</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="mb-0"></p>
                    </div>
                  </div>
                  <hr class="batas">
              </div>
            </div>
          <!-- Batas -->
        </div>
        <div class="modal-footer">
          <!-- Tombol untuk menutup modal -->
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="closeModal()">Close</button>
        </div>
      </div>
    </div>
</div>
    <!-- Modal -->
@endsection
