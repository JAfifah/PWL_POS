<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class StokSeeder extends Seeder
{
    public function run()
    {
        $barang = DB::table('m_barang')->pluck('barang_id')->toArray(); // Ambil semua barang_id yang valid

        if (empty($barang)) {
            $this->command->warn('Tidak ada data di m_barang! Jalankan BarangSeeder terlebih dahulu.');
            return;
        }

        $data = [];
        foreach ($barang as $id) {
            $data[] = [
                'barang_id' => $id,
                'user_id' => 1, // Misalkan semua stok dimasukkan oleh admin
                'stok_tanggal' => Carbon::now(),
                'stok_jumlah' => rand(10, 100),
            ];
        }

        DB::table('t_stok')->insert($data);
    }
}
