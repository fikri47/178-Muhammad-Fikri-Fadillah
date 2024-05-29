<?php

namespace App\Http\Controllers;

use App\Models\Pemesanan;
use App\Models\Surat;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class SuratController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $surat = Surat::all();
        return view('pages.admin.surat.index', compact('surat'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(string $id)
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pemesanan = Pemesanan::find($id);
        $surat = Surat::find($id);
        $filename = $pemesanan->nama_pemesan . '-' . time();

        $totalHargaProduk = $pemesanan->total;
        $totalOngkos = $surat->ongkos_kirim;
        $totalBiaya = $totalHargaProduk + $totalOngkos;
        $pdf = Pdf::loadView('pdf.invoice', ['pemesanan' => $pemesanan, 'surat' => $surat, 'totalBiaya' => $totalBiaya])->setOptions(['defaultFont' => 'sans-serif']);
        return $pdf->download($filename. '.' .'pdf');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pemesanan = Pemesanan::find($id);
        $surat = Surat::find($id);          
        return view('pages.admin.surat.update', compact('pemesanan', 'surat'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {        
        $surat= Surat::find($id);                        
        $surat -> ongkos_kirim = $request->ongkos_kirim;
        $surat -> tgl_pengiriman = $request->tgl_pengiriman;        
        $surat -> deskripsi_surat = $request->deskripsi_surat;                     
        $surat->update();
        
        return redirect('/surat');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $surat = Surat::find($id);
        $surat->delete();

        return redirect('/surat');
    }
}
