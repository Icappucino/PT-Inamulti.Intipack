@extends('index')
@section('Astroll')
<section id="astroll-details">
    <!-- Title -->
    <div class="container">
        <div class="row mt-5">
            <div class="col-12 text-center">
                <h3 class="details-title">Details Product</h3>
            </div>
        </div>
        <!-- Gambar -->
        <div class="row mt-3">
            <div class="col-md-6 pt-3">
                <div class="card-produk-details position-relative">
                    <div class="produk-details d-flex justify-content-center">
                        <img src="{{asset('img/img-produk/Polyester Film [ASTROLL].jpg')}}" alt="img-misi-1" class="img-fluid img-produk-details">
                    </div>
                </div>
            </div>
            <div class="col-md-6 pt-3">
                <div class="card-produk-details position-relative">
                    <div class="produk-details d-flex justify-content-center">
                        <img src="{{asset('img/Polyester-Film-(ASTROLL).png')}}" alt="img-misi-1" class="img-fluid img-produk-details">
                    </div>
                </div>
            </div>
        </div>
        <!-- Batas Gambar -->
        <!-- Keterangan Produk -->
        <div class="row mt-5">
            <div class="col-12">
                <h3 class="details-title text-center">Polyester Film | ASTROLL</h3>
                <p class="details-product-paragraf">
                    ASTROLL adalah nama merek film poliester KOLON INDUSTRIES, INC. yang baru dan lebih baik.
                        ASTROLL menampilkan sifat fisik, kimia, dan listrik yang sangat baik dengan beragam aplikasi. <br>
                        Ini digunakan untuk:
                        <li>Pengemasan </li>
                        <li>Metalisasi </li>
                        <li>Isolasi </li>
                        <li>Material Industri </li>
                        <li>Rekaman Magnetik </li> <br>
                        KOLON telah mendapatkan pengakuan dari berbagai asosiasi standardisasi internasional, seperti FDA, BGA, dan UL, serta telah memperoleh ISO 9002 pada tahun 1995 dari BSI. <br> <br>
                        <span class="details-produk-sub-header">Aplikasi Pengemasan</span> <br>
                        ASTROLL telah terbukti menjadi standar dalam produk pengemasan berkat kekuatannya yang tinggi, tahan panas – dan – dingin, efek sanitasi, dan permeabilitas gas – dan – kelembapan yang rendah. Oleh karena itu dapat digunakan dengan aman untuk membungkus bahan khusus seperti makanan, obat obatan dan bahan kimia pertanian. <br><br>
                        <span class="details-produk-sub-header">Aplikasi Metallisasi</span><br>
                        Manfaat dari film logam dan plastik telah digabungkan dengan baik ke dalam film metalisasi sehingga dapat menyediakan penggunanya dengan aplikasi serbaguna. Sifat luar biasa ASTROLL dalam stabilitas panas, transparansi, dan daya tahan menawarkan keberhasilan dalam metalisasi vakum, dan menampilkan potensi lebih lanjut dalam mengembangkan artikel baru.
                </p>
            </div>
        </div>
        <!-- Keterangan Produk -->
    </div>
</section>
@endsection
