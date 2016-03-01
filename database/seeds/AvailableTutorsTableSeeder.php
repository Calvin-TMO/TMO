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
        $user = User::where('name', '=', 'tutor1')->first();
        DB::table('available_tutors')->insert([
            'user_id' => $user->id,
            'course_id' => '1'
        ]);

        DB::table('available_tutors')->insert([
            'user_id' => $user->id,
            'course_id' => '2'
        ]);

        $user = User::where('name', '=', 'tutor2')->first();
        DB::table('available_tutors')->insert([
            'user_id' => $user->id,
            'course_id' => '2'
        ]);

        DB::table('available_tutors')->insert([
            'user_id' => $user->id,
            'course_id' => '3'
        ]);
    }
}
