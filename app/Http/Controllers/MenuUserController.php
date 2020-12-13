<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menu;
Use App\Models\MenuGallery;
use Image;

class MenuUserController extends Controller
{
    public function menu($id)
    {
        $menus = Menu::with(['MenuGallery'])->where('toko_id', $id)->get();
        return view('pages.menu', [
            'menus' => $menus
        ]);
    }
}
