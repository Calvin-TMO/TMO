<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert(
            ['name' => 'tutor' ]
        );
        DB::table('roles')->insert(
            ['name' => 'professor' ]
        );
        DB::table('roles')->insert(
            ['name' => 'admin' ]
        );
    }
}
