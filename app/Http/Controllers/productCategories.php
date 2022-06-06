<?php

namespace App\Http\Controllers;

use App\Models\ProductCategory;
use Illuminate\Http\Request;

class productCategories extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = ProductCategory::latest()->paginate(5);
        return view('productCategories.index', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('productCategories.tambah');
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
        ],  $messages);

        $category = ProductCategory::create([
            'name'       => $request->name,
        ]);
        if ($category) {
            //redirect dengan pesan sukses
            return redirect()->route('productCategories.index')->with('success', 'Data Kategori Berhasil Di Tambahkan');
        } else {
            //redirect dengan pesan error
            return redirect()->route('productCategories.index')->with('error', 'Data Kategori Gagal Di Tambahkan');
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
        $category = ProductCategory::find($id);
        $category->delete();
        return redirect()->route('productCategories.index')->with('success', 'Data kategori Berhasil Di Hapus');;
    }
}
