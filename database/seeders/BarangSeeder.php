<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    public function run()
    {
        $data = [
            ['kategori_id' => 1, 'barang_kode' => 'TV01', 'barang_nama' => 'Televisi', 'harga_beli' => 2000000, 'harga_jual' => 2500000],
            ['kategori_id' => 1, 'barang_kode' => 'HP01', 'barang_nama' => 'Handphone', 'harga_beli' => 3000000, 'harga_jual' => 3500000],
            ['kategori_id' => 2, 'barang_kode' => 'SH01', 'barang_nama' => 'Sepatu', 'harga_beli' => 500000, 'harga_jual' => 600000],
            ['kategori_id' => 2, 'barang_kode' => 'BA01', 'barang_nama' => 'Baju', 'harga_beli' => 200000, 'harga_jual' => 250000],
            ['kategori_id' => 3, 'barang_kode' => 'MI01', 'barang_nama' => 'Mie Instan', 'harga_beli' => 2500, 'harga_jual' => 3000],
            ['kategori_id' => 3, 'barang_kode' => 'SA01', 'barang_nama' => 'Saus', 'harga_beli' => 5000, 'harga_jual' => 7000],
            ['kategori_id' => 4, 'barang_kode' => 'PB01', 'barang_nama' => 'Pulpen', 'harga_beli' => 2000, 'harga_jual' => 3000],
            ['kategori_id' => 4, 'barang_kode' => 'BK01', 'barang_nama' => 'Buku Tulis', 'harga_beli' => 5000, 'harga_jual' => 7000],
            ['kategori_id' => 5, 'barang_kode' => 'LP01', 'barang_nama' => 'Lipstik', 'harga_beli' => 100000, 'harga_jual' => 120000],
            ['kategori_id' => 5, 'barang_kode' => 'FD01', 'barang_nama' => 'Foundation', 'harga_beli' => 150000, 'harga_jual' => 180000],
        ];

        DB::table('m_barang')->insert($data);
    }
}
