<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detailModel extends Model
{
    use HasFactory;
    protected $table = 'detail_transaksi';
    protected $primaryKey = 'id_tetail';
    protected $fillable = ['id_transasksi', 'foto_barang', 'nama_barang', 'harga', 'jumlah', 'total_harga'];
}
