@extends('layouts.admin.admin')

@section('content')
<div class="container">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Toko</h1>
    </div>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
<form action="{{route('Toko.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
        <div class="form-group">
          <label for="nama">Nama Toko</label>
          <input type="text" class="form-control @error ('nama') is invalid @enderror" name="nama" id="nama" placeholder="Nama Toko" value="{{old('nama')}}"></input>
          @error('nama')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>
        <div class="form-group">
          <label for="lokasi">Alamat</label>
          <textarea class="form-control" type="text" id="lokasi" rows="3" name="lokasi" value="{{old('lokasi')}}"></textarea>
          @error('lokasi')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="buka">Jam Buka</label>
            <input type="time" class="form-control" id="buka" name="open" value="{{old('open')}}"></input>
            @error('open')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="tutup">Jam Tutup</label>
            <input type="time" class="form-control" id="tutup" name="close" value="{{old('close')}}"></input>
            @error('close')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="promo">Promo</label>
            <input type="text" class="form-control" id="promo" name="promo" value="{{old('promo')}}"></input>
            @error('promo')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group py-2">
            <label for="foto">Foto</label>
            <input type="file" class="form-control pt-2 pb-2" id="foto" name="foto_toko" value="{{old('foto_toko')}}"></input>
            @error('foto_toko')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary btn-lg btn-block">
            Buat
        </button>
      </form>
</div>
@endsection