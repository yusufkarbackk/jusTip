@extends('layouts.admin.admin')

@section('content')
<div class="container mt-5">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Toko</h1>
    </div>
<form action="{{route('Toko.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method("POST")
        <div class="form-group">
          <label for="nama">Nama Toko</label>
          <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Toko">
        </div>
        <div class="form-group">
          <label for="alamat">Alamat</label>
          <textarea class="form-control" id="alamat" rows="3" name="alamat"></textarea>
        </div>
        <div class="form-group">
            <label for="buka">Jam Buka</label>
            <input type="time" class="form-control" id="buka" name="buka"></input>
        </div>
        <div class="form-group">
            <label for="tutup">Jam Tutup</label>
            <input type="time" class="form-control" id="tutup" name="tutup"></input>
        </div>
        <div class="form-group py-2">
            <label for="foto">Jam Tutup</label>
            <input type="file" class="form-control pt-2 pb-2" id="foto" name="foto_toko"></input>
        </div>
        <button type="button" class="btn btn-primary btn-lg btn-block">
            Buat
        </button>
      </form>
</div>
@endsection