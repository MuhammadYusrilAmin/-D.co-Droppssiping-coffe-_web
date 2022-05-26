<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Helper\ResponseFormatter;
use App\Models\transaksiModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class transaksiController extends Controller
{
    public function all(Request $request)
    {
        $id = $request->input('id');
        $limit = $request->input('limit', 6);
        $status = $request->input('status');

        if ($id) {
            $transaksi = transaksiModel::with(['items.product'])->find($id);

            if ($transaksi)
                return ResponseFormatter::success(
                    $transaksi,
                    'Data transaksi berhasil diambil'
                );
            else
                return ResponseFormatter::error(
                    null,
                    'Data transaksi tidak ada',
                    404
                );
        }

        $transaksi = transaksiModel::with(['items.product'])->where('users_id', Auth::user()->id);

        if ($status)
            $transaksi->where('status', $status);

        return ResponseFormatter::success(
            $transaksi->paginate($limit),
            'Data list transaksi berhasil diambil'
        );
    }
}
