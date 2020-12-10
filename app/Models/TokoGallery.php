<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Toko;


class TokoGallery extends Model
{
    use HasFactory;
    use softDeletes;

    protected $fillable = ['foto_toko', 'toko_id'];

    public function toko()
    {
        return $this->belongsTo(Toko::class, 'toko_id', 'id');
    }
}
