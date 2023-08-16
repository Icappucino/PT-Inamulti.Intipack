<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Wesbsite Icons -->
    <link href="{{asset('img/LOGO-INAMULTI.png')}}" rel="icon" type="image/x-icon" >
    <title>PT.Inamulti Intipack</title>
        <!-- Google Font -->
    <!-- ================={ Resource Google Font }====================
            Import Font from Google Font , Google Font Docs :
                        https://fonts.google.com/
    =============================================================== -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;500;600;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;500;600;700&family=Poppins:wght@200;300;400;500;600&display=swap" rel="stylesheet">
    <!-- Boostrap CSS -->
    <!-- ================={ Resource Boostrap }====================
    Make With Boostrap 5.3, Link Boostrap Docs  :
    https://getbootstrap.com/docs/5.3/getting-started/download/
    =============================================================== -->
<link href="{{asset('vendor/css/bootstrap.min.css')}}" rel="stylesheet" >
    <!-- Main CSS -->
<link href="{{asset('css/style.css')}}" rel="stylesheet" >
    <!-- Icons Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Boxicons -->
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- =============================================
    ================={ License }====================
    ================================================
      // Copyright && Icappucino 2023
      // Github : https://github.com/Icappucino
      // Instagram : https://www.instagram.com/icappucino_/
      // Powered by Spacecode.id
      // Instagram Vendor : https://www.instagram.com/spacecode.id/
    =============================================================== -->
</head>

<div class="row mt-3 d-flex justify-content-center align-items-center"
enctype="multipart/form-data">
    <div class="col-lg-6">
       <div class="card-posting">
         <div class="card-body">
         <div class="card-posting text-center">Posting Career</div>
         <hr>
         <!-- Awal Form -->
          <form method="POST" action="{{route('career.store')}}">
            @csrf
         <div class="form-group mt-3">
          <label for="input-3">Masukan Judul</label>
          <div class="input-group">
          <input type="text" name="judul" class="form-control" id="input-3" placeholder="IT Staff / Operator Produksi" required>
          </div>
         </div>
         <div class="form-group mt-3">
             <label for="input-4">Foto Career ( Opsional )</label>
             <div class="input-group">
             <input type="file" name="foto" class="form-control" id="input-4" placeholder="foto">
             </div>
        </div>
        <div class="form-group mt-3">
            <label for="input-5">Posisi yang dibutuhkan</label>
            <div class="input-group">
                <input type="text" name="posisi" class="form-control" id="input-5" placeholder="Backend Developer / Frontend Developer" required>
            </div>
        </div>
        <div class="form-group mt-3">
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Masukan Deskripsi</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="deskripsi" placeholder="Masukan Deskripsi seperti Kualifikasi"></textarea>
            </div>
        </div>
         <div class="form-group text-center">
          <a href="{{url('/Admin-Page-Admin-Dashboard')}}"><button type="button" class="btn btn-light px-5" name="kembali"><i class="bi bi-box-arrow-left"></i> Kembali ke Menu</button></a>
          <button type="submit" class="btn btn-light px-5" name="proses"><i class="icon-lock"></i> Posting Career</button>
        </div>
        </form>
        <!-- Akhir Form -->
       </div>
       </div>
    </div>
  </div><!--End Row-->



    <!-- Bootstrap JS -->
    <script src="{{asset('vendor/js/bootstrap.bundle.min.js')}}"></script>
    <!-- Main JS -->
    <script src="{{asset('js/main.js')}}"></script>
</body>
</html>
