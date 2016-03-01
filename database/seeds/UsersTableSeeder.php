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

        DB::table('users')->insert([
            'name' => 'student1',
            'email' => 'student1@tmo.rycieos.com',
            'password' => bcrypt('student')
        ]);

        DB::table('users')->insert([
            'name' => 'student2',
            'email' => 'student2@tmo.rycieos.com',
            'password' => bcrypt('student')
        ]);

        DB::table('users')->insert([
            'name' => 'tutor1',
            'email' => 'tutor1@tmo.rycieos.com',
            'password' => bcrypt('tutor')
        ]);

        DB::table('users')->insert([
            'name' => 'tutor2',
            'email' => 'tutor2@tmo.rycieos.com',
            'password' => bcrypt('tutor')
        ]);

        DB::table('users')->insert([
            'name' => 'professor1',
            'email' => 'professor1@tmo.rycieos.com',
            'password' => bcrypt('professor')
        ]);

        DB::table('users')->insert([
            'name' => 'professor2',
            'email' => 'professor2@tmo.rycieos.com',
            'password' => bcrypt('professor')
        ]);
    }
}
