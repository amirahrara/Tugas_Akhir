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
        Schema::create('data', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kategori_id');
            $table->string('nama_produk');
            $table->string('caption');
            $table->string('cover_produk');
            $table->string('gambar1');
            $table->string('gambar2');
            $table->string('gambar3');
            $table->string('harga');
            $table->string('sale')->nullable();
            $table->text('deskripsi');
            $table->text('spesifikasi');
            $table->string('ukuran')->nullable();
            $table->string('warna')->nullable();
            $table->string('jumlah_produk');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data');
    }
};
