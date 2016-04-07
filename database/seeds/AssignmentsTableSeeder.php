<?php

use App\User as User;
use Illuminate\Database\Seeder;

class AssignmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $professor = User::where('name', '=', 'Ruthann Sublett')->first();
        $tutor = User::where('name', '=', 'Heather Monier')->first();
        $student = User::where('name', '=', 'Suk Percell')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'professor2')->first();
        $student = User::where('name', '=', 'student2')->first();
        DB::table('assignments')->insert([
            'course_id' => '2',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);
        
        $professor = User::where('name', '=', 'Keith VanderLinden')->first();
        $student = User::where('name', '=', 'Mark VanderStel')->first();
        DB::table('assignments')->insert([
            'course_id' => '5',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Ruthann Sublett')->first();
        $tutor = User::where('name', '=', 'Heather Monier')->first();
        $student = User::where('name', '=', 'Kaye Stager')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Ruthann Sublett')->first();
        $tutor = User::where('name', '=', 'Heather Monier')->first();
        $student = User::where('name', '=', 'Darryl Campa')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Ruthann Sublett')->first();
        $tutor = User::where('name', '=', 'Heather Monier')->first();
        $student = User::where('name', '=', 'Carolin Koepsell')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Ruthann Sublett')->first();
        $tutor = User::where('name', '=', 'Heather Monier')->first();
        $student = User::where('name', '=', 'Loura Yagi')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);
    }
}
