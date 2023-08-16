@extends('index')
@section('Product')
<section id="produk">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h3 class="title-produk">Produk Kami</h3>
                <p class="sub-title-produk">Dengan hasil riset yang dikembangkan sampai saat ini terciptalah produk dengan standar kualitas tinggi dan diuji dengan basis ilmu pengetahuan.</p>
            </div>
        </div>
        <!-- Card Product Section -->
        <div class="row">
            <div class="col-md-4">
                <div class="card card-product p-3 d-flex flex-column align-items-center justify-content-center" style="width: 22rem;">
                    <img src="{{asset('img/img-produk/img-produk-1.png')}}" alt="image-produk" class="mb-4">
                    <div class="card-product-body">
                        <a href="{{url('')}}" target="_blank"><button class="button-product">Selengkapnya ..</button></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-product p-3 d-flex flex-column align-items-center justify-content-center" style="width: 22rem;">
                    <img src="{{asset('img/img-produk/img-produk-2.png')}}" alt="image-produk" class="mb-4">
                    <div class="card-product-body">
                        <a href="{{url('')}}" target="_blank"><button class="button-product">Selengkapnya ..</button></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-product p-3 d-flex flex-column align-items-center justify-content-center" style="width: 22rem;">
                    <img src="{{asset('img/img-produk/img-produk-3.png')}}" alt="image-produk" class="mb-4">
                    <div class="card-product-body">
                        <a href="{{url('')}}" target="_blank"><button class="button-product">Selengkapnya ..</button></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-product p-3 d-flex flex-column align-items-center justify-content-center" style="width: 22rem;">
                    <img src="{{asset('img/img-produk/img-produk-4.png')}}" alt="image-produk" class="mb-4">
                    <div class="card-product-body">
                        <a href="{{url('')}}" target="_blank"><button class="button-product">Coming soon ..</button></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-product p-3 d-flex flex-column align-items-center justify-content-center" style="width: 22rem;">
                    <img src="{{asset('img/img-produk/img-produk-5.png')}}" alt="image-produk" class="mb-4">
                    <div class="card-product-body">
                        <a href="{{url('')}}" target="_blank"><button class="button-product">Coming soon ..</button></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-product p-3 d-flex flex-column align-items-center justify-content-center" style="width: 22rem;">
                    <img src="{{asset('img/img-produk/img-produk-6.png')}}" alt="image-produk" class="mb-4">
                    <div class="card-product-body">
                        <a href="{{url('')}}" target="_blank"><button class="button-product">Coming soon ..</button></a>
                    </div>
                </div>
            </div>
        <!-- Card Product Section -->
        </div>
    </div>
</section>
@endsection
