<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    public function run()
    {
        $data = [
            ['kategori_kode' => 'ELC', 'kategori_nama' => 'Elektronik'],
            ['kategori_kode' => 'FAS', 'kategori_nama' => 'Fashion'],
            ['kategori_kode' => 'MKN', 'kategori_nama' => 'Makanan'],
            ['kategori_kode' => 'ALC', 'kategori_nama' => 'Alat Tulis'],
            ['kategori_kode' => 'KOS', 'kategori_nama' => 'Kosmetik'],
        ];

        DB::table('m_kategori')->insert($data);
    }
}
