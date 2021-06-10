<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

/*         DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('secret'),
            'phone' => '23232389902390',
            'email_verified_at' => date('Y/m/d'),
        ]);
 */
        for ($i = 0; $i != 20; $i++)
        {

            DB::table('users')->insert([
                'name' => Str::random(10),
                'email' => Str::random(5).'@gmail.com',
                'password' => bcrypt('secret'),
                'phone' => '23232389902390',
                'email_verified_at' => date('Y/m/d'),
                'daftar' => random_int(1,3),
            ]);

        }


    }
}
