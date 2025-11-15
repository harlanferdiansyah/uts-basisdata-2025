<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PoliklinikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('polikliniks')->insert([
            [
                'rumah_sakit_id' => 1,
                'nama_poli' => 'Poli Umum',
                'lokasi_lantai' => '1A',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'rumah_sakit_id' => 1,
                'nama_poli' => 'Poli Gigi',
                'lokasi_lantai' => '1B',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'rumah_sakit_id' => 2,
                'nama_poli' => 'Poli Anak',
                'lokasi_lantai' => '2A',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'rumah_sakit_id' => 2,
                'nama_poli' => 'Poli Penyakit Dalam',
                'lokasi_lantai' => '2B',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
