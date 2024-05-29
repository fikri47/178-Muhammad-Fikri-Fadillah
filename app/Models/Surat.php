<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Surat extends Model
{
    use HasFactory;

    protected $table = "surat";

    protected $fillable = [
        'tgl_pengiriman',
        'dekripsi_surat',
        'ongkos_kirim',
        'pemesanan_id'
    ];

    public function pemesanan() {
        return $this->belongsTo(Pemesanan::class , 'pemesanan_id');
    }

}
