<?php

use Illuminate\Database\Seeder;
use App\Kode;

class KodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kode::insert([
            'name'=>'olim',
            'no'=>601,
            'price'=>90
        ]);
        Kode::insert([
            'name'=>'pubg',
            'no'=>001,
            'price'=>100
        ]);
        Kode::insert([
            'name'=>'dota2',
            'no'=>201,
            'price'=>120
        ]);
        Kode::insert([
            'name'=>'ml',
            'no'=>301,
            'price'=>60
        ]);
        Kode::insert([
            'name'=>'csgo',
            'no'=>401,
            'price'=>120
        ]);
        Kode::insert([
            'name'=>'gdevs',
            'no'=>001,
            'price'=>120
        ]);
        Kode::insert([
            'name'=>'gdevm',
            'no'=>001,
            'price'=>150
        ]);
        Kode::insert([
            'name'=>'adevs',
            'no'=>301,
            'price'=>120
        ]);
        Kode::insert([
            'name'=>'adevm',
            'no'=>301,
            'price'=>150
        ]);
        Kode::insert([
            'name'=>'iot',
            'no'=>601,
            'price'=>150
        ]);
    }
}
