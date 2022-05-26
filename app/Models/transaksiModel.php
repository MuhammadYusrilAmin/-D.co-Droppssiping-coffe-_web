<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksiModel extends Model
{
    use HasFactory;
    protected $table = 'transaksi';
    protected $primaryKey = 'id_transaksi';
    protected $fillable = ['id_alamat', 'jenis_pembayaran', 'id_pengiriman', 'status', 'total_pembayaran'];

    protected function alamat()
    {
        return $this->belongsTo(alamatModel::class, 'id_alamat', 'id_alamat');
    }

    protected function pengiriman()
    {
        return $this->belongsTo(pengirimanModel::class, 'id_pengiriman', 'id_pengiriman');
    }
}
