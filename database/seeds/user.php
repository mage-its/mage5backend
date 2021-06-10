<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Kode;

class user extends Seeder
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
            'name'=>'pubgm',
            'no'=>001,
            'price'=>100
        ]);
        Kode::insert([
            'name'=>'dota',
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
            'name'=>'idevm',
            'no'=>601,
            'price'=>150
        ]);
    }
}
