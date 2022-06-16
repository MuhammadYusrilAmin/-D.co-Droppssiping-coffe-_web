<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\transaksiModel;
use App\Models\detailModel;
use App\Models\ProductGallery;
use App\Models\productModel;
use App\Models\TransaksiItem;
use PDF;

class detailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function show($id)
    {
        $transaksi = transaksiModel::where('id', $id)->get();
        $detail = TransaksiItem::where('transaksi_id', $id)->paginate(99);
        return view('transaksi.detail ', compact('detail', 'transaksi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }
    
    public function cetak_pdf($id)
    {
        $transaksi = transaksiModel::where('id', $id)->get();
        $date = date('d-m-Y');
        $detail = TransaksiItem::where('transaksi_id', $id)->paginate(99);
        $pdf = PDF::loadview('transaksi.detail_pdf', compact('detail', 'transaksi'));
        return $pdf->download('Detail_' . $date . '.pdf');
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $id_barang = $_GET['id_barang'];
        $id_detail = $_GET['id'];
        $detail = TransaksiItem::where('id', $id_detail);
        $detail->delete();
        return redirect()->route('detail.show', $id_barang)->with('success', 'Produk Berhasil Di Hapus');;
    }
}
