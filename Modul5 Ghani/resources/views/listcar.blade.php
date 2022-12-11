@extends('main')

@section('container')
  @include('navbar')
  <div class="container mt-4">
    <h2 class="fw-bold">My Show Room</h2>
    <p>List Show Room Ghani_1202204308</p>
    <div class="row mt-5">
      @foreach ($showroom as $item)  
        <div class="col-lg-4 mb-5">
          <div class="card rounded-3 shadow h-100">
            <img src="{{ asset('storage/images') }}/{{ $item->image }}" class="card-img-top p-2 rounded-4 h-100" alt="">
            <div class="card-body">
              <h5 class="card-title fw-bold">{{ $item->name }}</h5>
              <p class="card-text" style="text-align: justify;">{{ Str::limit($item->description, 105) }}</p>
              <div class="d-flex">
                <a href="/showroom/{{ $item->id }}" class="btn btn-primary rounded-5 px-5 me-3 button">Detail</a>
                <form action="/showroom/{{ $item->id }}" method="post">
                  @csrf
                  @method('delete')
                  <button type="submit" class="btn btn-danger rounded-5 px-5 me-3">Delete</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>
    <div class="pb-4">
      <p class="fw-bold">Jumlah Mobil: {{ $jumlahMobil }}</p>
    </div>
  </div>

  @if(session()->has('blue-notification'))
    <div class="position-fixed" style="bottom: 10px; right: 10px">
      @include('blue-notification')
    </div>
  @elseif(session()->has('yellow-notification'))
    <div class="position-fixed" style="bottom: 10px; right: 10px">
      @include('yellow-notification')
    </div>
  @elseif(session()->has('red-notification'))
    <div class="position-fixed" style="bottom: 10px; right: 10px">
      @include('red-notification')
    </div>
  @endif
@endsection