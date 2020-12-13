<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class MenuGallery extends Model
{
    use HasFactory;
    use softDeletes;

    protected $fillable = ['foto_menu', 'menu_id'];
    protected $table = 'MenuGallery';

    public function MenuGallery()
    {
        return $this->belongsTo(Menu::class, 'menu_id', 'id');
    }


}
