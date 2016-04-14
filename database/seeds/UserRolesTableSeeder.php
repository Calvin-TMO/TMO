<?php

use App\User AS User;
use App\Role AS Role;
use Illuminate\Database\Seeder;

class UserRolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('name', '=', 'tmo_admin')->first();
        $role = Role::where('name', '=', 'admin')->first();
        DB::table('user_roles')->insert(
            ['user_id' => $user->id,
             'role_id' => $role->id]
        );

        //read the names of professors from local professors.txt file
        $professors = "professors.txt";
        $tutors = "tutors.txt";

        //while there are still professors to read from the file, assign
        //them to professorship
        $handle = fopen($professors, "r") or die ("Unable to open professors.txt!");
        while(!eof($handle)) {
            $line = fgets($handle);
            $user = User::where('name', '=', $line)->first();
            $role = Role::where('name', '=', 'professor')->first();
            DB::table('user_roles')->insert(
                ['user_id' => \$user->id,
                'role_id' => \$role->id]
            );
        }
        fclose($handle);
        
        //do the same for tutors
        $handle = fopen($tutors, "r") or die ("Unable to open tutors.txt!");
        while(!eof($handle)) {
            $line = fgets($handle);
            $user = User::where('name', '=', $line)->first();
            $role = Role::where('name', '=', 'tutor')->first();
            DB::table('user_roles')->insert(
                ['user_id' => \$user->id,
                'role_id' => \$role->id]
            );
        }
        fclose($handle);
    }
}
