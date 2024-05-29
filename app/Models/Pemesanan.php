<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Pemesanan extends Model
{
    use HasFactory;

    protected $table = "pemesanan";

    protected $fillable = [
        'nama_pemesan',
        'alamat_pemesan',
        'telp',
        'deskripsi',
        'total',
        'produk_id'
    ];

    public function produk() {
        return $this->belongsTo(Produk::class, 'produk_id');
    }

    public function surat() {
        return $this->hasOne(Surat::class, 'surat_id');
    }
}
