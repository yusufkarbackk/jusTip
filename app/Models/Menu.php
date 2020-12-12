<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Http\Models\Toko;

class Menu extends Model
{
    use HasFactory;
    use softDeletes;

    protected $fillable = ['nama', 'harga', 'deskripsi', 'kategori'];

    public function MenuGallery()
    {
        return $this->hasOne(MenuGallery::class, 'menu_id', 'id');
    }

    public function toko()
    {
        return $this->belongsTo(Toko::class, 'toko_id', 'id');
    }

}
