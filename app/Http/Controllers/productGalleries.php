<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\ProductGallery;
use Illuminate\Support\Facades\File;

class productGalleries extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = $_GET['id'];
        $gallery = ProductGallery::where('products_id', $id)->paginate(5);
        return view('productGalleries.index', compact('gallery'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('productGalleries.tambah');
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
            'files' => 'required',
            'files.*' => 'required|image',
        ],  $messages);

        $id = $request->id;
        if ($request->hasFile('files')) {
            $files = $request->file('files');
            foreach ($files as $file) {
                $extension = $file->getClientOriginalExtension();
                $rand = Str::random(5);
                $rand1 = Str::random(3);
                $fileName = $rand . "-" . date('his') . "-" . $rand1 . "." . $extension;
                $destinationPath = 'assets/img/barang' . '/';
                $file->move($destinationPath, $fileName);


                ProductGallery::create([
                    'products_id' => $id,
                    'url' => $fileName,
                ]);
            }
        }

        return redirect('productGalleries?id=' . $id)->with('success', 'Data Barang Berhasil Di Tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
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
        $gallery =  ProductGallery::find($id);
        $id_barang = $gallery->products_id;
        $location = 'assets/img/barang/' . $gallery->url;
        if (File::exists($location)) {
            File::delete($location);
        }
        $gallery->delete();
        return  redirect('productGalleries?id=' . $id_barang)->with('success', 'Data Barang Berhasil Di Hapus');;
    }
}
