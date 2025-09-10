<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
         Schema::create('pemesanans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->decimal('total_harga', 10, 2); // total belanja
            $table->enum('status', ['pending', 'sudah_bayar', 'proses', 'batal'])->default('pending');
            $table->enum('metode_pembayaran', ['tunai', 'e-wallet', 'transfer_bank']);
            $table->enum('metode_pengiriman', ['cod', 'antar', 'ambil']);
            $table->text('alamat')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemesanans');
    }
};
