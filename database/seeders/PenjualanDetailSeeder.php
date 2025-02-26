<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PenjualanDetailSeeder extends Seeder
{
    public function run()
    {
        $penjualan = DB::table('t_penjualan')->pluck('penjualan_id')->toArray();
        $barang = DB::table('m_barang')->get(); // Ambil semua data barang

        if (empty($penjualan) || empty($barang)) {
            $this->command->warn('Data penjualan atau barang belum tersedia! Jalankan PenjualanSeeder dan BarangSeeder terlebih dahulu.');
            return;
        }

        $data = [];

        foreach ($penjualan as $penjualan_id) {
            $barangDipilih = $barang->random(3); // Ambil 3 barang secara acak

            foreach ($barangDipilih as $item) {
                $data[] = [
                    'penjualan_id' => $penjualan_id,
                    'barang_id' => $item->barang_id,
                    'harga' => $item->harga_jual, // Ambil harga dari tabel m_barang
                    'jumlah' => rand(1, 5),
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ];
            }
        }

        DB::table('t_penjualan_detail')->insert($data);
    }
}
