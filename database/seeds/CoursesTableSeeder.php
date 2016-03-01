<?php

use Illuminate\Database\Seeder;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert([
            'department' => 'CS',
            'number' => '108',
            'description' => 'Intro to computer programming'
        ]);

        DB::table('courses')->insert([
            'department' => 'CS',
            'number' => '112',
            'description' => 'Intro to computing algorithms'
        ]);

        DB::table('courses')->insert([
            'department' => 'CS',
            'number' => '214',
            'description' => 'Programming languages'
        ]);
    }
}
