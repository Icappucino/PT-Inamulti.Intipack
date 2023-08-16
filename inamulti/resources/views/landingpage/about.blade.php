@extends('index')
@section('About')
<!-- Tentang Kami Start -->
<section id="about">
    <div class="container h-100">
        <div class="row w-100">
            <div class="col-md-12 text-center position-absolute start-0 top-50 hero-tagline">
                <h1 class="about-title">Tentang Kami</h1>
                <p class="about-sub-title">PT. INAMULTI INTIPACK didirikan pada tanggal 11 Agustus tahun 1995 sebagai distributor KOLON INDUSTRIES,INC. (KOREA). Dengan banyaknya permintaan customer KOLON INDUSTRIES,INC. (KOREA) dan PT. Inamulti Intipack mendirikan PT. KOLON INA pada tanggal 22 Juli 1995 sesuai dengan hukum penanaman modal asing Indonesia (409/I/PMA/1995). KOLON INA memproduksi film berbahan dasar Polyester dan Nylon untuk kemasan makanan. Perusahaan memulai Produksi Komersial Polyester Film sejak April 1997 dan telah berhasil memasok ke produsen makanan Indonesia, Amerika Serikat, Eropa dan Asia.</p>
                <a href="#visi-misi"><button class="button-about">Selengkapnya</button></a>
            </div>
        </div>
    </div>
</section>
<!-- Tentang Kami Ended -->
<!-- Visi-Misi Start -->
<section id="visi-misi">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h3 class="about-sub-paragraf">Visi Kami</h3>
                <p class="about-paragraf">Menjadi perusahaan supplier packaging terkemuka yang inovatif dan terpercaya </br> untuk memenuhi kebutuhan pelanggan di berbagai industri.</p>
            </div>
            <div class="col-12 text-center">
                <h3 class="about-sub-paragraf">Misi Kami</h3>
                <p class="about-paragraf"></p>
            </div>
        </div>
        <!-- Keterangan Layanan -->
        <div class="row">
            <div class="col-md-6">
                <div class="card-about position-relative">
                    <div class="about-misi d-flex justify-content-center">
                        <img src="{{asset('img/Home-1.jpg')}}" alt="img-misi-1" class="img-fluid img-misi">
                    </div>
                    <p class="about-p-misi text-center">Memberikan produk packaging berkualitas tinggi: Kami bertekad untuk menyediakan produk packaging yang berkualitas tinggi dan sesuai dengan standar industri. Kami akan terus meningkatkan material packaging untuk memenuhi berbagai kebutuhan pelanggan.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card-about position-relative">
                    <div class="about-misi d-flex justify-content-center">
                        <img src="{{asset('img/Home-2.jpg')}}" alt="img-misi-1" class="img-fluid img-misi">
                    </div>
                    <p class="about-p-misi text-center">Responsif terhadap permintaan: Kami akan merespons permintaan pelanggan dengan cepat dan efisien. Kami akan memberikan tanggapan yang cepat dan menjaga komunikasi yang terbuka dan jelas dengan pelanggan, baik itu melalui telepon, email, atau platform komunikasi lainnya</p>
                </div>
            </div>
        </div>
        <!-- Keterangan Layanan -->
            <section id="clients" class="clients">
                <div class="container" data-aos="zoom-in">
                    <h3 class="client-title text-center mb-5">Our Client</h3>
                  <div class="clients-slider swiper">
                    <div class="swiper-wrapper align-items-center">
                      <div class="swiper-slide"><img src="{{asset('img/Client/PT Bella Prima Perkasa.png')}}" class="img-fluid" alt=""></div>
                      <div class="swiper-slide"><img src="{{asset('img/Client/PT Indofood CBP Sukses Makmur.jpg')}}" class="img-fluid" alt=""></div>
                      <div class="swiper-slide"><img src="{{asset('img/Client/PT Indopack Lucky Perkasa.png')}}" class="img-fluid" alt=""></div>
                      <div class="swiper-slide"><img src="{{asset('img/Client/PT Siantar Top.png')}}" class="img-fluid" alt=""></div>
                      <div class="swiper-slide"><img src="{{asset('img/Client/PT Supernova Flexible Packaging.jpg')}}" class="img-fluid" alt=""></div>
                      <div class="swiper-slide"><img src="{{asset('img/Client/PT Surya Multi Indopack.jpg')}}" class="img-fluid" alt=""></div>
                      <div class="swiper-slide"><img src="{{asset('img/Client/PT. DNP Indonesia.jpg')}}" class="img-fluid" alt=""></div>
                      <div class="swiper-slide"><img src="{{asset('img/Client/PT. Intikemas Putra Makmur.jpg')}}" class="img-fluid" alt=""></div>
                      <div class="swiper-slide"><img src="{{asset('img/Client/PT. Total Pack Indonesia.jpg')}}" class="img-fluid" alt=""></div>
                      <div class="swiper-slide"><img src="{{asset('img/Client/PT.Muliapack Gravurindo.jpg')}}" class="img-fluid" alt=""></div>
                      <div class="swiper-slide"><img src="{{asset('img/Client/PT. UNIPACK INDOSYSTEMS.jpg')}}" class="img-fluid" alt=""></div>
                    </div>
                    <div class="swiper-pagination"></div>
                  </div>
                </div>
            </section>
      <!-- End Clients Section -->
        <!-- Batas Container -->
    </div>
</section>
@endsection
