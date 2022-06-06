<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksiModel extends Model
{
    use HasFactory;
    protected $table = 'transaksi';
    protected $fillable = [
        'users_id', 'tanggal', 'alamat', 'total_harga', 'biaya_pengiriman', 'status', 'payment'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }

    public function items()
    {
        return $this->hasMany(TransaksiItem::class, 'transaksi_id', 'id');
    }
}
