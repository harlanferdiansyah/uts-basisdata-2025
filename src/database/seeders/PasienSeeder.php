<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PasienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pasiens')->insert([
            [
                'nik' => '3201123456780001',
                'nama' => 'Budi Santoso',
                'tanggal_lahir' => '1990-03-12',
                'jenis_kelamin' => 'L',
                'alamat' => 'Jakarta Timur',
                'telepon' => '081222334455',
                'gol_darah' => 'O',
            ],
            [
                'nik' => '3201432198765002',
                'nama' => 'Rina Wijaya',
                'tanggal_lahir' => '1985-11-20',
                'jenis_kelamin' => 'P',
                'alamat' => 'Bandung Barat',
                'telepon' => '081288887777',
                'gol_darah' => 'A',
            ],
        ]);
    }
}
