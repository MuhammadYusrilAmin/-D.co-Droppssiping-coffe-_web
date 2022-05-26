<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class alamatModel extends Model
{
    use HasFactory;
    protected $table = 'alamat';
    protected $primaryKey = 'id_pengiriman';
    protected $fillable = ['user_id', 'nama_tujuan', 'no_telp', 'provinsi', 'kabupaten', 'kecamatan', 'desa', 'detail_alamat', 'kode_pos'];

    protected function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
