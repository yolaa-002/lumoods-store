<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    use HasFactory; 

        use HasFactory;
    protected $fillable = [
        'user_id',
        'total_harga',
        'status',
        'metode_pembayaran',
        'metode_pengiriman',
        'alamat'
        
 ];

 public function user()
 {
     return $this->belongsTo(User::class);
 }

 public function pemesananItems()
 {
     return $this->hasMany(Pemesanan_item::class);
 }

 public function pembayarab()
 {
    return $this->hasOne(Pembayaran::class);
 }
    
}
