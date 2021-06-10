<?php

use Illuminate\Database\Seeder;
use App\MainComp;
use Illuminate\Support\Str;

class MainCompSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i !== 10; $i++) {
            MainComp::insert([
                'kat'=> random_int(1,2),
                'cabang_lomba' => random_int(1,3),
                'asal_perguruan' => Str::random(5),
                'asal_alamat' => Str::random(10),
                'asal_kota'=>Str::random(10),
                'nama_tim'=>Str::random(5),
                'nama_pembimbing'=>Str::random(10),
                'hp_pembimbing'=>Str::random(10),
                'wa_pembimbing'=>Str::random(10),
                'nama_ketua'=>Str::random(10),
                'hp_ketua'=>Str::random(10),
                'wa_ketua'=>Str::random(10),
                'line_ketua'=>Str::random(10),
                'nama_anggota1'=>Str::random(10),
                'nama_anggota2'=>Str::random(10),
                'is_submitted'=> random_int(0,1),
                'userid'=>'1',
                'asal_info'=>'1',
            ]);
        }
    }
}
