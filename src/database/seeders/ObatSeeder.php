<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ObatSeeder extends Seeder
{
    public function run()
    {
        DB::table('obats')->insert([
            [
                'nama_obat' => 'Paracetamol',
                'kategori' => 'Analgesik',
                'stok' => 300,
                'satuan' => 'Tablet',
                'harga' => 5000,
            ],
            [
                'nama_obat' => 'Amoxicillin',
                'kategori' => 'Antibiotik',
                'stok' => 200,
                'satuan' => 'Kapsul',
                'harga' => 15000,
            ],
            [
                'nama_obat' => 'OBH Syrup',
                'kategori' => 'Batuk',
                'stok' => 100,
                'satuan' => 'Botol',
                'harga' => 18000,
            ],
        ]);
    }
}
