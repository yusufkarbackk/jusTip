<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\TokoGallery;
use App\Models\Menu;
use App\Models\MenuGallery;



class Toko extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['nama', 'lokasi', 'open', 'close', 'promo'];

    public function TokoGallery()
    {
        return $this->hasOne(TokoGallery::class, 'toko_id', 'id');
    }

    public function menu()
    {
        return $this->hasMany(Menu::class, 'toko_id', 'id');
    }

}
