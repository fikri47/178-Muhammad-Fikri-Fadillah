<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "produk";

    protected $fillable = ["nama", "estimasi", "deskripsi", "harga", "gambar"];

    public function pemesanan() {
        return $this->hasMany(Pemesanan::class, 'produk_id');
    }
}
