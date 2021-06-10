<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SoalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i !== 300; $i++) {
            DB::table('soals')->insert([
                'soal' => Str::random(10),
                'answer' => Str::random(10),
                'image' => Str::random(10),
                'jenis_soal' => random_int(1,3),
                'difficulty' => random_int(1,2),
            ]);
        }
    }
}
