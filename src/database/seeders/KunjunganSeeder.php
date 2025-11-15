<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class KunjunganSeeder extends Seeder
{
    public function run()
    {
        DB::table('kunjungans')->insert([
            [
                'pasien_id' => 1,
                'dokter_id' => 1,
                'tanggal_kunjungan' => '2025-06-01',
                'keluhan' => 'Demam dan pusing',
                'diagnosis' => 'Infeksi ringan',
            ],
            [
                'pasien_id' => 2,
                'dokter_id' => 2,
                'tanggal_kunjungan' => '2025-06-03',
                'keluhan' => 'Batuk lama',
                'diagnosis' => 'Bronkitis',
            ],
        ]);
    }
}
