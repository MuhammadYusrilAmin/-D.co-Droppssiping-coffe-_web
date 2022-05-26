<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barangModel extends Model
{
    use HasFactory;
    protected $table = 'barang';
    protected $primaryKey = 'id_barang';
    protected $fillable = ['nama_barang', 'harga', 'deskripsi', 'tags', 'status', 'stok', 'foto'];

    protected function checkout()
    {
        return $this->hasOne(checkoutModel::class, 'id_barang', 'id_barang');
    }
}
