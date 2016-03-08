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
            'number' => '100',
            'description' => 'Creating Interactive Web Media'
        ]);

        DB::table('courses')->insert([
            'department' => 'CS',
            'number' => '104',
            'description' => 'Applied Computing'
        ]);

        DB::table('courses')->insert([
            'department' => 'CS',
            'number' => '106',
            'description' => 'Intro to Scientific Computation & Modeling'
        ]);

        DB::table('courses')->insert([
            'department' => 'CS',
            'number' => '108',
            'description' => 'Intro to Computing'
        ]);

        DB::table('courses')->insert([
            'department' => 'CS',
            'number' => '112',
            'description' => 'Introductory Computing Seminar'
        ]);

        DB::table('courses')->insert([
            'department' => 'CS',
            'number' => '112',
            'description' => 'Data Structures & Algorithms'
        ]);

        DB::table('courses')->insert([
            'department' => 'CS',
            'number' => '214',
            'description' => 'Programming Language Concepts'
        ]);

        DB::table('courses')->insert([
            'department' => 'CS',
            'number' => '232',
            'description' => 'Operating Systems and Networking'
        ]);

        DB::table('courses')->insert([
            'department' => 'CS',
            'number' => '262',
            'description' => 'Software Engineering'
        ]);

        DB::table('courses')->insert([
            'department' => 'CS',
            'number' => '295',
            'description' => 'Computing Seminar'
        ]);

        DB::table('courses')->insert([
            'department' => 'CS',
            'number' => '300',
            'description' => 'Special Topics in CS'
        ]);

        DB::table('courses')->insert([
            'department' => 'CS',
            'number' => '312',
            'description' => 'Logic Computability and Comlexity'
        ]);

        DB::table('courses')->insert([
            'department' => 'CS',
            'number' => '320',
            'description' => 'Advanced Computer Architecture'
        ]);

        DB::table('courses')->insert([
            'department' => 'CS',
            'number' => '332',
            'description' => 'Advanced Computer Networks'
        ]);

        DB::table('courses')->insert([
            'department' => 'CS',
            'number' => '342',
            'description' => 'Database Management Systems'
        ]);

        DB::table('courses')->insert([
            'department' => 'CS',
            'number' => '344',
            'description' => 'Artificial Intelligence'
        ]);

        DB::table('courses')->insert([
            'department' => 'CS',
            'number' => '352',
            'description' => 'Computer Graphics'
        ]);

        DB::table('courses')->insert([
            'department' => 'CS',
            'number' => '364',
            'description' => 'Computer Security'
        ]);

        DB::table('courses')->insert([
            'department' => 'CS',
            'number' => '374',
            'description' => 'High Performance Computing'
        ]);

        DB::table('courses')->insert([
            'department' => 'CS',
            'number' => '384',
            'description' => 'Perspectives in Computing'
        ]);

        DB::table('courses')->insert([
            'department' => 'CS',
            'number' => '390',
            'description' => 'Independent Study'
        ]);

        DB::table('courses')->insert([
            'department' => 'CS',
            'number' => '394',
            'description' => 'Senior Internship in Computing'
        ]);

        DB::table('courses')->insert([
            'department' => 'CS',
            'number' => '396',
            'description' => 'Senior Project in Computing I'
        ]);

        DB::table('courses')->insert([
            'department' => 'CS',
            'number' => '398',
            'description' => 'Senior Project in Computing II'
        ]);
    }
}
