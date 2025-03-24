<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('m_kategori')->insert([
            [
                'kategori_id' => 'CML', // Pastikan ini sesuai dengan tipe data di database
                'kategori_kode' => 'CML',
                'kategori_nama' => 'Cemilan',
                'created_at' => Carbon::now(),
                'updated_at' => null
            ],
            [
                'kategori_id' => 'MNR',
                'kategori_kode' => 'MNR',
                'kategori_nama' => 'Minuman Ringan',
                'created_at' => Carbon::now(),
                'updated_at' => null
            ]
        ]);
    }
}
