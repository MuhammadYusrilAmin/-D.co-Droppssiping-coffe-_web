<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\transaksiModel;
use PDF;

class transaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transaksi = transaksiModel::where('status', 1)->paginate(5);
        return view('transaksi.dipacking ', compact('transaksi'));
    }
    
    public function search()
    {
        $id = $_POST['transaksi_id'];
        $status = $_GET['id'];

        if ($id == null) {
            return redirect('transaksi/' . $status);
        } else {
            $transaksi = transaksiModel::where('id', $id)->get();
            foreach ($transaksi as $transaksi1) {
                $id_transaksi = $transaksi1->id;
                $status_transaksi = $transaksi1->status;
                if ($status_transaksi == 1) {
                    $transaksi = transaksiModel::where('id', $id_transaksi)->paginate(25);
                    return $status_transaksi;
                } else if ($status_transaksi == 2) {
                    $transaksi = transaksiModel::where('id', $id_transaksi)->paginate(25);
                    return view('transaksi.dikirim ', compact('transaksi'));
                } else if ($status_transaksi == 3) {
                    $transaksi = transaksiModel::where('id', $id_transaksi)->paginate(25);
                    return view('transaksi.diterima ', compact('transaksi'));
                }
            }
            return redirect('transaksi/' . $status);
        }
    }
    
    public function cetak_pdf()
    {
        $transaksi =  transaksiModel::latest()->get();
        $date = date('d-m-Y');
        $pdf = PDF::loadview('transaksi.laporan_pdf', compact('transaksi'));
        return $pdf->download('laporan-User_'.$date.'.pdf');
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
        if ($id == 1) {
            $transaksi = transaksiModel::where('status', $id)->paginate(5);
            return view('transaksi.dipacking ', compact('transaksi'));
        } else if ($id == 2) {
            $transaksi = transaksiModel::where('status', $id)->paginate(5);
            return view('transaksi.dikirim ', compact('transaksi'));
        } else {
            $transaksi = transaksiModel::where('status', $id)->paginate(5);
            return view('transaksi.diterima ', compact('transaksi'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $transaksi = transaksiModel::find($id);
        if ($transaksi->status == 1) {
            $transaksi->status = 2;
            $transaksi->update();
            return redirect('transaksi/2')->with('success', 'Data barang telah Dikirim');
        } else if ($transaksi->status == 2) {
            $transaksi->status = 3;
            $transaksi->update();
            return redirect('transaksi/3')->with('success', 'Data barang telah DiTerima');
        }
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $transaksi = transaksiModel::find($id);
        $transaksi->delete();
        return redirect()->route('transaksi.index')->with('success', 'Data transaksi Berhasil Di Hapus');
    }
}
