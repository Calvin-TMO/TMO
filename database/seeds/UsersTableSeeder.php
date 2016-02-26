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
        DB::table('users')->insert([
            'name' => 'tmo_admin',
            'email' => 'tmo_admin@tmo.rycieos.com',
            'password' => bcrypt('tmoadmin')
        ]);
    }
}
