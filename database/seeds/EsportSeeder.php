<?php

use Illuminate\Database\Seeder;
use App\Esports;

class EsportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i != 10; $i++) {
            Esports::insert([
                'cabang_lomba' => random_int(1,4),
                'asal_kota'=>Str::random(10),
                'nama_tim'=>Str::random(5),
                'nama_ketua'=>Str::random(10),
                'hp_ketua'=>Str::random(10),
                'wa_ketua'=>Str::random(10),
                'line_ketua'=>Str::random(10),
                'nama_anggota1'=>Str::random(10),
                'nama_anggota2'=>Str::random(10),
                'nama_anggota3'=>Str::random(10),
                'nama_anggota4'=>Str::random(10),
                'nama_cadangan'=>Str::random(10),
                'id_anggota1'=>Str::random(10),
                'id_anggota2'=>Str::random(10),
                'id_anggota3'=>Str::random(10),
                'id_anggota4'=>Str::random(10),
                'id_cadangan'=>Str::random(10),
                'is_submitted'=> random_int(0,1),
                'userid'=>'1',
                'asal_info'=>'1',
            ]);
        }
    }
}
