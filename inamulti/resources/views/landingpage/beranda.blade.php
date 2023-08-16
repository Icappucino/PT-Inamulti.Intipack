@extends('index')
@section('Beranda')
<!-- Beranda Start -->
<section id="hero">
    <div class="container h-100">
        <div class="row w-100">
            <div class="col-md-12 text-center position-absolute start-0 top-50 hero-tagline">
                <h3 class="hero-title">Melangkah Bersama Inovasi, Kepercayaan, dan Kualitas Terbaik </br>untuk Kemasan
                    Industri Anda</h3>
                <a href="#layanan"><button class="button-hero">Selengkapnya</button></a>
            </div>
        </div>
    </div>
</section>
<!-- Beranda Ended -->
<!-- Layanan Section Start -->
<section id="layanan">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card-layanan position-relative d-flex flex-column align-items-center justify-content-center">
                    <div class="layanan-image">
                        <img src="{{asset('img/Polyester_film_ASTROLL.png')}}" alt="" class="img-fluid img-layanan">
                    </div>
                    <h3 class="layanan-title text-center position-absolute top-50 start-50 translate-middle w-80">Polyester Film | ASTROLL</h3>
                    <a href="{{url('/Polyester-Astroll-Details')}}"><button class="button-hvr hidden-content">Lihat Details</button></a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-layanan position-relative d-flex flex-column align-items-center justify-content-center">
                    <div class="layanan-image">
                        <img src="{{asset('img/Nylon_Film_AMIDROLL.png')}}" alt="" class="img-fluid img-layanan">
                    </div>
                    <h3 class="layanan-title text-center position-absolute top-50 start-50 translate-middle w-80">Nylon Film | AMIDROLL</h3>
                    <a href="{{url('/Nylon-Amidroll-Details')}}"><button class="button-hvr hidden-content">Lihat Details</button></a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-layanan position-relative d-flex flex-column align-items-center justify-content-center">
                    <div class="layanan-image">
                        <img src="{{asset('img/Nylon_Film_KOFIL.png')}}" alt="" class="img-fluid img-layanan">
                    </div>
                    <h3 class="layanan-title text-center position-absolute top-50 start-50 translate-middle w-80">Nylon Film | KOFIL</h3>
                    <a href="{{url('/Nylon-Kofil-Details')}}"><button class="button-hvr hidden-content">Lihat Details</button></a>
                </div>
            </div>
        </div>
        <!-- Keterangan Layanan -->
        <div class="row">
            <div class="col-lg-6 mb-4">
                <h3 class="ket-lay-title">Nylon Film</h3>
                <p class="ket-lay-par">
                    Nylon film packaging adalah salah satu jenis kemasan yang digunakan dalam
                    berbagai industri. Kemasan film nylon ini memiliki ketahanan tinggi terhadap
                    tekanan dan kelembaban, sehingga sangat efektif dalam melindungi produk dari
                    kerusakan fisik dan kondisi lingkungan yang tidak menguntungkan selama proses
                    transportasi dan penyimpanan. Kelebihan lain dari nylon film packaging adalah
                    kemampuannya untuk menjaga kesegaran produk, terutama dalam industri
                    makanan dan minuman.
                </p>
                </div>
            <div class="col-lg-6 mb-4">
                <img src="{{asset('img/Home-3.jpg')}}" alt="img-layanan-2" class="img-fluid img-layanan-2">
            </div>
        </div>
        <!-- Keterangan Layanan -->
        <div class="row">
            <div class="col-lg-6 mb-4">
                <img src="{{asset('img/Home-4.jpg')}}" alt="img-layanan-2" class="img-fluid img-layanan-2">
            </div>
            <div class="col-lg-6 mb-4">
                <h3 class="ket-lay-title">Polyester Film</h3>
                <p class="ket-lay-par">
                    Polyester film packaging salah satu jenis kemasan yang sering digunakan dalam
                    berbagai industri. Kemasan film polyester ini memiliki sifat yang kuat, tahan
                    terhadap robek, dan memiliki ketahanan yang baik terhadap bahan kimia.
                    Kekuatan dan ketahanannya menjadikan polyester film packaging sangat cocok
                    untuk melindungi produk dari kerusakan fisik, kelembaban, dan kontaminasi
                    selama transportasi dan penyimpanan.
                </p>
            </div>
        </div>
        <!-- Batas Container -->
    </div>
</section>
<!-- Layanan Section Ended -->
@endsection
