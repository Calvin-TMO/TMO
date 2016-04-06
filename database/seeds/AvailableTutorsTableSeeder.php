<?php

use App\User as User;
use Illuminate\Database\Seeder;

class AvailableTutorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('name', '=', 'Sybil Fulcher')->first();
        DB::table('available_tutors')->insert([
            'user_id' => $user->id,
            'course_id' => '17'
        ]);
        $user = User::where('name', '=', 'Hipolito Heald')->first();
        DB::table('available_tutors')->insert([
            'user_id' => $user->id,
            'course_id' => '18'
        ]);
        $user = User::where('name', '=', 'Darryl Campa')->first();
        DB::table('available_tutors')->insert([
            'user_id' => $user->id,
            'course_id' => '4'
        ]);
        $user = User::where('name', '=', 'Kirstin Yearta')->first();
        DB::table('available_tutors')->insert([
            'user_id' => $user->id,
            'course_id' => '1'
        ]);
        $user = User::where('name', '=', 'Dede Dederick')->first();
        DB::table('available_tutors')->insert([
            'user_id' => $user->id,
            'course_id' => '15'
        ]);
        $user = User::where('name', '=', 'Laverna Horsey')->first();
        DB::table('available_tutors')->insert([
            'user_id' => $user->id,
            'course_id' => '12'
        ]);
        $user = User::where('name', '=', 'Roxy Swyers')->first();
        DB::table('available_tutors')->insert([
            'user_id' => $user->id,
            'course_id' => '4'
        ]);
        $user = User::where('name', '=', 'Tanner Speirs')->first();
        DB::table('available_tutors')->insert([
            'user_id' => $user->id,
            'course_id' => '11'
        ]);
        $user = User::where('name', '=', 'Estell Wallingford')->first();
        DB::table('available_tutors')->insert([
            'user_id' => $user->id,
            'course_id' => '14'
        ]);
        $user = User::where('name', '=', 'Roland Hilyard')->first();
        DB::table('available_tutors')->insert([
            'user_id' => $user->id,
            'course_id' => '12'
        ]);
        $user = User::where('name', '=', 'Jannie Drain')->first();
        DB::table('available_tutors')->insert([
            'user_id' => $user->id,
            'course_id' => '2'
        ]);
        $user = User::where('name', '=', 'Mechelle Chenier')->first();
        DB::table('available_tutors')->insert([
            'user_id' => $user->id,
            'course_id' => '21'
        ]);
        $user = User::where('name', '=', 'Fatima Fleagle')->first();
        DB::table('available_tutors')->insert([
            'user_id' => $user->id,
            'course_id' => '14'
        ]);
        $user = User::where('name', '=', 'Danika Madera')->first();
        DB::table('available_tutors')->insert([
            'user_id' => $user->id,
            'course_id' => '4'
        ]);
        $user = User::where('name', '=', 'Bobbie Ames')->first();
        DB::table('available_tutors')->insert([
            'user_id' => $user->id,
            'course_id' => '14'
        ]);
        $user = User::where('name', '=', 'Virgina Chadburn')->first();
        DB::table('available_tutors')->insert([
            'user_id' => $user->id,
            'course_id' => '2'
        ]);
        $user = User::where('name', '=', 'Emma Calvery')->first();
        DB::table('available_tutors')->insert([
            'user_id' => $user->id,
            'course_id' => '3'
        ]);
        $user = User::where('name', '=', 'Melaine Books')->first();
        DB::table('available_tutors')->insert([
            'user_id' => $user->id,
            'course_id' => '2'
        ]);
        $user = User::where('name', '=', 'Valencia Burdge')->first();
        DB::table('available_tutors')->insert([
            'user_id' => $user->id,
            'course_id' => '12'
        ]);
        $user = User::where('name', '=', 'Neal Makris')->first();
        DB::table('available_tutors')->insert([
            'user_id' => $user->id,
            'course_id' => '2'
        ]);
        $user = User::where('name', '=', 'Flo Mckamey')->first();
        DB::table('available_tutors')->insert([
            'user_id' => $user->id,
            'course_id' => '7'
        ]);
        $user = User::where('name', '=', 'Albertha Junious')->first();
        DB::table('available_tutors')->insert([
            'user_id' => $user->id,
            'course_id' => '16'
        ]);
        $user = User::where('name', '=', 'Janine Glade')->first();
        DB::table('available_tutors')->insert([
            'user_id' => $user->id,
            'course_id' => '15'
        ]);
        $user = User::where('name', '=', 'Estelle Vanloan')->first();
        DB::table('available_tutors')->insert([
            'user_id' => $user->id,
            'course_id' => '21'
        ]);
        $user = User::where('name', '=', 'Mckinley Key')->first();
        DB::table('available_tutors')->insert([
            'user_id' => $user->id,
            'course_id' => '3'
        ]);
        $user = User::where('name', '=', 'Therese Mauro')->first();
        DB::table('available_tutors')->insert([
            'user_id' => $user->id,
            'course_id' => '19'
        ]);
        $user = User::where('name', '=', 'Rebekah Tufts')->first();
        DB::table('available_tutors')->insert([
            'user_id' => $user->id,
            'course_id' => '1'
        ]);
        $user = User::where('name', '=', 'Lera Colquitt')->first();
        DB::table('available_tutors')->insert([
            'user_id' => $user->id,
            'course_id' => '8'
        ]);
        $user = User::where('name', '=', 'Taryn Lasso')->first();
        DB::table('available_tutors')->insert([
            'user_id' => $user->id,
            'course_id' => '20'
        ]);
        $user = User::where('name', '=', 'Heather Monier')->first();
        DB::table('available_tutors')->insert([
            'user_id' => $user->id,
            'course_id' => '1'
        ]);
        $user = User::where('name', '=', 'Booker Schooley')->first();
        DB::table('available_tutors')->insert([
            'user_id' => $user->id,
            'course_id' => '18'
        ]);
        $user = User::where('name', '=', 'Seema Stiltner')->first();
        DB::table('available_tutors')->insert([
            'user_id' => $user->id,
            'course_id' => '14'
        ]);
        $user = User::where('name', '=', 'Gwendolyn Hsu')->first();
        DB::table('available_tutors')->insert([
            'user_id' => $user->id,
            'course_id' => '15'
        ]);
        $user = User::where('name', '=', 'Celia Ary')->first();
        DB::table('available_tutors')->insert([
            'user_id' => $user->id,
            'course_id' => '16'
        ]);
        $user = User::where('name', '=', 'Leland Lipe')->first();
        DB::table('available_tutors')->insert([
            'user_id' => $user->id,
            'course_id' => '9'
        ]);
        $user = User::where('name', '=', 'Freida Upshur')->first();
        DB::table('available_tutors')->insert([
            'user_id' => $user->id,
            'course_id' => '6'
        ]);
        $user = User::where('name', '=', 'Denise Meiners')->first();
        DB::table('available_tutors')->insert([
            'user_id' => $user->id,
            'course_id' => '21'
        ]);
        $user = User::where('name', '=', 'Rudy Witzel')->first();
        DB::table('available_tutors')->insert([
            'user_id' => $user->id,
            'course_id' => '14'
        ]);
        $user = User::where('name', '=', 'Belkis Lussier')->first();
        DB::table('available_tutors')->insert([
            'user_id' => $user->id,
            'course_id' => '3'
        ]);
        $user = User::where('name', '=', 'Latina Casterline')->first();
        DB::table('available_tutors')->insert([
            'user_id' => $user->id,
            'course_id' => '19'
        ]);
        $user = User::where('name', '=', 'Earlene Lindow')->first();
        DB::table('available_tutors')->insert([
            'user_id' => $user->id,
            'course_id' => '7'
        ]);
        $user = User::where('name', '=', 'Norma Unrein')->first();
        DB::table('available_tutors')->insert([
            'user_id' => $user->id,
            'course_id' => '15'
        ]);
        $user = User::where('name', '=', 'Jenice Angel')->first();
        DB::table('available_tutors')->insert([
            'user_id' => $user->id,
            'course_id' => '7'
        ]);
        $user = User::where('name', '=', 'Britteny Parm')->first();
        DB::table('available_tutors')->insert([
            'user_id' => $user->id,
            'course_id' => '10'
        ]);
        $user = User::where('name', '=', 'Kenia Everton')->first();
        DB::table('available_tutors')->insert([
            'user_id' => $user->id,
            'course_id' => '2'
        ]);
        $user = User::where('name', '=', 'Dion Crouch')->first();
        DB::table('available_tutors')->insert([
            'user_id' => $user->id,
            'course_id' => '18'
        ]);
        $user = User::where('name', '=', 'Afton Harman')->first();
        DB::table('available_tutors')->insert([
            'user_id' => $user->id,
            'course_id' => '15'
        ]);
        $user = User::where('name', '=', 'Katina Soper')->first();
        DB::table('available_tutors')->insert([
            'user_id' => $user->id,
            'course_id' => '7'
        ]);
        $user = User::where('name', '=', 'Annette Rank')->first();
        DB::table('available_tutors')->insert([
            'user_id' => $user->id,
            'course_id' => '9'
        ]);
        $user = User::where('name', '=', 'Aundrea Bankes')->first();
        DB::table('available_tutors')->insert([
            'user_id' => $user->id,
            'course_id' => '7'
        ]);
    }
}
