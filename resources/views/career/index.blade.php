@extends('index')
@section('Career')
<section id="career">
    <div class="container">
        <div class="row mt-5">
            <h2 class="career-title text-center">Career Inamulti</h2>
            <!-- Start Content -->
            @foreach ($careerList as $cl)
            <div class="card-career mt-3">
                <div class="row">
                    <div class="col-md-4 order-md-1 order-2">
                    @php
                            if(!empty($cl->foto)){
                        @endphp
                                <img src="{{asset('img')}}/{{$cl->foto}}"  class="img-fluid career-img">
                        @php
                            }else {
                        @endphp
                                <img src="{{asset('img')}}/Career-Img.jpg" class="img-fluid career-img">
                        @php
                            }
                    @endphp
                    </div>
                    <div class="col-md-8 order-md-2 order-1">
                        <div class="card-text">
                            <h3 class="career-judul mb-3">Judul : <span class="career-job">{{$cl->nama_career}}</span></h3>
                            <h5 class="career-pos">Posisi : <span class="career-job">{{$cl->posisi_career}}</span></h5>
                            <p class="career-desk mb-0">
                                <span class="career-sub-desk">Deskripsi Pekerjaan</span><br>
                                {{$cl->deskripsi_career}}
                            </p>
                        </div>
                    </div>
                    <!-- batas row -->
                </div>
               @if(auth()->check())
    <form action="{{ route('career.destroy', $cl->id_career) }}" method="POST">
         @csrf
         @method('DELETE')
         <button type="submit" class="button-career"><i class="bi bi-trash3-fill"></i> Hapus</button>
    </form>
@elseif(auth()->guest())
    <a href="{{route('recruitment.create')}}">
        <button type="submit" class="button-career order-3 float-right">Lamar Sekarang</button>
    </a>
@endif
            </div>
            @endforeach
            <!-- Batas Content -->
            <!-- Batas Row -->
        </div>
    </div>
</section>
@endsection