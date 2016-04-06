<?php

use App\User as User;
use Illuminate\Database\Seeder;

class CurrentProfessorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('name', '=', 'Ruthann Sublett')->first();
        DB::table('current_professors')->insert([
            'user_id' => $user->id,
            'course_id' => '1'
        ]);

        $user = User::where('name', '=', 'Liane Valerius')->first();
        DB::table('current_professors')->insert([
            'user_id' => $user->id,
            'course_id' => '2'
        ]);

        $user = User::where('name', '=', 'Elvia Rotondo')->first();
        DB::table('current_professors')->insert([
            'user_id' => $user->id,
            'course_id' => '3'
        ]);

        $user = User::where('name', '=', 'Lasonya Rudnicki')->first();
        DB::table('current_professors')->insert([
            'user_id' => $user->id,
            'course_id' => '4'
        ]);

        $user = User::where('name', '=', 'Jerrell Lucchesi')->first();
        DB::table('current_professors')->insert([
            'user_id' => $user->id,
            'course_id' => '5'
        ]);

        $user = User::where('name', '=', 'Nicolas Collum')->first();
        DB::table('current_professors')->insert([
            'user_id' => $user->id,
            'course_id' => '6'
        ]);

        $user = User::where('name', '=', 'Mariela Clore')->first();
        DB::table('current_professors')->insert([
            'user_id' => $user->id,
            'course_id' => '7'
        ]);

        $user = User::where('name', '=', 'Weldon Pacheco')->first();
        DB::table('current_professors')->insert([
            'user_id' => $user->id,
            'course_id' => '8'
        ]);

        $user = User::where('name', '=', 'Angelyn Yousef')->first();
        DB::table('current_professors')->insert([
            'user_id' => $user->id,
            'course_id' => '9'
        ]);

        $user = User::where('name', '=', 'Aubrey Failla')->first();
        DB::table('current_professors')->insert([
            'user_id' => $user->id,
            'course_id' => '10'
        ]);

        $user = User::where('name', '=', 'Latonya Siemers')->first();
        DB::table('current_professors')->insert([
            'user_id' => $user->id,
            'course_id' => '11'
        ]);

        $user = User::where('name', '=', 'Charlott Ratledge')->first();
        DB::table('current_professors')->insert([
            'user_id' => $user->id,
            'course_id' => '12'
        ]);

        $user = User::where('name', '=', 'Olen Brogdon')->first();
        DB::table('current_professors')->insert([
            'user_id' => $user->id,
            'course_id' => '13'
        ]);

        $user = User::where('name', '=', 'Despina Gaitan')->first();
        DB::table('current_professors')->insert([
            'user_id' => $user->id,
            'course_id' => '14'
        ]);

        $user = User::where('name', '=', 'Huey Hickmon')->first();
        DB::table('current_professors')->insert([
            'user_id' => $user->id,
            'course_id' => '15'
        ]);

        $user = User::where('name', '=', 'Leta Milhorn')->first();
        DB::table('current_professors')->insert([
            'user_id' => $user->id,
            'course_id' => '16'
        ]);

        $user = User::where('name', '=', 'Chere Vonderheide')->first();
        DB::table('current_professors')->insert([
            'user_id' => $user->id,
            'course_id' => '17'
        ]);

        $user = User::where('name', '=', 'Suk Percell')->first();
        DB::table('current_professors')->insert([
            'user_id' => $user->id,
            'course_id' => '18'
        ]);

        $user = User::where('name', '=', 'Joana Sauceda')->first();
        DB::table('current_professors')->insert([
            'user_id' => $user->id,
            'course_id' => '19'
        ]);

        $user = User::where('name', '=', 'Claudine Kramer')->first();
        DB::table('current_professors')->insert([
            'user_id' => $user->id,
            'course_id' => '20'
        ]);

        $user = User::where('name', '=', 'Julene Tedder')->first();
        DB::table('current_professors')->insert([
            'user_id' => $user->id,
            'course_id' => '21'
        ]);

        $user = User::where('name', '=', 'Ernestine Beaupre')->first();
        DB::table('current_professors')->insert([
            'user_id' => $user->id,
            'course_id' => '22'
        ]);

        $user = User::where('name', '=', 'Fermina Beringer')->first();
        DB::table('current_professors')->insert([
            'user_id' => $user->id,
            'course_id' => '23'
        ]);

        $user = User::where('name', '=', 'Denny Bottorff')->first();
        DB::table('current_professors')->insert([
            'user_id' => $user->id,
            'course_id' => '24'
        ]);
    }
}
