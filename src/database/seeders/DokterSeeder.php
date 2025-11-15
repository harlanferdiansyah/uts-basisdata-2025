<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DokterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('dokters')->insert([
            [
                'poliklinik_id' => 1,
                'nama_dokter' => 'Dr. Andi Wijaya',
                'spesialisasi' => 'Dokter Umum',
                'nomor_str' => 'STR001',
                'telepon' => '081212121212',
            ],
            [
                'poliklinik_id' => 2,
                'nama_dokter' => 'Dr. Siti Aminah',
                'spesialisasi' => 'Pediatri',
                'nomor_str' => 'STR002',
                'telepon' => '081233344455',
            ],
            [
                'poliklinik_id' => 3,
                'nama_dokter' => 'Dr. Riko Pratama',
                'spesialisasi' => 'Dokter Gigi',
                'nomor_str' => 'STR003',
                'telepon' => '081255566677',
            ],
            [
                'poliklinik_id' => 4,
                'nama_dokter' => 'Dr. Nadia Putri',
                'spesialisasi' => 'Kardiologi',
                'nomor_str' => 'STR004',
                'telepon' => '081299988877',
            ],
        ]);
    }
}
