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
        $user = User::where('name', '=', 'professor1')->first();
        DB::table('current_professors')->insert([
            'user_id' => $user->id,
            'course_id' => '1'
        ]);

        DB::table('current_professors')->insert([
            'user_id' => $user->id,
            'course_id' => '3'
        ]);

        $user = User::where('name', '=', 'professor2')->first();
        DB::table('current_professors')->insert([
            'user_id' => $user->id,
            'course_id' => '2'
        ]);
    }
}
