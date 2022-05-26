<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengirimanModel extends Model
{
    use HasFactory;
    protected $table = 'pengiriman';
    protected $primaryKey = 'id_pengiriman';
    protected $fillable = ['jenis_pengiriman', 'deskripsi_pengiriman', 'harga'];

    protected function transaksi()
    {
        return $this->hasOne(transaksiModel::class, 'id_pengiriman', 'id_pengiriman');
    }
}
