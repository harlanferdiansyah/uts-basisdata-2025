<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ResepSeeder extends Seeder
{
    public function run()
    {
        DB::table('reseps')->insert([
            [
                'kunjungan_id' => 1,
                'obat_id' => 1,
                'jumlah' => 10,
                'aturan_pakai' => '3x sehari setelah makan',
            ],
            [
                'kunjungan_id' => 1,
                'obat_id' => 3,
                'jumlah' => 1,
                'aturan_pakai' => '2x sehari',
            ],
            [
                'kunjungan_id' => 2,
                'obat_id' => 2,
                'jumlah' => 14,
                'aturan_pakai' => '2x sehari selama 7 hari',
            ],
        ]);
    }
}
