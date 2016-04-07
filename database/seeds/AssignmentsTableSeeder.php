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

        $professor = User::where('name', '=', 'Ruthann Sublett')->first();
        $tutor = User::where('name', '=', 'Kirstin Yearta')->first();
        $student = User::where('name', '=', 'Patrick Mcconnaughy')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Ruthann Sublett')->first();
        $tutor = User::where('name', '=', 'Kirstin Yearta')->first();
        $student = User::where('name', '=', 'Kiana Bockman')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Ruthann Sublett')->first();
        $tutor = User::where('name', '=', 'Kirstin Yearta')->first();
        $student = User::where('name', '=', 'Diego Herod')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Ruthann Sublett')->first();
        $tutor = User::where('name', '=', 'Kirstin Yearta')->first();
        $student = User::where('name', '=', 'Weldon Pacheco')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Ruthann Sublett')->first();
        $tutor = User::where('name', '=', 'Rebekah Tufts')->first();
        $student = User::where('name', '=', 'Clifton Horsman')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Ruthann Sublett')->first();
        $tutor = User::where('name', '=', 'Rebekah Tufts')->first();
        $student = User::where('name', '=', 'Chere Vonderheide')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Ruthann Sublett')->first();
        $tutor = User::where('name', '=', 'Rebekah Tufts')->first();
        $student = User::where('name', '=', 'Latonya Siemers')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Ruthann Sublett')->first();
        $tutor = User::where('name', '=', 'Rebekah Tufts')->first();
        $student = User::where('name', '=', 'Lessie Webber')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Liane Valerius')->first();
        $tutor = User::where('name', '=', 'Jannie Drain')->first();
        $student = User::where('name', '=', 'Aundrea Bankes')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Liane Valerius')->first();
        $tutor = User::where('name', '=', 'Jannie Drain')->first();
        $student = User::where('name', '=', 'Estell Wallingford')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Liane Valerius')->first();
        $tutor = User::where('name', '=', 'Jannie Drain')->first();
        $student = User::where('name', '=', 'Eun Stradford')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Liane Valerius')->first();
        $tutor = User::where('name', '=', 'Jannie Drain')->first();
        $student = User::where('name', '=', 'Suk Percell')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Liane Valerius')->first();
        $tutor = User::where('name', '=', 'Virgina Chadburn')->first();
        $student = User::where('name', '=', 'Carmelina Troy')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Liane Valerius')->first();
        $tutor = User::where('name', '=', 'Virgina Chadburn')->first();
        $student = User::where('name', '=', 'Ivonne Dillenbeck')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Liane Valerius')->first();
        $tutor = User::where('name', '=', 'Virgina Chadburn')->first();
        $student = User::where('name', '=', 'Latina Casterline')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Liane Valerius')->first();
        $tutor = User::where('name', '=', 'Virgina Chadburn')->first();
        $student = User::where('name', '=', 'Aubrey Failla')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Liane Valerius')->first();
        $tutor = User::where('name', '=', 'Melaine Books')->first();
        $student = User::where('name', '=', 'Nicolas Coble')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Liane Valerius')->first();
        $tutor = User::where('name', '=', 'Melaine Books')->first();
        $student = User::where('name', '=', 'Aubrey Failla')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Liane Valerius')->first();
        $tutor = User::where('name', '=', 'Melaine Books')->first();
        $student = User::where('name', '=', 'Claudine Kramer')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Liane Valerius')->first();
        $tutor = User::where('name', '=', 'Melaine Books')->first();
        $student = User::where('name', '=', 'Weldon Pacheco')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Liane Valerius')->first();
        $tutor = User::where('name', '=', 'Neal Makris')->first();
        $student = User::where('name', '=', 'Nicolas Collum')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Liane Valerius')->first();
        $tutor = User::where('name', '=', 'Neal Makris')->first();
        $student = User::where('name', '=', 'Latina Casterline')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Liane Valerius')->first();
        $tutor = User::where('name', '=', 'Neal Makris')->first();
        $student = User::where('name', '=', 'Norma Unrein')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Liane Valerius')->first();
        $tutor = User::where('name', '=', 'Neal Makris')->first();
        $student = User::where('name', '=', 'Melaine Books')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Liane Valerius')->first();
        $tutor = User::where('name', '=', 'Kenia Everton')->first();
        $student = User::where('name', '=', 'Leta Milhorn')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Liane Valerius')->first();
        $tutor = User::where('name', '=', 'Kenia Everton')->first();
        $student = User::where('name', '=', 'Kiyoko Brezinski')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Liane Valerius')->first();
        $tutor = User::where('name', '=', 'Kenia Everton')->first();
        $student = User::where('name', '=', 'Josephine Miedema')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Liane Valerius')->first();
        $tutor = User::where('name', '=', 'Kenia Everton')->first();
        $student = User::where('name', '=', 'Celia Ary')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Elvia Rotondo')->first();
        $tutor = User::where('name', '=', 'Emma Calvery')->first();
        $student = User::where('name', '=', 'Katina Soper')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Elvia Rotondo')->first();
        $tutor = User::where('name', '=', 'Emma Calvery')->first();
        $student = User::where('name', '=', 'Kacey Marie')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Elvia Rotondo')->first();
        $tutor = User::where('name', '=', 'Emma Calvery')->first();
        $student = User::where('name', '=', 'Afton Harman')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Elvia Rotondo')->first();
        $tutor = User::where('name', '=', 'Emma Calvery')->first();
        $student = User::where('name', '=', 'Sanora Devos')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Elvia Rotondo')->first();
        $tutor = User::where('name', '=', 'Mckinley Key')->first();
        $student = User::where('name', '=', 'Darline Coberly')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Elvia Rotondo')->first();
        $tutor = User::where('name', '=', 'Mckinley Key')->first();
        $student = User::where('name', '=', 'Liane Valerius')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Elvia Rotondo')->first();
        $tutor = User::where('name', '=', 'Mckinley Key')->first();
        $student = User::where('name', '=', 'Ivonne Dillenbeck')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Elvia Rotondo')->first();
        $tutor = User::where('name', '=', 'Mckinley Key')->first();
        $student = User::where('name', '=', 'Harriette Mcgurk')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Elvia Rotondo')->first();
        $tutor = User::where('name', '=', 'Belkis Lussier')->first();
        $student = User::where('name', '=', 'Ghislaine Kisling')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Elvia Rotondo')->first();
        $tutor = User::where('name', '=', 'Belkis Lussier')->first();
        $student = User::where('name', '=', 'Carolin Koepsell')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Elvia Rotondo')->first();
        $tutor = User::where('name', '=', 'Belkis Lussier')->first();
        $student = User::where('name', '=', 'Warner Fadden')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Elvia Rotondo')->first();
        $tutor = User::where('name', '=', 'Belkis Lussier')->first();
        $student = User::where('name', '=', 'Ruthann Manion')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Lasonya Rudnicki')->first();
        $tutor = User::where('name', '=', 'Danika Madera')->first();
        $student = User::where('name', '=', 'Therese Mauro')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Lasonya Rudnicki')->first();
        $tutor = User::where('name', '=', 'Danika Madera')->first();
        $student = User::where('name', '=', 'Aura Souders')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Lasonya Rudnicki')->first();
        $tutor = User::where('name', '=', 'Danika Madera')->first();
        $student = User::where('name', '=', 'Sallie Folger')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Lasonya Rudnicki')->first();
        $tutor = User::where('name', '=', 'Danika Madera')->first();
        $student = User::where('name', '=', 'Leta Milhorn')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Lasonya Rudnicki')->first();
        $tutor = User::where('name', '=', 'Darryl Campa')->first();
        $student = User::where('name', '=', 'Fransisca Seligman')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Lasonya Rudnicki')->first();
        $tutor = User::where('name', '=', 'Darryl Campa')->first();
        $student = User::where('name', '=', 'Ruthann Manion')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Lasonya Rudnicki')->first();
        $tutor = User::where('name', '=', 'Darryl Campa')->first();
        $student = User::where('name', '=', 'Aura Souders')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Lasonya Rudnicki')->first();
        $tutor = User::where('name', '=', 'Darryl Campa')->first();
        $student = User::where('name', '=', 'Fidelia Casagrande')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Lasonya Rudnicki')->first();
        $tutor = User::where('name', '=', 'Roxy Swyers')->first();
        $student = User::where('name', '=', 'Danika Madera')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Lasonya Rudnicki')->first();
        $tutor = User::where('name', '=', 'Roxy Swyers')->first();
        $student = User::where('name', '=', 'Darryl Campa')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Lasonya Rudnicki')->first();
        $tutor = User::where('name', '=', 'Roxy Swyers')->first();
        $student = User::where('name', '=', 'Joline Clontz')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Lasonya Rudnicki')->first();
        $tutor = User::where('name', '=', 'Roxy Swyers')->first();
        $student = User::where('name', '=', 'Skye Gantz')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Nicolas Collum')->first();
        $tutor = User::where('name', '=', 'Freida Upshur')->first();
        $student = User::where('name', '=', 'Angelyn Yousef')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Nicolas Collum')->first();
        $tutor = User::where('name', '=', 'Freida Upshur')->first();
        $student = User::where('name', '=', 'Ivette Merchant')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Nicolas Collum')->first();
        $tutor = User::where('name', '=', 'Freida Upshur')->first();
        $student = User::where('name', '=', 'Clifton Horsman')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Nicolas Collum')->first();
        $tutor = User::where('name', '=', 'Freida Upshur')->first();
        $student = User::where('name', '=', 'Liane Valerius')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Mariela Clore')->first();
        $tutor = User::where('name', '=', 'Flo Mckamey')->first();
        $student = User::where('name', '=', 'Mckinley Key')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Mariela Clore')->first();
        $tutor = User::where('name', '=', 'Flo Mckamey')->first();
        $student = User::where('name', '=', 'Jana Pierre')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Mariela Clore')->first();
        $tutor = User::where('name', '=', 'Flo Mckamey')->first();
        $student = User::where('name', '=', 'Olen Brogdon')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Mariela Clore')->first();
        $tutor = User::where('name', '=', 'Flo Mckamey')->first();
        $student = User::where('name', '=', 'Mariela Clore')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Mariela Clore')->first();
        $tutor = User::where('name', '=', 'Earlene Lindow')->first();
        $student = User::where('name', '=', 'Leland Lipe')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Mariela Clore')->first();
        $tutor = User::where('name', '=', 'Earlene Lindow')->first();
        $student = User::where('name', '=', 'Bessie Bergfeld')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Mariela Clore')->first();
        $tutor = User::where('name', '=', 'Earlene Lindow')->first();
        $student = User::where('name', '=', 'Cleotilde Roca')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Mariela Clore')->first();
        $tutor = User::where('name', '=', 'Earlene Lindow')->first();
        $student = User::where('name', '=', 'Suk Percell')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Mariela Clore')->first();
        $tutor = User::where('name', '=', 'Jenice Angel')->first();
        $student = User::where('name', '=', 'Madison Radigan')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Mariela Clore')->first();
        $tutor = User::where('name', '=', 'Jenice Angel')->first();
        $student = User::where('name', '=', 'Skye Gantz')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Mariela Clore')->first();
        $tutor = User::where('name', '=', 'Jenice Angel')->first();
        $student = User::where('name', '=', 'Dion Crouch')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Mariela Clore')->first();
        $tutor = User::where('name', '=', 'Jenice Angel')->first();
        $student = User::where('name', '=', 'Julene Tedder')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Mariela Clore')->first();
        $tutor = User::where('name', '=', 'Katina Soper')->first();
        $student = User::where('name', '=', 'Beryl Bender')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Mariela Clore')->first();
        $tutor = User::where('name', '=', 'Katina Soper')->first();
        $student = User::where('name', '=', 'Weldon Pacheco')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Mariela Clore')->first();
        $tutor = User::where('name', '=', 'Katina Soper')->first();
        $student = User::where('name', '=', 'Lessie Webber')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Mariela Clore')->first();
        $tutor = User::where('name', '=', 'Katina Soper')->first();
        $student = User::where('name', '=', 'Bobbie Ames')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Mariela Clore')->first();
        $tutor = User::where('name', '=', 'Aundrea Bankes')->first();
        $student = User::where('name', '=', 'Liane Valerius')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Mariela Clore')->first();
        $tutor = User::where('name', '=', 'Aundrea Bankes')->first();
        $student = User::where('name', '=', 'Sybil Fulcher')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Mariela Clore')->first();
        $tutor = User::where('name', '=', 'Aundrea Bankes')->first();
        $student = User::where('name', '=', 'Celia Ary')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Mariela Clore')->first();
        $tutor = User::where('name', '=', 'Aundrea Bankes')->first();
        $student = User::where('name', '=', 'Aundrea Bankes')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Weldon Pacheco')->first();
        $tutor = User::where('name', '=', 'Lera Colquitt')->first();
        $student = User::where('name', '=', 'Eun Stradford')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Weldon Pacheco')->first();
        $tutor = User::where('name', '=', 'Lera Colquitt')->first();
        $student = User::where('name', '=', 'Cleotilde Roca')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Weldon Pacheco')->first();
        $tutor = User::where('name', '=', 'Lera Colquitt')->first();
        $student = User::where('name', '=', 'Chere Vonderheide')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Weldon Pacheco')->first();
        $tutor = User::where('name', '=', 'Lera Colquitt')->first();
        $student = User::where('name', '=', 'Alena Burnley')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Angelyn Yousef')->first();
        $tutor = User::where('name', '=', 'Leland Lipe')->first();
        $student = User::where('name', '=', 'Earlene Lindow')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Angelyn Yousef')->first();
        $tutor = User::where('name', '=', 'Leland Lipe')->first();
        $student = User::where('name', '=', 'Joline Clontz')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Angelyn Yousef')->first();
        $tutor = User::where('name', '=', 'Leland Lipe')->first();
        $student = User::where('name', '=', 'Loura Yagi')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Angelyn Yousef')->first();
        $tutor = User::where('name', '=', 'Leland Lipe')->first();
        $student = User::where('name', '=', 'Darryl Campa')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Angelyn Yousef')->first();
        $tutor = User::where('name', '=', 'Annette Rank')->first();
        $student = User::where('name', '=', 'Leland Lipe')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Angelyn Yousef')->first();
        $tutor = User::where('name', '=', 'Annette Rank')->first();
        $student = User::where('name', '=', 'Mckinley Key')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Angelyn Yousef')->first();
        $tutor = User::where('name', '=', 'Annette Rank')->first();
        $student = User::where('name', '=', 'Jenice Angel')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Angelyn Yousef')->first();
        $tutor = User::where('name', '=', 'Annette Rank')->first();
        $student = User::where('name', '=', 'Chere Vonderheide')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Aubrey Failla')->first();
        $tutor = User::where('name', '=', 'Britteny Parm')->first();
        $student = User::where('name', '=', 'Earlene Lindow')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Aubrey Failla')->first();
        $tutor = User::where('name', '=', 'Britteny Parm')->first();
        $student = User::where('name', '=', 'Huey Hickmon')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Aubrey Failla')->first();
        $tutor = User::where('name', '=', 'Britteny Parm')->first();
        $student = User::where('name', '=', 'Olen Brogdon')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Aubrey Failla')->first();
        $tutor = User::where('name', '=', 'Britteny Parm')->first();
        $student = User::where('name', '=', 'Kiana Bockman')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Latonya Siemers')->first();
        $tutor = User::where('name', '=', 'Tanner Speirs')->first();
        $student = User::where('name', '=', 'Madison Radigan')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Latonya Siemers')->first();
        $tutor = User::where('name', '=', 'Tanner Speirs')->first();
        $student = User::where('name', '=', 'Mary Sutter')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Latonya Siemers')->first();
        $tutor = User::where('name', '=', 'Tanner Speirs')->first();
        $student = User::where('name', '=', 'Ernestine Beaupre')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Latonya Siemers')->first();
        $tutor = User::where('name', '=', 'Tanner Speirs')->first();
        $student = User::where('name', '=', 'Dominque Carrier')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Charlott Ratledge')->first();
        $tutor = User::where('name', '=', 'Roland Hilyard')->first();
        $student = User::where('name', '=', 'Rosamond Tejera')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Charlott Ratledge')->first();
        $tutor = User::where('name', '=', 'Roland Hilyard')->first();
        $student = User::where('name', '=', 'Kimberlie Venema')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Charlott Ratledge')->first();
        $tutor = User::where('name', '=', 'Roland Hilyard')->first();
        $student = User::where('name', '=', 'Fay Jakubowski')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Charlott Ratledge')->first();
        $tutor = User::where('name', '=', 'Roland Hilyard')->first();
        $student = User::where('name', '=', 'Ruthann Manion')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Charlott Ratledge')->first();
        $tutor = User::where('name', '=', 'Laverna Horsey')->first();
        $student = User::where('name', '=', 'Elvia Rotondo')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Charlott Ratledge')->first();
        $tutor = User::where('name', '=', 'Laverna Horsey')->first();
        $student = User::where('name', '=', 'Ghislaine Kisling')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Charlott Ratledge')->first();
        $tutor = User::where('name', '=', 'Laverna Horsey')->first();
        $student = User::where('name', '=', 'Katina Soper')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Charlott Ratledge')->first();
        $tutor = User::where('name', '=', 'Laverna Horsey')->first();
        $student = User::where('name', '=', 'Darline Coberly')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Charlott Ratledge')->first();
        $tutor = User::where('name', '=', 'Valencia Burdge')->first();
        $student = User::where('name', '=', 'Virgina Chadburn')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Charlott Ratledge')->first();
        $tutor = User::where('name', '=', 'Valencia Burdge')->first();
        $student = User::where('name', '=', 'Huey Hickmon')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Charlott Ratledge')->first();
        $tutor = User::where('name', '=', 'Valencia Burdge')->first();
        $student = User::where('name', '=', 'Elvin Carlo')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Charlott Ratledge')->first();
        $tutor = User::where('name', '=', 'Valencia Burdge')->first();
        $student = User::where('name', '=', 'Sonny Grahm')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Despina Gaitan')->first();
        $tutor = User::where('name', '=', 'Bobbie Ames')->first();
        $student = User::where('name', '=', 'Gwendolyn Hsu')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Despina Gaitan')->first();
        $tutor = User::where('name', '=', 'Bobbie Ames')->first();
        $student = User::where('name', '=', 'Elvia Rotondo')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Despina Gaitan')->first();
        $tutor = User::where('name', '=', 'Bobbie Ames')->first();
        $student = User::where('name', '=', 'Danika Madera')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Despina Gaitan')->first();
        $tutor = User::where('name', '=', 'Bobbie Ames')->first();
        $student = User::where('name', '=', 'Bessie Bergfeld')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Despina Gaitan')->first();
        $tutor = User::where('name', '=', 'Estell Wallingford')->first();
        $student = User::where('name', '=', 'Glady Saeed')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Despina Gaitan')->first();
        $tutor = User::where('name', '=', 'Estell Wallingford')->first();
        $student = User::where('name', '=', 'Kenia Everton')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Despina Gaitan')->first();
        $tutor = User::where('name', '=', 'Estell Wallingford')->first();
        $student = User::where('name', '=', 'Shawanda Ensign')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Despina Gaitan')->first();
        $tutor = User::where('name', '=', 'Estell Wallingford')->first();
        $student = User::where('name', '=', 'Fransisca Seligman')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Despina Gaitan')->first();
        $tutor = User::where('name', '=', 'Seema Stiltner')->first();
        $student = User::where('name', '=', 'Janine Glade')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Despina Gaitan')->first();
        $tutor = User::where('name', '=', 'Seema Stiltner')->first();
        $student = User::where('name', '=', 'Aliza Behringer')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Despina Gaitan')->first();
        $tutor = User::where('name', '=', 'Seema Stiltner')->first();
        $student = User::where('name', '=', 'Therese Mauro')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Despina Gaitan')->first();
        $tutor = User::where('name', '=', 'Seema Stiltner')->first();
        $student = User::where('name', '=', 'Dominque Carrier')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Despina Gaitan')->first();
        $tutor = User::where('name', '=', 'Rudy Witzel')->first();
        $student = User::where('name', '=', 'Gwendolyn Hsu')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Despina Gaitan')->first();
        $tutor = User::where('name', '=', 'Rudy Witzel')->first();
        $student = User::where('name', '=', 'Ernestine Beaupre')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Despina Gaitan')->first();
        $tutor = User::where('name', '=', 'Rudy Witzel')->first();
        $student = User::where('name', '=', 'Domingo Philpot')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Despina Gaitan')->first();
        $tutor = User::where('name', '=', 'Rudy Witzel')->first();
        $student = User::where('name', '=', 'Kimberlie Venema')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Huey Hickmon')->first();
        $tutor = User::where('name', '=', 'Fatima Fleagle')->first();
        $student = User::where('name', '=', 'Darline Coberly')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Huey Hickmon')->first();
        $tutor = User::where('name', '=', 'Fatima Fleagle')->first();
        $student = User::where('name', '=', 'Annette Rank')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Huey Hickmon')->first();
        $tutor = User::where('name', '=', 'Fatima Fleagle')->first();
        $student = User::where('name', '=', 'Aura Souders')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Huey Hickmon')->first();
        $tutor = User::where('name', '=', 'Fatima Fleagle')->first();
        $student = User::where('name', '=', 'Daniella Peppard')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Huey Hickmon')->first();
        $tutor = User::where('name', '=', 'Dede Dederick')->first();
        $student = User::where('name', '=', 'Maryjo Welton')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Huey Hickmon')->first();
        $tutor = User::where('name', '=', 'Dede Dederick')->first();
        $student = User::where('name', '=', 'Freida Upshur')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Huey Hickmon')->first();
        $tutor = User::where('name', '=', 'Dede Dederick')->first();
        $student = User::where('name', '=', 'Rudy Witzel')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Huey Hickmon')->first();
        $tutor = User::where('name', '=', 'Dede Dederick')->first();
        $student = User::where('name', '=', 'Aundrea Bankes')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Huey Hickmon')->first();
        $tutor = User::where('name', '=', 'Janine Glade')->first();
        $student = User::where('name', '=', 'Despina Gaitan')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Huey Hickmon')->first();
        $tutor = User::where('name', '=', 'Janine Glade')->first();
        $student = User::where('name', '=', 'Christin Allmond')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Huey Hickmon')->first();
        $tutor = User::where('name', '=', 'Janine Glade')->first();
        $student = User::where('name', '=', 'Tanner Speirs')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Huey Hickmon')->first();
        $tutor = User::where('name', '=', 'Janine Glade')->first();
        $student = User::where('name', '=', 'Jannette Lightfoot')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Huey Hickmon')->first();
        $tutor = User::where('name', '=', 'Gwendolyn Hsu')->first();
        $student = User::where('name', '=', 'Ivonne Dillenbeck')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Huey Hickmon')->first();
        $tutor = User::where('name', '=', 'Gwendolyn Hsu')->first();
        $student = User::where('name', '=', 'Gloria Moudy')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Huey Hickmon')->first();
        $tutor = User::where('name', '=', 'Gwendolyn Hsu')->first();
        $student = User::where('name', '=', 'Latonya Siemers')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Huey Hickmon')->first();
        $tutor = User::where('name', '=', 'Gwendolyn Hsu')->first();
        $student = User::where('name', '=', 'Patrick Mcconnaughy')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Huey Hickmon')->first();
        $tutor = User::where('name', '=', 'Norma Unrein')->first();
        $student = User::where('name', '=', 'Cleotilde Roca')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Huey Hickmon')->first();
        $tutor = User::where('name', '=', 'Norma Unrein')->first();
        $student = User::where('name', '=', 'Fidelia Casagrande')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Huey Hickmon')->first();
        $tutor = User::where('name', '=', 'Norma Unrein')->first();
        $student = User::where('name', '=', 'Shanika Keatts')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Huey Hickmon')->first();
        $tutor = User::where('name', '=', 'Norma Unrein')->first();
        $student = User::where('name', '=', 'Jerrell Lucchesi')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Huey Hickmon')->first();
        $tutor = User::where('name', '=', 'Afton Harman')->first();
        $student = User::where('name', '=', 'Celia Ary')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Huey Hickmon')->first();
        $tutor = User::where('name', '=', 'Afton Harman')->first();
        $student = User::where('name', '=', 'Annette Rank')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Huey Hickmon')->first();
        $tutor = User::where('name', '=', 'Afton Harman')->first();
        $student = User::where('name', '=', 'Fermina Beringer')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Huey Hickmon')->first();
        $tutor = User::where('name', '=', 'Afton Harman')->first();
        $student = User::where('name', '=', 'Jannette Lightfoot')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Leta Milhorn')->first();
        $tutor = User::where('name', '=', 'Albertha Junious')->first();
        $student = User::where('name', '=', 'Mary Sutter')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Leta Milhorn')->first();
        $tutor = User::where('name', '=', 'Albertha Junious')->first();
        $student = User::where('name', '=', 'Elvia Rotondo')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Leta Milhorn')->first();
        $tutor = User::where('name', '=', 'Albertha Junious')->first();
        $student = User::where('name', '=', 'Cleotilde Roca')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Leta Milhorn')->first();
        $tutor = User::where('name', '=', 'Albertha Junious')->first();
        $student = User::where('name', '=', 'Despina Gaitan')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Leta Milhorn')->first();
        $tutor = User::where('name', '=', 'Celia Ary')->first();
        $student = User::where('name', '=', 'Charlott Ratledge')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Leta Milhorn')->first();
        $tutor = User::where('name', '=', 'Celia Ary')->first();
        $student = User::where('name', '=', 'Lera Colquitt')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Leta Milhorn')->first();
        $tutor = User::where('name', '=', 'Celia Ary')->first();
        $student = User::where('name', '=', 'Kiyoko Brezinski')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Leta Milhorn')->first();
        $tutor = User::where('name', '=', 'Celia Ary')->first();
        $student = User::where('name', '=', 'Chere Vonderheide')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Chere Vonderheide')->first();
        $tutor = User::where('name', '=', 'Sybil Fulcher')->first();
        $student = User::where('name', '=', 'Harriette Mcgurk')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Chere Vonderheide')->first();
        $tutor = User::where('name', '=', 'Sybil Fulcher')->first();
        $student = User::where('name', '=', 'Roland Hilyard')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Chere Vonderheide')->first();
        $tutor = User::where('name', '=', 'Sybil Fulcher')->first();
        $student = User::where('name', '=', 'Beatrice Warnke')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Chere Vonderheide')->first();
        $tutor = User::where('name', '=', 'Sybil Fulcher')->first();
        $student = User::where('name', '=', 'Dominque Carrier')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Suk Percell')->first();
        $tutor = User::where('name', '=', 'Booker Schooley')->first();
        $student = User::where('name', '=', 'Denny Bottorff')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Suk Percell')->first();
        $tutor = User::where('name', '=', 'Booker Schooley')->first();
        $student = User::where('name', '=', 'Earlene Lindow')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Suk Percell')->first();
        $tutor = User::where('name', '=', 'Booker Schooley')->first();
        $student = User::where('name', '=', 'Bessie Bergfeld')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Suk Percell')->first();
        $tutor = User::where('name', '=', 'Booker Schooley')->first();
        $student = User::where('name', '=', 'Fransisca Seligman')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Suk Percell')->first();
        $tutor = User::where('name', '=', 'Hipolito Heald')->first();
        $student = User::where('name', '=', 'Margeret Rubino')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Suk Percell')->first();
        $tutor = User::where('name', '=', 'Hipolito Heald')->first();
        $student = User::where('name', '=', 'Suk Percell')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Suk Percell')->first();
        $tutor = User::where('name', '=', 'Hipolito Heald')->first();
        $student = User::where('name', '=', 'Fredda Sterba')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Suk Percell')->first();
        $tutor = User::where('name', '=', 'Hipolito Heald')->first();
        $student = User::where('name', '=', 'Ruthann Manion')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Suk Percell')->first();
        $tutor = User::where('name', '=', 'Dion Crouch')->first();
        $student = User::where('name', '=', 'Glady Saeed')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Suk Percell')->first();
        $tutor = User::where('name', '=', 'Dion Crouch')->first();
        $student = User::where('name', '=', 'Annette Rank')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Suk Percell')->first();
        $tutor = User::where('name', '=', 'Dion Crouch')->first();
        $student = User::where('name', '=', 'Jenice Angel')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Suk Percell')->first();
        $tutor = User::where('name', '=', 'Dion Crouch')->first();
        $student = User::where('name', '=', 'Lera Colquitt')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Joana Sauceda')->first();
        $tutor = User::where('name', '=', 'Therese Mauro')->first();
        $student = User::where('name', '=', 'Amos Racanelli')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Joana Sauceda')->first();
        $tutor = User::where('name', '=', 'Therese Mauro')->first();
        $student = User::where('name', '=', 'Denny Bottorff')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Joana Sauceda')->first();
        $tutor = User::where('name', '=', 'Therese Mauro')->first();
        $student = User::where('name', '=', 'Alena Burnley')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Joana Sauceda')->first();
        $tutor = User::where('name', '=', 'Therese Mauro')->first();
        $student = User::where('name', '=', 'Suk Percell')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Joana Sauceda')->first();
        $tutor = User::where('name', '=', 'Latina Casterline')->first();
        $student = User::where('name', '=', 'Fatima Fleagle')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Joana Sauceda')->first();
        $tutor = User::where('name', '=', 'Latina Casterline')->first();
        $student = User::where('name', '=', 'Warner Fadden')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Joana Sauceda')->first();
        $tutor = User::where('name', '=', 'Latina Casterline')->first();
        $student = User::where('name', '=', 'Fay Jakubowski')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Joana Sauceda')->first();
        $tutor = User::where('name', '=', 'Latina Casterline')->first();
        $student = User::where('name', '=', 'Emerald Studer')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Claudine Kramer')->first();
        $tutor = User::where('name', '=', 'Taryn Lasso')->first();
        $student = User::where('name', '=', 'Kimberlie Venema')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Claudine Kramer')->first();
        $tutor = User::where('name', '=', 'Taryn Lasso')->first();
        $student = User::where('name', '=', 'Carmelina Troy')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Claudine Kramer')->first();
        $tutor = User::where('name', '=', 'Taryn Lasso')->first();
        $student = User::where('name', '=', 'Beryl Bender')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Claudine Kramer')->first();
        $tutor = User::where('name', '=', 'Taryn Lasso')->first();
        $student = User::where('name', '=', 'Sybil Fulcher')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Julene Tedder')->first();
        $tutor = User::where('name', '=', 'Mechelle Chenier')->first();
        $student = User::where('name', '=', 'Skye Gantz')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Julene Tedder')->first();
        $tutor = User::where('name', '=', 'Mechelle Chenier')->first();
        $student = User::where('name', '=', 'Josephine Miedema')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Julene Tedder')->first();
        $tutor = User::where('name', '=', 'Mechelle Chenier')->first();
        $student = User::where('name', '=', 'Olen Brogdon')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Julene Tedder')->first();
        $tutor = User::where('name', '=', 'Mechelle Chenier')->first();
        $student = User::where('name', '=', 'Hipolito Heald')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Julene Tedder')->first();
        $tutor = User::where('name', '=', 'Estelle Vanloan')->first();
        $student = User::where('name', '=', 'Freida Upshur')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Julene Tedder')->first();
        $tutor = User::where('name', '=', 'Estelle Vanloan')->first();
        $student = User::where('name', '=', 'Carolin Koepsell')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Julene Tedder')->first();
        $tutor = User::where('name', '=', 'Estelle Vanloan')->first();
        $student = User::where('name', '=', 'Liane Valerius')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Julene Tedder')->first();
        $tutor = User::where('name', '=', 'Estelle Vanloan')->first();
        $student = User::where('name', '=', 'Ernestine Beaupre')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Julene Tedder')->first();
        $tutor = User::where('name', '=', 'Denise Meiners')->first();
        $student = User::where('name', '=', 'Fay Jakubowski')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Julene Tedder')->first();
        $tutor = User::where('name', '=', 'Denise Meiners')->first();
        $student = User::where('name', '=', 'Lera Colquitt')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Julene Tedder')->first();
        $tutor = User::where('name', '=', 'Denise Meiners')->first();
        $student = User::where('name', '=', 'Amanda Panter')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

        $professor = User::where('name', '=', 'Julene Tedder')->first();
        $tutor = User::where('name', '=', 'Denise Meiners')->first();
        $student = User::where('name', '=', 'Christin Allmond')->first();

        DB::table('assignments')->insert([
            'course_id' => '1',
            'professor_id' => $professor->id,
            'tutor_id' => $tutor->id,
            'student_id' => $student->id
        ]);

    }
}
