<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Helper\ResponseFormatter;
use App\Models\TransaksiItem;
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

    public function checkout(Request $request)
    {
        $request->validate([
            'items' => 'required|array',
            'items.*.id' => 'exists:products,id',
            'tanggal' => 'required',
            'total_harga' => 'required',
            'biaya_pengiriman' => 'required',
            'status' => 'required|in:1,2,3',
        ]);

        $transaction = transaksiModel::create([
            'users_id' => Auth::user()->id,
            'tanggal' => $request->tanggal,
            'alamat' => $request->alamat,
            'total_harga' => $request->total_harga,
            'biaya_pengiriman' => $request->biaya_pengiriman,
            'status' => $request->status
        ]);

        foreach ($request->items as $product) {
            TransaksiItem::create([
                'users_id' => Auth::user()->id,
                'products_id' => $product['id'],
                'transaksi_id' => $transaction->id,
                'jumlah' => $product['jumlah']
            ]);
        }

        return ResponseFormatter::success($transaction->load('items.product'), 'Transaksi berhasil');
    }
}
