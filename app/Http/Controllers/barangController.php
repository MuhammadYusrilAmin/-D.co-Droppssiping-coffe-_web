<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\productModel;
use App\Models\productCategory;
use App\Models\ProductGallery;
use Illuminate\Support\Facades\DB;
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
        $product =  ProductModel::latest()->paginate(5);
        $category = ProductCategory::all();
        return view('barang.index', compact('product', 'category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = ProductCategory::all();
        return view('barang.tambah', compact('category'));
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
            'name' => 'required',
            'stok' => 'required',
            'harga' => 'required',
            'tags' => 'required',
            'deskripsi' => 'required',
            'categories_id' => 'required'
        ],  $messages);

        $id = rand();
        //upload image
        $product = productModel::create([
            'id'                => $id,
            'name'              => $request->name,
            'harga'             => $request->harga,
            'deskripsi'         => $request->deskripsi,
            'tags'              => $request->tags,
            'stok'              => $request->stok,
            'categories_id'     => $request->categories_id,
        ]);
        if ($product) {
            //redirect dengan pesan sukses      
            return redirect('productGalleries/create?id=' . $id);
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
        $category = ProductCategory::all();
        $product = productModel::find($id);
        return view('barang.edit', compact('product', 'category'));
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
            'name' => 'required',
            'stok' => 'required',
            'harga' => 'required',
            'tags' => 'required',
            'deskripsi' => 'required',
            'categories_id' => 'required'
        ],  $messages);

        $product = productModel::find($id);
        $product->name = $request->name;
        $product->stok = $request->stok;
        $product->harga = $request->harga;
        $product->tags = $request->tags;
        $product->deskripsi = $request->deskripsi;
        $product->categories_id = $request->categories_id;
        $product->update();
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
        $product = productModel::find($id);
        $gallery = ProductGallery::where('products_id', $id);
        $gallery->delete();
        $product->delete();
        return redirect()->route('barang.index')->with('success', 'Data Barang Berhasil Di Hapus');;
    }
}
