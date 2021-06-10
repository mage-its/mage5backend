<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            // UsersTableSeeder::class,
            // EmailTemplatesTableSeeder::class,
            // user::class,
            // SoalSeeder::class,
            OlimSeeder::class,
            // MainCompSeeder::class,
            // PromoSeeder::class,
            // KodeSeeder::class,
        ]);
    }
}
