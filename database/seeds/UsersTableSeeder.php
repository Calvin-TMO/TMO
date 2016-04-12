<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'tmo_admin',
            'email' => 'tmo_admin@tmo.rycieos.com',
            'password' => bcrypt('tmoadmin')
        ]);

        DB::table('users')->insert([
            'name' => 'Joel Adams',
            'email' => 'adams@calvin.edu',
            'password' => bcrypt('professor')
        ]);
        
        DB::table('users')->insert([
            'name' => 'Patrick Bailey',
            'email' => 'pmb4@calvin.edu',
            'password' => bcrypt('professor')
        ]);

        DB::table('users')->insert([
            'name' => 'Fred Ferwerda',
            'email' => 'ff22@calvin.edu',
            'password' => bcrypt('professor')
        ]);

        DB::table('users')->insert([
            'name' => 'Serita Nelesen',
            'email' => 'smn4@calvin.edu',
            'password' => bcrypt('professor')
        ]);

        DB::table('users')->insert([
            'name' => 'Victor Norman',
            'email' => 'vtn2@calvin.edu',
            'password' => bcrypt('professor')
        ]);

        DB::table('users')->insert([
            'name' => 'Harry Plantinga',
            'email' => 'hplantin@calvin.edu',
            'password' => bcrypt('professor')
        ]);

        DB::table('users')->insert([
            'name' => 'Keith VanderLinden',
            'email' => 'kvlinden@calvin.edu',
            'password' => bcrypt('professor')
        ]);

        DB::table('users')->insert([
            'name' => 'Albert Awuah',
            'email' => 'aa29@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Beka Agava',
            'email' => 'baa8@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Nathaniel Bender',
            'email' => 'nsb2@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Emmanuel Boye',
            'email' => 'efb4@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Kristofer Brink',
            'email' => 'kpb23@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Paige Brinks',
            'email' => 'plb7@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Karson Chilcott',
            'email' => 'kjc38@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Yesong Choi',
            'email' => 'yc38@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Russell Clousing',
            'email' => 'rlc32@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Karen Cudjoe',
            'email' => 'kec32@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Lydia Cupery',
            'email' => 'lac26@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Andrew Darmawan',
            'email' => 'ad36@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Jahnathan Davis',
            'email' => 'jrd58@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Mark Davis',
            'email' => 'mjd85@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Zachariah DeCook',
            'email' => 'zjd7@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Cameron Dewey',
            'email' => 'cjd38@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Nathanael Dick',
            'email' => 'nwd3@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Derek Dik',
            'email' => 'drd26@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Christopher Dilley',
            'email' => 'cpd5@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Tyler Dougherty',
            'email' => 'twd3@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Trevor Edewaard',
            'email' => 'tje9@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Andrew Gbeddy',
            'email' => 'akg8@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Andrew Groenewold',
            'email' => 'abg7@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Christiaan Hazlett',
            'email' => 'cdh24@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Jesse Hulse',
            'email' => 'jjh35@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'David Jaggard',
            'email' => 'djj6@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Casey Jones',
            'email' => 'caj7@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Eun Sung Kim',
            'email' => 'ek38@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Karis Kim',
            'email' => 'khk4@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Andrew Lang',
            'email' => 'al33@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Chris Li',
            'email' => 'cl43@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Tyler Luce',
            'email' => 'tjl7@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Hannah Ludema',
            'email' => 'hel7@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Joshua Maguire',
            'email' => 'jlm54@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Moses Mangunrahardja',
            'email' => 'mkm22@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'David Michel',
            'email' => 'djm43@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Reuben Niewenhuis',
            'email' => 'rjn7@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Corey Noble',
            'email' => 'cjn8@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Matthew Rowe',
            'email' => 'mlr28@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Aaron Santucci',
            'email' => 'ajs94@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Jonathan Schalk',
            'email' => 'jrs59@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Caron Schott',
            'email' => 'cak37@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Spencer Schultz',
            'email' => 'srs27@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Austin Snoeyink',
            'email' => 'abs25@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Joel Stehouwer',
            'email' => 'jbs24@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Lisa Terwilliger',
            'email' => 'lct6@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Tze Wei Thong',
            'email' => 'tt24@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Javin Unger',
            'email' => 'jbu2@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Benjamin VanDijk',
            'email' => 'bdv9@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Peter Van Drunen',
            'email' => 'pbv3@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Arie van Luttikhuizen',
            'email' => 'amv55@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Logan VanProyen',
            'email' => 'lv33@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Tyler Vanzanten',
            'email' => 'twv5@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Carson Wiens',
            'email' => 'clw26@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Mark VanderStel',
            'email' => 'mbv26@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Benjamin Braker',
            'email' => 'bcb9@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Daniel Harold',
            'email' => 'deh5@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Andrew Peterson',
            'email' => 'arp25@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        $names = "names.txt";

        //while there are still names to read, place into database and assign emails
        $handle = fopen($names, "r") or die ("Unable to open $names");
        $i = 0;
        while(!eof($handle)) {
            $line = fgets($handle);
            DB::table('users')->insert(
                ['name' => $line,
                'email' => "$i@students.calvin.edu",
                'password' => bcrypt ('students')
            ]);
            $i++;
        }
        fclose($names);
    }
}
