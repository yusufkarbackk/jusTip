<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Toko;
use App\Models\Menu;
use App\Models\MenuGallery;
use Image;



class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tokos = Toko::all();
        return view('pages.admin.menus.create', [
            'tokos' => $tokos
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //create menu
        $menu = new Menu;
        $menu->toko_id = $request->toko_id;
        $menu->nama = $request->nama;
        $menu->harga = $request->harga;
        $menu->deskripsi = $request->deskripsi;
        $menu->kategori = $request->kategori;
        
        $menu->save();


        //create MenuGallery
        $menu_gallery= new MenuGallery;
        $menu_gallery->menu_id = $menu->id;
        $image = $request->foto_menu;
        $namafile = time() . '.' . $image->getClientOriginalExtension();
        Image::make($image)->resize(300, "auto", function ($constraint) {
            $constraint->aspectRatio();
        })->save('menu_image/' . $namafile);
        $menu_gallery->foto_menu = $namafile;

        $menu_gallery->save();

        return redirect('/admin/Toko');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $menu = Menu::find($id);
        return view('pages.admin.menus.edit', [
            'menu' => $menu,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $toko = Menu::where('id', $id)
            ->update([
                'nama' => $request->nama,
                'deskripsi' => $request->deskripsi,
                'harga' => $request->harga,
                'kategori' => $request->kategori,
                'promo' => $request->promo,
                'toko_id' => $request->toko_id
            ]);

        $menu_gallery = new MenuGallery;
        $menu_gallery->menu_id = $id;
        $image = $request->foto_menu;
        $namafile = time() . '.' . $image->getClientOriginalExtension();
        Image::make($image)->resize(300, "auto", function ($constraint) {
            $constraint->aspectRatio();
        })->save('menu_image/' . $namafile);
        $menu_gallery->foto_menu = $namafile;

        $menu_gallery->save();
        return redirect('/admin/Toko');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
