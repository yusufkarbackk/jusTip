@extends('layouts.admin.admin')

@section('content')

<div class="container">
    @include('includes.admin.topbar')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Menu</h1>
    
    </div>

    <table class="table table-hover">
        <thead>
          <tr>
            <th class="text-center" scope="col">No</th>
            <th class="text-center" scope="col">Gambar</th>
            <th class="text-center" scope="col">Nama</th>
            <th class="text-center" scope="col">Harga</th>
            <th class="text-center" scope="col">Kategori</th>
            <th class="text-center" scope="col">Deskripsi</th>
            <th class="text-center" scope="col">Aksi</th>
    
          </tr>
        </thead>
        <tbody>
            <?php $i = 1 ?>
            @forelse ($menus as $menu)
            <tr>
                <th class="text-center" scope="row"><?php echo($i) ?></th>
                <td class="text-center">
                <img width="100px" src="{{url('menu_image/' . $menu->MenuGallery->foto_menu)}}" alt="gambar toko"> 
                </td>
                <td class="text-center">{{$menu->nama}}</td>
                <td class="text-center">Rp{{number_format($menu->harga)}}</td>
                <td class="text-center">{{$menu->kategori}}</td>
                <td class="text-center">{{$menu->deskripsi}}</td>
                <td>
                    <div class="d-flex justify-content-center">
                        <div class="mr-3">
                        <a href="" class="text-white">
                            <form action="{{route('Menu.edit', $menu->id)}}" method="GET">
                                    @csrf
                                    <button class="btn btn-primary">
                                        Update
                                    </button>
                                </form>
                            </a>
                        </div>
                        <div>
                            <a href="" class="text-white">
                                <form action="{{route('Menu.destroy', $menu->id)}}" method="POST">
                                        @csrf
                                        @method("DELETE")
                                        <button class="btn btn-danger">
                                            Delete
                                        </button>
                                    </form>
                                </a>
                        </div>
                        <div class="ml-3">
                        <a href="{{route('MenuBaru', $menu->toko_id)}}" class="text-white"><i
                            <form action="" method="POST">
                                @csrf
                                @method("POST")
                                <button class="btn btn-info">
                                    Tambah Menu
                                </button>
                            </form>
                            </a>
                        </div>
                    </div>
                </td>
                </tr>
                <?php $i++ ?>
            @empty
            <a href="{{route('Menu.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Tambah Menu</a>
            @endforelse
        </tbody>
    </table>
</div>
@endsection