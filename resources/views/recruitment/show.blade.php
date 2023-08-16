@extends('admin.index')
@section('ShowRecruitment')
<div class="row">
    <div class="col-lg-12 ">
        <div class="card mb-4">
            @foreach ($recruitmentList as $rl)
            <div class="card-body">
                <div class="row">
                  <div class="col-sm-3">
                    <p class="mb-0">Nama Lengkap</p>
                  </div>
                  <div class="col-sm-9">
                    <p class="mb-0">{{$rl->nama_recruitment}} <i class="bi bi-patch-check-fill"></i></p>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-sm-3">
                    <p class="mb-0">Usia</p>
                  </div>
                  <div class="col-sm-9">
                    <p class="mb-0">{{$rl->usia}}</p>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-sm-3">
                    <p class="mb-0">Alamat</p>
                  </div>
                  <div class="col-sm-9">
                    <p class="mb-0">{{$rl->alamat}}</p>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-sm-3">
                    <p class="mb-0">Pendidikan Terakhir</p>
                  </div>
                  <div class="col-sm-9">
                    <p class="mb-0">{{$rl->pendidikan_terakhir}}</p>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-sm-3">
                    <p class="mb-0">Nomor HP Aktif</p>
                  </div>
                  <div class="col-sm-9">
                    <p class="mb-0">
                        <a href="https://wa.me/{{$rl->no_telp}}"><i class="bi bi-whatsapp"></i></a>
                    </p>
                  </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Email Aktif</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="mb-0">
                        <a href="mailto:{{$rl->email}}"><i class="bi bi-envelope"></i></a>
                    </p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Foto Diri</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="mb-0">
                        @php
                            if(!empty($rl->foto_diri)){
                        @endphp
                                <img src="{{asset('img')}}/{{$rl->foto_diri}}" width="10%">
                        @php
                       }else {
                        @endphp
                                <img src="{{asset('img')}}/nophoto.jpeg" width="10%">
                        @php
                        }
                        @endphp
                    </p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Foto KTP</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="mb-0">
                        @php
                        if(!empty($rl->foto_ktp)){
                    @endphp
                            <img src="{{asset('img')}}/{{$rl->foto_ktp}}" width="10%">
                    @php
                   }else {
                    @endphp
                            <img src="{{asset('img')}}/nophoto.jpeg" width="10%">
                    @php
                    }
                    @endphp
                    </p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Ijazah</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="mb-0">
                        @if(!empty($rl->ijazah))
                        <iframe src="{{ asset('pdf') }}/{{ $rl->ijazah }}" width="100%" height="600px"></iframe>
                    @else
                        Tidak ada file ijazah yang diunggah.
                    @endif
                    </p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">CV</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="mb-0">
                        @if(!empty($rl->cv))
                        <iframe src="{{ asset('pdf') }}/{{ $rl->cv }}" width="100%" height="600px"></iframe>
                    @else
                        Tidak ada file CV yang diunggah.
                    @endif
                    </p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">SKKB</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="mb-0">
                        @if(!empty($rl->skkb))
                        <iframe src="{{ asset('pdf') }}/{{ $rl->skkb }}" width="100%" height="600px"></iframe>
                    @else
                        Tidak ada file SKKB yang diunggah.
                    @endif
                    </p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">NPWP</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="mb-0">
                        @if(!empty($rl->npwp))
                        <iframe src="{{ asset('pdf') }}/{{ $rl->npwp }}" width="100%" height="600px"></iframe>
                    @else
                        Tidak ada file NPWP yang diunggah.
                    @endif
                    </p>
                    </div>
                </div>
                <!-- -->
            @endforeach
        </div>
        <a href="{{url('/Recruitment')}}">
            <button type="button" class="btn btn-danger float-right mt-3"><i class="bi bi-file-earmark-pdf-fill"></i> Kembali</button>
        </a>
    </div>
</div>
@endsection

