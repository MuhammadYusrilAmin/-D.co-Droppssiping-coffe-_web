<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productModel extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = ['id', 'name', 'harga', 'deskripsi', 'tags', 'stok', 'categories_id'];

    public function galleries()
    {
        return $this->hasMany(ProductGallery::class, 'products_id', 'id');
    }

    public function category()
    {
        return $this->belongsTo(ProductCategory::class, 'categories_id', 'id');
    }

    // protected function checkout()
    // {
    //     return $this->hasOne(checkoutModel::class, 'id_barang', 'id_barang');
    // }
}
