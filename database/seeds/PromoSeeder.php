<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PromoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('promos')->insert([
            'kode' => "T3KKOM"
        ]);
        DB::table('promos')->insert([
            'kode' => "DJ4YA"
        ]);
    }
}
