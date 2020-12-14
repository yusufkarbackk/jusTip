@extends('layouts.admin.admin')

@section('content')
<div class="container">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Menu</h1>
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
<form action="{{route('Menu.update', $menu->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method("PUT")
    <div class="form-group">
        <label for="kategori">Nama Toko</label>
    <select class="form-control" id="kategori" name="toko_id">
    <option value="{{$menu->toko->id}}">{{$menu->toko->nama}}</option>
        </select>
      </div>
        <div class="form-group mt-3">
          <label for="nama">Nama Menu</label>
          <input type="text" class="form-control @error ('nama') is invalid @enderror" name="nama" id="nama" placeholder="Nama Menu" value="{{$menu->nama}}"></input>
          @error('nama')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>
        <div class="form-group">
          <label for="lokasi">Deskripsi</label>
          <textarea class="form-control" type="ndeskripsi" id="deskripsi" rows="3" name="deskripsi" value="{{$menu->deskripsi}}"></textarea>
          @error('deskripsi')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="buka">Harga</label>
            <input type="number" class="form-control" id="harga" name="harga" value="{{$menu->harga}}"></input>
            @error('harga')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="kategori">Example select</label>
        <select class="form-control" id="kategori" name="kategori" value="{{$menu->kategori}}">
              <option>Makanan</option>
              <option>Minuman</option>
            </select>
          </div>
        <div class="form-group py-2">
            <label for="foto_menu">Foto</label>
            <input type="file" class="form-control pt-2 pb-2" id="foto_menu" name="foto_menu" value="{{$menu->MenuGallery->foto_makanan}}"></input>
            @error('foto_menu')
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