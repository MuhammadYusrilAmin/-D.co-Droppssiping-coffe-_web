<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\barangModel;
use App\Helper\ResponseFormatter;
use Illuminate\Http\Request;

class barangController extends Controller
{
    public function getAll(Request $request)
    {
        $id_barang = $request->input('id_barang');
        $nama_barang = $request->input('nama_barang');
        $limit = $request->input('limit');
        $tags = $request->input('tags');

        if ($id_barang) {
            $barang = barangModel::where('id_barang', $id_barang)->get();
            if ($barang) {
                return ResponseFormatter::success($barang, 'Data Berhasil Ditemukan');
            } else {
                return ResponseFormatter::error(null, 'Data gagal Ditemukan', 404);
            }
        }

        $barang = barangModel::latest();
        if ($nama_barang) {
            $barang->where('nama_barang', 'Like', '%' . $nama_barang . '%');
        }

        if ($tags) {
            $barang->where('tags', $tags);
        }

        return ResponseFormatter::success($barang->paginate($limit), 'Data Berhasil Ditemukan');
    }

    public function getID($id)
    {
    }

    public function createUser(Request $request)
    {
    }

    public function updateUser($id, Request $request)
    {
    }

    public function deleteUser($id)
    {
    }
}
