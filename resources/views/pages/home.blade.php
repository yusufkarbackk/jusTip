@extends('layouts.pages')

@section('content')
<div>
    <nav class="navbar navbar-expand-lg navbar-light">
      <a class="navbar-brand" href="£">
        <img src="images/new-logo@2x.png" class="nav-image" alt="" />
      </a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarNav"
        aria-controls="navbarNav"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div
        class="collapse navbar-collapse justify-content-end"
        id="navbarNav"
      >
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" href="home.html"
              >Home <span class="sr-only">(current)</span></a
            >
          </li>
          <li class="nav-item">
            <a class="nav-link" href="caraOrder.html">Cara Order</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Tentang Kami</a>
          </li>
        </ul>
      </div>
    </nav>
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
    <a href="embun.html">
      <div class="card mb-3 rounded shadow" style="max-width: 500px">
          <div class="row no-gutters">
            <div class="col-md-4">
              <img src="images/embun.jpg" class="card-img" alt="..." />
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">Embun</h5>
                <p class="card-text">Opens: 10.00 - 22.00</p>
              </div>
            </div>
          </div>
        </div>
    </a>
    <div class="card mb-3 rounded shadow" style="max-width: 500px">
      <div class="row no-gutters">
        <div class="col-md-4">
          <img src="images/cikaracak.jpg" class="card-img" alt="..." />
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">Cikaracak</h5>
            <p class="card-text">Opens: 07.00 - 14.00</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
      <p class="text-center text-muted mt-5 copyright">
          Copyriright. jusTip.com 2020 All rights reserved
      </p>
  </div>
@endsection