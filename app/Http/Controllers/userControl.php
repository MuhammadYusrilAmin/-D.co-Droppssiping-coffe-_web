<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use PDF;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class userControl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::latest()->paginate(5);
        return view('user.index', compact('user'));
    }
    
    
    public function cetak_pdf()
    {
        $user = User::latest()->get();
        $date = date('d-m-Y');
        $pdf = PDF::loadview('user.laporan_pdf', compact('user'));
        return $pdf->download('laporan-User_'.$date.'.pdf');

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.tambah');
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
            'nama' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'no_telp' => 'required|string|max:255',
            'password' => 'required|min:8|string',
            'id_akses' => 'required',
        ],  $messages);

        $user =
            User::create([
                'nama'       => $request->nama,
                'username'   => $request->username,
                'email'      => $request->email,
                'no_telp'      => $request->no_telp,
                'password'   => Hash::make($request->password),
                'id_akses'   => $request->id_akses
            ]);

        if ($user) {
            //redirect dengan pesan sukses
            return redirect()->route('user.index')->with('success', 'Data User Berhasil Di Tambahkan');
        } else {
            //redirect dengan pesan error
            return redirect()->route('user.index')->with('error', 'Data User Gagal Di Tambahkan');
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
        $user = User::find($id);
        return view('auth.updateProfile', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('user.edit', compact('user'));
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
            'nama' => 'required|string|max:255',
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'no_telp' => 'required|string|max:255',
            'id_akses' => 'required',
        ],  $messages);

        $user = User::find($id);
        $user->nama = $request->nama;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->no_telp = $request->no_telp;
        $user->id_akses = $request->id_akses;
        $user->update();
        if ($user->id == Auth::user()->id) {
            return redirect()->route('user.show', Auth::user()->id)->with('success', 'Data User Berhasil Di Update');
        } else {
            return redirect()->route('user.index')->with('success', 'Data User Berhasil Di Update');
        }
    }
    

    public function search()
    {
        $user = $_POST['user'];
        if ($user == null) {
            return redirect()->route('user.index');
        } else {
            $user = User::where('nama', 'like', '%' . $user . '%')->paginate(20);
            return view('user.index', compact('user'));
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $barang =
            User::find($id);
        $barang->delete();
        return redirect()->route('user.index')->with('success', 'Data Barang Berhasil Di Hapus');
    }
}
