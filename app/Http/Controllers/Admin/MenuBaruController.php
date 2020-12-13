<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Toko;
use App\Models\Menu;
use App\Models\MenuGallery;


use Illuminate\Http\Request;

class MenuBaruController extends Controller
{
    public function MenuBaru($id)
    {
        $tokos = Toko::where('id', $id)->get();
        return view('pages.admin.menus.create', [
            'tokos' => $tokos
        ]);
    }
}
