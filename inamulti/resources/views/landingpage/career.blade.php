@extends('index')
@section('Career')
<section id="career">
    <div class="container">
        <div class="row mt-5">
            <h2 class="career-title text-center">Career Inamulti</h2>
            <!-- Start Content -->
            <div class="card-career">
                <div class="row">
                    <div class="col-md-4 order-md-1 order-2">
                        <img src="{{ asset('img/Home-3.jpg') }}" alt="img-layanan-2" class="img-fluid career-img">
                    </div>
                    <div class="col-md-8 order-md-2 order-1">
                        <div class="card-text">
                            <h3 class="career-judul mb-3">Judul : <span class="career-job"></span></h3>
                            <h5 class="career-pos">Posisi : <span class="career-job"></span></h5>
                            <p class="career-desk mb-0">
                                <span class="career-sub-desk">Deskripsi Pekerjaan</span><br>
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Exercitationem odit ratione quos nisi.
                            </p>
                        </div>
                    </div>
                    <!-- batas row -->
                </div>
                <a href="#">
                    <button type="submit" class="button-career order-3">Lamar Sekarang</button>
                </a>
            </div>
            <!-- Batas Content -->
            <!-- Batas Row -->
        </div>
    </div>
</section>
@endsection

