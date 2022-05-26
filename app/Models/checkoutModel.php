<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class checkoutModel extends Model
{
    use HasFactory;
    protected $table = 'checkout';
    protected $primaryKey = 'id_checkout';
    protected $fillable = ['id_barang', 'id_user', 'id_transaksi', 'jumlah', 'status'];

    protected function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }

    protected function barang()
    {
        return $this->belongsTo(barangModel::class, 'id_barang', 'id_barang');
    }
}
