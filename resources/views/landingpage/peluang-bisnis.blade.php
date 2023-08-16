@extends('index')
@section('Peluang-Bisnis')
<section id="peluang-bisnis">
    <div class="container h-100">
        <div class="row w-100">
            <div class="col-md-12 text-center position-absolute start-0 top-50 hero-tagline">
                <h1 class="peluang-title">Peluang Bisnis</h1>
                <p class="peluang-sub-title">Kami membuka suatu peluang bisnis untuk pelanggan kami dengan fleksibel dari PT. Kalisa Sehat Sejahtera. Bergabung dan buatlah suatu jaringan bisnis yang menyenangkan  dengan berbagai macam paket plan yang profitable.</p>
                <a href="#layanan"><button class="button-peluang">Selengkapnya</button></a>
            </div>
        </div>
    </div>
</section>
<!-- Keterangan Peluang Bisnis-->
<section id="keterangan-peluang">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <p class="peluang-paragraf mb-5">PT. Kalisa Sehat Sejahtera bukan sekedar bisnis biasa pada umumnya. Dengan produk yang kami ciptakan anda dapat mencapai impian anda menjadi sukses dan meningkatkan kesadaran hidup sehat dan sejahtera. Buatlah suatu perubahan dala hidup anda mulai sekarang dan ajak orang-orang sekitar untuk membantu meningkatkan kehidupan mereka.</p>
            </div>
            <div class="col-12 text-center">
                <h3 class="Peluang-sub-paragraf mb-3">MEMBANGUN BISNIS ANDA SENDIRI</h3>
                <p class="peluang-paragraf mb-5">Bekerja dengan waktu yang fleksibel menjadi salah satu tujuan Kalisa Sehat Sejahtera. Bebaskan diri Anda dari rutinitas ‘9 hingga 5’ - rancang jadwal Anda dan tentukan jam kerja Anda sendiri. Bangun bisnis Anda yang dapat disesuiaikan dengan gaya hidup Anda Ketika fleksibilitas terbukti memiliki pengaruh positif yang sangat besar pada keseimbangan kehidupan kerja, peluang seperti ini bisa menjadi apa yang Anda butuhkan.</p>
            </div>
        </div>
        <!-- Keterangan Layanan -->
        <div class="row">
            <div class="col-md-6">
                <div class="card-about position-relative">
                    <div class="about-misi d-flex justify-content-center">
                        <img src="{{asset('img/peluang-bisnis/pel-1.png')}}" alt="img-misi-1" class="img-fluid img-misi">
                    </div>
                    <h3 class="sub-header text-center">Atur Jam Kerja Anda</h3>
                    <p class="about-p-misi text-center">Anda memiliki kebebasan untuk menjadi bos Anda sendiri dan bekerja di jam Anda yang telah Anda atur sendiri. Bekerja secara paruh waktu atau penuh waktu - itu adalah pilihan Anda.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card-about position-relative">
                    <div class="about-misi d-flex justify-content-center">
                        <img src="{{asset('img/peluang-bisnis/pel-4.png')}}" alt="img-misi-1" class="img-fluid img-misi">
                    </div>
                    <h3 class="sub-header text-center">KERAGAMAN PRODUK</h3>
                    <p class="about-p-misi text-center">Kalisa Sehat Sejahtera menawarkan berbagai Paket Produk untuk menjalankan bisnis Anda. Apakah Anda memiliki minat pada kecantikan, perawatan kulit atau lainnya yang disesuaikan dengan kebutuhan Anda. Itu pilihan Anda.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card-about position-relative">
                    <div class="about-misi d-flex justify-content-center">
                        <img src="{{asset('img/peluang-bisnis/pel-3.png')}}" alt="img-misi-1" class="img-fluid img-misi">
                    </div>
                    <h3 class="sub-header text-center">Pelatihan Bisnis</h3>
                    <p class="about-p-misi text-center">Dengan perangkat pendukung dan pelatihan ahli, Anda akan menemukan segalanya di sini untuk membangun bisnis Anda. dengan pelatihan ini anda akan dibimbing melaluli materi yang disediakan sampai bisnis anda pecah telur</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card-about position-relative">
                    <div class="about-misi d-flex justify-content-center">
                        <img src="{{asset('img/peluang-bisnis/pel-2.png')}}" alt="img-misi-1" class="img-fluid img-misi">
                    </div>
                    <h3 class="sub-header text-center">Support Website</h3>
                    <p class="about-p-misi text-center">Dengan adanya website support yang disediakan akan menjadikan bisnis anda menjadi lebih profesional dan meningkatkan traffic untuk penjualan anda</p>
                </div>
            </div>
        </div>
        <!-- Keterangan Layanan -->
        <!-- Batas Container -->
    </div>
</section>
@endsection
