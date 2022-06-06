<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransaksiItem extends Model
{
    use HasFactory;
    protected $table = 'transaksi_item';
    protected $fillable = [
        'users_id', 'products_id', 'transaksi_id', 'jumlah'
    ];

    public function product()
    {
        return $this->hasOne(productModel::class, 'id', 'products_id');
    }
}
