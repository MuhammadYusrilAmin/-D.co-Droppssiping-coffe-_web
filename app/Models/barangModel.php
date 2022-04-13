<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barangModel extends Model
{
    use HasFactory;
    protected $table = 'barang';
    protected $primary_key = 'id_barang';
    protected $fillable = ['nama_barang', 'harga', 'deskripsi_barang', 'jenis_barang', 'status', 'stok', 'foto',];
}
