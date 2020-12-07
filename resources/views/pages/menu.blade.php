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
      <div>
      <img src="{{url('images/embun1.jpg')}}" alt="" class="" />
      </div>
      <div>
        <img src="images/embun2.jpg" alt="" class="" />
      </div>
      <div>
        <img src="images/embun3.jpg" alt="" class="" />
      </div>
      <div>
        <img src="images/embun4.jpg" alt="" class="" />
      </div>
    </div>
  
  <div class="container">
      <p class="text-center text-muted mt-5 copyright">
          Copyriright. jusTip.com 2020 All rights reserved
      </p>
  </div>
</div>
@endsection