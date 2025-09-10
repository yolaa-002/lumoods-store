<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'deskripsi',
        'harga',
        'stok',
        'gambar',
    ];

    public function keranjangs()
    {
        return $this->hasMany(Keranjang::class);
    }

    public function pemesananitems()
    {
        return $this->hasMany(Pemesanan_item::class);
    }
}
