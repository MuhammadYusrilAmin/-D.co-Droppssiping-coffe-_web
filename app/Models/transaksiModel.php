<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksiModel extends Model
{
    use HasFactory;
    protected $table = 'transaksi';
    protected $primaryKey = 'id_transaksi';
    protected $fillable = ['tanggal', 'total_pembayaran', 'jenis_pembayaran', 'status', 'biaya_pengiriman', 'jenis_pengiriman'];
}
