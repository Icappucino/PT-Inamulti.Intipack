@extends('admin.index')
@section('content')
<!-- membuat Array -->
@php
    $no = 1;
    $judul = ['No','Nama','Usia','Alamat','Pendidikan Terakhir','No HP','Email','Keterangan','aksi'];
@endphp
<!-- membuat Array -->

<!-- Tabel -->
<div class="row mt-3">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body text-center">
          <h5 class="card-title">Recruitment</h5>
          <div class="table-responsive">
                <!-- Awal Tabel -->
                <table class="table">
                  <thead>
                    <tr>
                    <!-- Looping Judul Tabel -->
                        @foreach ($judul as $judulTabel)
                        <th scope="col">{{$judulTabel}}</th>
                        @endforeach
                    <!-- Looping Judul Tabel -->
                    </tr>
                  </thead>
                  <tbody>
                      <!-- Looping Tabel -->
                      @foreach ($recruitmentList as $rl)
                      <tr>
                        <th scope="row">{{$no++}}</th>
                        <td>{{$rl->nama_recruitment}}</td>
                        <td>{{$rl->usia}}</td>
                        <td>{{$rl->alamat}}</td>
                        <td>{{$rl->pendidikan_terakhir}}</td>
                        <td>
                            <a href="https://wa.me/{{$rl->no_telp}}"> <i class="bi bi-whatsapp"></i></a>
                        </td>
                        <td>
                            <a href="mailto:{{$rl->email}}"><i class="bi bi-envelope"></i></a>
                        </td>
                        <td>
                          <a href="{{route('recruitment.show',$rl->id_recruitment)}}" class="btn btn-info">
                              <i class="bi bi-person-fill"></i> Lihat Details
                          </a>
                        </td>
                      <td>
                      <form action="{{ route('recruitment.destroy', $rl->id_recruitment) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="button-career"><i class="bi bi-trash3-fill"></i> Hapus</button>
                        </form>
                        </td>
                      </tr>
                      @endforeach
                    <!-- Looping Tabel -->
                   </tbody>
                </table>
                <!-- Akhir Tabel -->
             </div>
         </div>
      </div>
  </div>
</div>
<!-- Batas -->
@endsection
