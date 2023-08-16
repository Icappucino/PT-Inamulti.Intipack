@extends('admin.index')
@section('Account')
<section id="account">
    <div class="container py-5">
        <!-- Batas -->
      <div class="row">
        <div class="col-lg-12">
          <div class="card mb-4">
            <div class="card-body text-center">
              <img src="{{asset('img/nophoto.jpeg')}}" alt="avatar"
                class="rounded-circle img-fluid" style="width: 150px;">
              <h5 class="my-3">
                @if(empty(Auth::user()->name))
                {{ '' }}
            @else
                {{ Auth::user()->name }}
            @endif
            <i class="bi bi-patch-check-fill"></i>
              </h5>
            </div>
          </div>
        </div>
        <!-- Batas -->
        <div class="col-lg-12">
          <div class="card mb-4">
            <div class="card-body">
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Nama Lengkap</p>
                </div>
                <div class="col-sm-9">
                  <p class="mb-0">
                    @if(empty(Auth::user()->name))
                    {{ '' }}
                @else
                    {{ Auth::user()->name }}
                @endif
                   <i class="bi bi-patch-check-fill"></i></p>
                </p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Username</p>
                </div>
                <div class="col-sm-9">
                  <p class="mb-0">
                    @if(empty(Auth::user()->name))
                    {{ '' }}
                @else
                    {{ Auth::user()->name }}
                @endif
                  </p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Email</p>
                </div>
                <div class="col-sm-9">
                  <p class="mb-0">
                    @if(empty(Auth::user()->email))
                    {{ '' }}
                @else
                    {{ Auth::user()->email }}
                @endif
                  </p>
                </div>
              </div>
              <hr>
            </div>
          </div>
          <!-- Batas -->
        </div>
      </div>
    </div>
  </section>
@endsection
