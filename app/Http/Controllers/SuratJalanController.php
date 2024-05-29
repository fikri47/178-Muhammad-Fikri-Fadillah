<?php

namespace App\Http\Controllers;

use App\Models\Pemesanan;
use App\Models\Surat;
use Illuminate\Http\Request;

class SuratJalanController extends Controller
{
    public function create(string $id)
    {
        $pemesanan = Pemesanan::find($id);        
        return view('pages.admin.surat.create', compact('pemesanan'));
    }

    public function store(Request $request, $id) {
        $surat= Pemesanan::find($id);
        $surat = new Surat();
        $surat -> ongkos_kirim = $request->ongkos_kirim;
        $surat -> tgl_pengiriman = $request->tgl_pengiriman;        
        $surat -> deskripsi_surat = $request->deskripsi_surat;
        $surat -> pemesanan_id = $id;              
        $surat->save();

        return redirect('/surat');
    }

    public function change(Request $request, Surat $surat) {
        @dd($request->all());
        $surat->update($request->all());

        return redirect('/surat');
    }

    
}
