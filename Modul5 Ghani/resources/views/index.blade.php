@extends('main')

@section('container')
  @include('navbar')
  <div class="container d-flex align-content-center">
    <div class="row align-items-center" style="height: 89vh;">
      <div class="col-md-6">
        @guest    
          <h1 class="fw-bold">Selamat Datang di Showroom</h1>
        @endguest
        @auth
          <h1 class="fw-bold">Selamat Datang di Showroom {{ auth()->user()->name }}</h1>
        @endauth
        <p>At lacus vitae nulla sagittis scelerisque nisl. Pellentesque duis cursus vestibulum, facilisi ac, sed faucibus.</p>
        <a class="btn btn-primary" href="/showroom" style="position: relative; top: 50px">MyCar</a>
        <div class="d-flex align-items-center" style="position: relative; top: 130px">
          <img src="/images/logo-ead.png" alt="Logo EAD" width="100">
          <span class="ms-3">Ghani_1202204308</span>
        </div>
      </div>
      <div class="col-md-6">
        <img class="rounded-3" src="/images/home-mustang.jpg" alt="Showroom" width="100%" height=500px">
      </div>
    </div>
  </div>

  @if(session()->has('yellow-notification'))
    <div class="position-fixed" style="bottom: 10px; right: 10px;">
      @include('yellow-notification')
    </div>
  @endif
@endsection