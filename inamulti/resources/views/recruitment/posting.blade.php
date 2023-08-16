<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Recruitment</title>
  <!-- loader-->
  <link href="{{asset('css/pace.min.css')}}" rel="stylesheet"/>
  <script src="{{asset('js/pace.min.js')}}"></script>
  <!--favicon-->
  <link rel="icon" href="{{asset('img/LOGO-INAMULTI.png')}}" type="image/x-icon">
  <!-- Vector CSS -->
  <link href="{{asset('admin/plugins/vectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet"/>
  <!-- simplebar CSS-->
  <link href="{{asset('admin/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet"/>
  <!-- Bootstrap core CSS-->
  <link href="{{asset('admin/css/bootstrap.min.css')}}" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="{{asset('admin/css/animate.css')}}" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="{{asset('admin/css/icons.css')}}" rel="stylesheet" type="text/css"/>
  <!-- Sidebar CSS-->
  <link href="{{asset('admin/css/sidebar-menu.css')}}" rel="stylesheet"/>
  <!-- Custom Style-->
  <link href="{{asset('admin/css/app-style.css')}}" rel="stylesheet"/>
  <!-- Custom Style-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body class="bg-theme bg-theme1">

<div class="row mt-3 d-flex justify-content-center align-items-center"
    <div class="col-lg-6">
       <div class="card">
         <div class="card-body">
         <div class="card-title text-center">Form Lamaran</div>
         <hr>
         <!-- Awal Form -->
          <form method="POST" action="{{route('recruitment.store')}}" enctype="multipart/form-data">>
            @csrf
         <div class="form-group mt-3">
          <label for="input-3">Masukan Nama Lengkap</label>
          <div class="input-group">
          <input type="text" name="nama" class="form-control" id="input-3" placeholder="Isi Nama sesuai dengan KTP" required>
          </div>
         </div>
         <div class="form-group mt-3">
            <label for="input-5">Usia</label>
            <div class="input-group">
                <input type="text" name="usia" class="form-control" id="input-5" placeholder="Ketik menggunakan Angka" required>
            </div>
        </div>
        <div class="form-group mt-3">
            <label for="input-5">Alamat Sesuai Ktp</label>
            <div class="input-group">
                <input type="text" name="alamat" class="form-control" id="input-5" placeholder="Jl. Jend A.Yani no 1, Bekasi, Jawa Barat" required>
            </div>
        </div>
        <div class="form-group mt-3">
            <label for="input-5">Pendidikan Terakhir</label>
            <div class="input-group">
                <input type="text" name="pendidikan" class="form-control" id="input-5" placeholder="S1 Informatika / S1 Akutansi / S1 Psikologi" required>
            </div>
        </div>
        <div class="form-group mt-3">
            <label for="input-5">Nomor HP Aktif</label>
            <div class="input-group">
                <input type="text" name="nomor" class="form-control" id="input-5" placeholder="085xxxxxxxxxx76" required>
            </div>
        </div>
        <div class="form-group mt-3">
            <label for="input-5">Email Aktif</label>
            <div class="input-group">
                <input type="text" name="email" class="form-control" id="input-5" placeholder="Masukan Email Aktif" required>
            </div>
        </div>
         <div class="form-group mt-3">
             <label for="input-4">Foto Diri</label>
             <div class="input-group">
                <input type="file" name="foto_diri" class="form-control" id="input-4" placeholder="foto">
             </div>
        </div>
        <div class="form-group mt-3">
            <label for="input-4">Foto KTP</label>
            <div class="input-group">
                <input type="file" name="foto-ktp" class="form-control" id="input-4" placeholder="foto">
            </div>
       </div>
       <div class="form-group mt-3">
            <label for="input-4">Ijazah ( PDF File )</label>
            <div class="input-group">
                <input type="file" name="pdf_file" class="form-control" id="input-4" accept=".pdf">
            </div>
        </div>
        <div class="form-group mt-3">
         <label for="input-4">CV ( PDF File )</label>
         <div class="input-group">
            <input type="file" name="pdf_cv" class="form-control" id="input-4" accept=".pdf">
        </div>
        </div>
        <div class="form-group mt-3">
            <label for="input-4">SKKB (PDF File ) ( Opsional )</label>
            <div class="input-group">
                <input type="file" name="pdf_skkb" class="form-control" id="input-4" accept=".pdf">
            </div>
       </div>
       <div class="form-group mt-3">
            <label for="input-4">NPWP (PDF File) (Opsional)</label>
            <div class="input-group">
                <input type="file" name="pdf_npwp" class="form-control" id="input-4" accept=".pdf">
            </div>
        </div>
         <div class="form-group text-center">
          <a href="{{url('/Beranda')}}"><button type="button" class="btn btn-light px-5" name="kembali"><i class="bi bi-box-arrow-left"></i> Kembali ke Menu</button></a>
          <button type="submit" class="btn btn-light px-5" name="proses"><i class="icon-lock"></i> Posting Career</button>
        </div>
        </form>
        <!-- Akhir Form -->
       </div>
       </div>
    </div>
  </div><!--End Row-->

  <!-- Bootstrap core JavaScript-->
  <script src="{{asset('admin/js/popper.min.js')}}"></script>
  <script src="{{asset('admin/js/jquery.min.js')}}"></script>
  <script src="{{asset('admin/js/bootstrap.min.js')}}"></script>

 <!-- simplebar js -->
  <script src="{{asset('admin/plugins/simplebar/js/simplebar.js')}}"></script>
  <!-- sidebar-menu js -->
  <script src="{{asset('admin/js/sidebar-menu.js')}}"></script>
  <!-- loader scripts -->
  <script src="{{asset('admin/js/jquery.loading-indicator.js')}}"></script>
  <!-- Custom scripts -->
  <script src="{{asset('admin/js/app-script.js')}}"></script>
  <!-- Chart js -->

  <script src="{{asset('admin/plugins/Chart.js/Chart.min.js')}}"></script>

  <!-- Index js -->
  <script src="{{asset('admin/js/index.js')}}"></script>
</body>
</html>
