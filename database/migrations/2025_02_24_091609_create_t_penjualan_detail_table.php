<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('t_penjualan_detail', function (Blueprint $table) {
            $table->id('detail_id');
            $table->foreignId('penjualan_id')->constrained('t_penjualan', 'penjualan_id')->onDelete('cascade');
            $table->foreignId('barang_id')->constrained('m_barang', 'barang_id')->onDelete('cascade');
            $table->integer('harga');
            $table->integer('jumlah');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('t_penjualan_detail');
    }
};
