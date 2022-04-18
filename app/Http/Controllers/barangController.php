<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\barangModel;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class barangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barang = barangModel::latest()->paginate(5);
        return view('barang.index', compact('barang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('barang.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messages = [
            'required' => ':attribute tidak boleh kosong',
            'max' => ':attribute maximal :max karakter',
            'min' => ':attribute minimal :min karakter'
        ];

        $request->validate([
            'nama_barang' => 'required',
            'stok' => 'required',
            'harga' => 'required',
            'foto' => 'required|image|mimes:png,jpg,jpeg|max:2048',
            'jenis_barang' => 'required',
            'deskripsi_barang' => 'required'
        ],  $messages);

        //upload image
        if ($request->hasFile('foto')) {
            $image = $request->file('foto');
            $new_image = rand() . '.' . $image->getClientOriginalExtension();

            $image->move(public_path('assets/img/barang'), $new_image);
        }

        $barang = barangModel::create([
            'nama_barang'       => $request->nama_barang,
            'harga'             => $request->harga,
            'deskripsi_barang'  => $request->deskripsi_barang,
            'jenis_barang'      => $request->jenis_barang,
            'stok'              => $request->stok,
            'foto'              => $new_image
        ]);
        if ($barang) {
            //redirect dengan pesan sukses
            return redirect()->route('barang.index')->with('success', 'Data Barang Berhasil Di Tambahkan');
        } else {
            //redirect dengan pesan error
            return redirect()->route('barang.index')->with('error', 'Data Barang Gagal Di Tambahkan');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $barang = barangModel::find($id);
        return view('barang.edit', compact('barang'));
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
        $messages = [
            'required' => ':attribute tidak boleh kosong',
            'max' => ':attribute maximal :max karakter',
            'min' => ':attribute minimal :min karakter'
        ];

        $request->validate([
            'nama_barang' => 'required',
            'stok' => 'required',
            'harga' => 'required',
            'jenis_barang' => 'required',
            'deskripsi_barang' => 'required'
        ],  $messages);

        $barang = barangModel::find($id);
        $barang->nama_barang = $request->nama_barang;
        $barang->stok = $request->stok;
        $barang->harga = $request->harga;
        $barang->jenis_barang = $request->jenis_barang;
        $barang->deskripsi_barang = $request->deskripsi_barang;
        if ($request->hasfile('foto')) {
            $destination = 'assets/img/barang/' . $barang->foto;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $image = $request->file('foto');
            $file_image = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/img/barang'), $file_image);
            $barang->foto = $file_image;
        }
        $barang->update();
        return redirect()->route('barang.index')->with('success', 'Data Barang Berhasil Di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $barang = barangModel::find($id);
        $location = 'assets/img/barang/' . $barang->foto;
        if (File::exists($location)) {
            File::delete($location);
        }
        $barang->delete();
        return redirect()->route('barang.index')->with('success', 'Data Barang Berhasil Di Hapus');;
    }
}
