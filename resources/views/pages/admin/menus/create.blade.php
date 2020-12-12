@extends('layouts.admin.admin')

@section('content')
<div class="container">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Menu</h1>
    </div>
<form action="{{route('Toko.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
        <div class="form-group">
          <label for="nama">Nama Menu</label>
          <input type="text" class="form-control @error ('nama') is invalid @enderror" name="nama" id="nama" placeholder="Nama Menu" value="{{old('nama')}}"></input>
          @error('nama')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>
        <div class="form-group">
          <label for="lokasi">Deskripsi</label>
          <textarea class="form-control" type="ndeskripsi" id="deskripsi" rows="3" name="deskripsi" value="{{old('deskripsi')}}"></textarea>
          @error('deskripsi')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="buka">Harga</label>
            <input type="number" class="form-control" id="harga" name="harga" value="{{old('harga')}}"></input>
            @error('harga')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="kategori">Example select</label>
        <select class="form-control" id="kategori" name="kategori" value="{{old('kategori')}}">
              <option>Makanan</option>
              <option>Minuman</option>
            </select>
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