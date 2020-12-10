<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Toko;
use App\Models\TokoGallery;
use App\Http\Requests\TokoRequest;
use Image;
use Carbon\Carbon;


class TokoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tokos = Toko::all();

        return view('pages.admin.tokos.index', [
            'tokos' => $tokos,
        
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.tokos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TokoRequest $request)
    {
        //create toko
        $toko = new Toko;
        $toko->nama = $request->nama;
        $toko->lokasi = $request->lokasi;
        $toko->open= $request->open;
        $toko->close = $request->close;
        $toko->promo = $request->promo;
        
        $toko->save();


        //create TokoGallery
        $toko_gallery = new TokoGallery;
        $toko_gallery->toko_id = $toko->id;
        $image = $request->foto_toko;
        $namafile = time() . '.' . $image->getClientOriginalExtension();
        Image::make($image)->resize(300, "auto", function ($constraint) {
            $constraint->aspectRatio();
        })->save('store_image/' . $namafile);
        $toko_gallery->foto_toko = $namafile;

        $toko_gallery->save();

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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $toko = Toko::with('TokoGallery')->find($id);
        return view('pages.admin.tokos.edit', [
            'toko' => $toko
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
        $toko = Toko::where('id', $id)
            ->update([
                'nama' => $request->nama,
                'lokasi' => $request->lokasi,
                'open' => $request->open,
                'close' => $request->close,
                'promo' => $request->promo,
            ]);

        $toko_gallery = new TokoGallery;
        $toko_gallery->toko_id = $id;
        $image = $request->foto_toko;
        $namafile = time() . '.' . $image->getClientOriginalExtension();
        Image::make($image)->resize(300, "auto", function ($constraint) {
            $constraint->aspectRatio();
        })->save('store_image/' . $namafile);
        $toko_gallery->foto_toko = $namafile;

        $toko_gallery->save();
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
        $toko = Toko::find($id);
        $toko->delete();

        return redirect('/admin/Toko');

    }
}
