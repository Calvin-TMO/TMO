<?php

use Illuminate\Database\Seeder;

class ReportsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reports')->insert([
            'assignment_id' => '1',
            'topic' => 'some cool stuff',
            'response' => 'it was awesome',
            'plans' => 'look for more'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '1',
            'topic' => 'some more cool stuff',
            'response' => 'still awesome',
            'plans' => 'look for even more'
        ]);
    }
}
