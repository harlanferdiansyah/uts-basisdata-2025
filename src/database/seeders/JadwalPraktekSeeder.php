<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class JadwalPraktekSeeder extends Seeder
{
    public function run()
    {
        DB::table('jadwal_prakteks')->insert([
            ['dokter_id' => 1, 'hari' => 'Senin', 'jam_mulai' => '08:00', 'jam_selesai' => '12:00'],
            ['dokter_id' => 1, 'hari' => 'Rabu',  'jam_mulai' => '08:00', 'jam_selesai' => '12:00'],
            ['dokter_id' => 2, 'hari' => 'Selasa', 'jam_mulai' => '09:00', 'jam_selesai' => '13:00'],
            ['dokter_id' => 3, 'hari' => 'Kamis', 'jam_mulai' => '10:00', 'jam_selesai' => '14:00'],
            ['dokter_id' => 4, 'hari' => 'Jumat', 'jam_mulai' => '08:00', 'jam_selesai' => '11:00'],
        ]);
    }
}
