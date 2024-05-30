<?php

namespace App\Http\Controllers;

use App\Models\Pemesanan;
use App\Models\Produk;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PemesananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pemesanan = Pemesanan::all();
        return view('pages.admin.pemesanan.index', compact('pemesanan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $produk = Produk::get();
        return view('pages.admin.pemesanan.create', compact('produk'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_pemesan' => 'required',
            'alamat_pemesan' => 'required',
            'telp' => 'required|numeric',
            'total' => 'required|numeric',
            'produk' => 'required|exists:produk,id'
        ]);

        $pemesanan = new Pemesanan();
        $pemesanan -> nama_pemesan = $request->nama_pemesan;
        $pemesanan -> alamat_pemesan = $request->alamat_pemesan;
        $pemesanan -> telp = $request->telp;
        $pemesanan -> deskripsi = $request->deskripsi;
        $pemesanan -> total = $request->total;
        $pemesanan -> produk_id = $request->produk;
        $pemesanan->save();

        return redirect('/pemesanan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {        
        $pemesanan = Pemesanan::find($id);
        $produk = Produk::get();

        return view('pages.admin.pemesanan.update', ['pemesanan'=>$pemesanan, 'produk'=>$produk]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_pemesan' => 'required',
            'alamat_pemesan' => 'required',
            'telp' => 'required|numeric|',
            'total' => 'required|numeric',
            'produk' => 'required|exists:produk,id'
        ]);

        $pemesanan = Pemesanan::find($id);

        $pemesanan -> nama_pemesan = $request->nama_pemesan;
        $pemesanan -> alamat_pemesan = $request->alamat_pemesan;
        $pemesanan -> telp = $request->telp;
        $pemesanan -> deskripsi = $request->deskripsi;
        $pemesanan -> total = $request->total;
        $pemesanan -> produk_id = $request->produk;
        $pemesanan->update();

        return redirect('/pemesanan');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pemesanan = Pemesanan::find($id);
        $pemesanan->delete();

        return redirect('/pemesanan');
    }
}
