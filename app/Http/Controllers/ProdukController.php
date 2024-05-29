<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use Storage;
use File;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produk = Produk::all();
        return view('pages.admin.produk.index', ['produk'=>$produk]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.produk.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'estimasi' => 'required|numeric',
            'deskripsi' => 'required',
            'harga' => 'required|numeric',
            'gambar' => 'required|image|mimes:png,jpg'
        ]);

        $filename = null;

        if($request->hasFile('gambar')) {
            $filename= time(). '.' .$request->gambar->extension();
            $request->gambar->move(public_path('produk_gambar'), $filename);


            $produk = new Produk();
            $produk->nama = $request->nama;
            $produk->estimasi = $request->estimasi;
            $produk->deskripsi = $request->deskripsi;
            $produk->harga = $request->harga;
            $produk->gambar = $filename;
            $produk->save();

           return redirect('/produk');
        
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $produk = Produk::find($id);
        $moreProduk = Produk::where('id', '!=', $id)->limit(5)->get();
        return view('pages.admin.produk.show', compact('produk', 'moreProduk'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $produk = Produk::find($id);
        return view('pages.admin.produk.update', ['produk'=>$produk]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $request->validate([
            'nama' => 'required',
            'estimasi' => 'required|numeric',
            'deskripsi' => 'required',
            'harga' => 'required|numeric',
            'gambar' => 'required|image|mimes:png,jpg'
        ]);

        $produk = Produk::find($id);
        $filename = null;

        if($request->hasFile('gambar')) {
            $path = 'produk_gambar/';
            File::delete($path. $produk->gambar);
  
            $filename = time(). '.' .$request->gambar->extension();
            $request->gambar->move(public_path('produk_gambar/'), $filename);
  
            $produk->gambar = $filename;
            $produk->update();
        }

        $produk->nama = $request->nama;
        $produk->estimasi = $request->estimasi;
        $produk->deskripsi = $request->deskripsi;
        $produk->harga = $request->harga;
        $produk->update();
        return redirect('/produk');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $produk = Produk::find($id);
        $produk->delete();
        
        $image_path = public_path('produk_gambar').'/'.$produk->gambar;
        unlink($image_path);

        return redirect('/produk')->with(['success' => 'Data Berhasil Dihapus!']);;
    }

    public function getAll() {
        $produk = Produk::all();
        return view('homepage', ['produk'=>$produk]);
    }
}
