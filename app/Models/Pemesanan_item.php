<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan_item extends Model
{
    use HasFactory;
    protected $fillable = [
            'pemesanan_id',
            'produk_id',
            'jumlah',
            'harga',
        ];

        public function pemesanan()
        {
            return $this->belongsTo(Pemesanan::class);

        }

        public function produk()
        {
            return $this->belongsTo(Produk::class);

        }
}
