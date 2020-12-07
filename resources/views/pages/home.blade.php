@extends('layouts.pages')

@section('content')
<div>
    @include('includes.navbar')
  </div>
  <div
    class="container hero-section d-lg-flex d-md-flex d-sm-block align-items-center mt-1"
  >
    <div class="col-md-7 col-sm-12 col-lg-7">
      <img
        src="images/home-image@2x.png"
        class="hero-image img-fluid"
        alt=""
      />
    </div>
    <div class="col-md-5 col-sm-12 col-lg-5 hero-text">
      <h1>Ga mau ribet? Titipin aja</h1>
      <div class="bait d-inline-block py-3 px-3 mt-3">
          <h3>
              Cuma 3K!
          </h3>
      </div>
    </div>
  </div>
  <div
    class="container d-md-flex d-lg-flex d-sm-flex justify-content-between align-content-center stores-section"
  >
        @foreach ($tokos as $toko)
      <a href="{{route('menu', $toko->nama )}}">
        <div class="card mb-3 rounded shadow" style="max-width: 500px">
            <div class="row no-gutters">
              <div class="col-md-4">
                <img src="images/embun.jpg" class="card-img" alt="..." />
              </div>
              <div class="col-md-8">
                <div class="card-body">
                <h5 class="card-title">{{$toko->nama}}</h5>
                <p class="card-text">Opens: {{$toko->open}} - {{$toko->close}}</p>
                <p class="card-text">Lokasi: {{$toko->lokasi}}</p>
                </div>
              </div>
            </div>
          </div>
      </a>
        @endforeach      
  </div>
  <div class="container">
      <p class="text-center text-muted mt-5 copyright">
          Copyriright. jusTip.com 2020 All rights reserved
      </p>
  </div>
@endsection