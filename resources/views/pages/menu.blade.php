@extends('layouts.pages')

@section('content')
<div>
    @include('includes.navbar')

    <div
      class="container d-flex flex-wrap flex-md-wrap justify-content-between mt-4 store-header"
    >
      <div>
        <h2>Embun</h2>
        <p>Food & Baverages</p>
      </div>
      <div>
        <h2>Promo</h2>
        <p>Beli ropang FREE Thai Tea small</p>
      </div>
    </div>
    <div
      class="container mt-5 d-flex flex-wrap flex-md-wrap justify-content-around menus"
    >
      @foreach ($menus as $menu)
      <div class="card mb-3" style="max-width: 540px;">
        <div class="row no-gutters">
          <div class="col-md-4">
          <img src="{{url('menu_image/' . $menu->MenuGallery->foto_menu)}}" width="50px" class="card-img img-fluid" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">{{$menu->nama}}</h5>
            <p class="card-text">{{$menu->deskripsi}}</p>
            <p class="card-text">Rp{{number_format($menu->harga)}}</p>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  
  <div class="container">
      <p class="text-center text-muted mt-5 copyright">
          Copyriright. jusTip.com 2020 All rights reserved
      </p>
  </div>
</div>
@endsection