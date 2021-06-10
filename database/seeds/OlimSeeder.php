<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class OlimSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i !== 10; $i++) {
            DB::table('olim')->insert([
                'asal_sekolah' => Str::random(5),
                'asal_alamat' => Str::random(10),
                'asal_kota'=>Str::random(10),
                'nama_tim'=>Str::random(5),
                'nama_ketua'=>Str::random(10),
                'hp_ketua'=>Str::random(10),
                'wa_ketua'=>Str::random(10),
                'line_ketua'=>Str::random(10),
                'nama_anggota1'=>Str::random(10),
                'nama_anggota2'=>Str::random(10),
                'path_buktibayar'=>Str::random(10),
                'is_submitted'=> true,
                'userid'=>'1',
                'asal_info'=>'1',
            ]);
        }
    }
}
