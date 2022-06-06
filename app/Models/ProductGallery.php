<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class ProductGallery extends Model
{
    use HasFactory;
    protected $table = 'product_galleries';
    protected $fillable = [
        'products_id', 'url', 'is_featured'
    ];

    public function getUrlAttribute($url)
    {
        return url('assets/img/barang/' . $url);
    }
}
