<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RumahSakitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('rumah_sakits')->insert([
            [
                'nama' => 'RS Sehat Sentosa',
                'alamat' => 'Jl. Melati No 12 Jakarta',
                'telepon' => '02188997766',
                'email' => 'info@sentosa.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'RS Medika Utama',
                'alamat' => 'Jl. Anggrek No 7 Bandung',
                'telepon' => '02255443322',
                'email' => 'contact@medika.com',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
