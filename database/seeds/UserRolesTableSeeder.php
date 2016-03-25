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

        $user = User::where('name', '=', 'tutor1')->first();
        $role = Role::where('name', '=', 'tutor')->first();
        DB::table('user_roles')->insert(
            ['user_id' => $user->id,
             'role_id' => $role->id]
        );

        $user = User::where('name', '=', 'tutor2')->first();
        $role = Role::where('name', '=', 'tutor')->first();
        DB::table('user_roles')->insert(
            ['user_id' => $user->id,
             'role_id' => $role->id]
        );

        $user = User::where('name', '=', 'professor1')->first();
        $role = Role::where('name', '=', 'professor')->first();
        DB::table('user_roles')->insert(
            ['user_id' => $user->id,
             'role_id' => $role->id]
        );

        $user = User::where('name', '=', 'professor2')->first();
        $role = Role::where('name', '=', 'professor')->first();
        DB::table('user_roles')->insert(
            ['user_id' => $user->id,
             'role_id' => $role->id]
        );

        $user = User::where('name', '=', 'Keith VanderLinden')->first();
        $role = Role::where('name', '=', 'professor')->first();
        DB::table('user_roles')->insert(
            ['user_id' => $user->id,
            'role_id' => $role->id]
        );


        $user = User::where('name', '=', 'Joel Adams')->first();
        $role = Role::where('name', '=', 'professor')->first();
        DB::table('user_roles')->insert(
            ['user_id' => $user->id,
            'role_id' => $role->id]
        );


        $user = User::where('name', '=', 'Patrick Bailey')->first();
        $role = Role::where('name', '=', 'professor')->first();
        DB::table('user_roles')->insert(
            ['user_id' => $user->id,
            'role_id' => $role->id]
        );


        $user = User::where('name', '=', 'Serita Nelesen')->first();
        $role = Role::where('name', '=', 'professor')->first();
        DB::table('user_roles')->insert(
            ['user_id' => $user->id,
            'role_id' => $role->id]
        );


        $user = User::where('name', '=', 'Victor Norman')->first();
        $role = Role::where('name', '=', 'professor')->first();
        DB::table('user_roles')->insert(
            ['user_id' => $user->id,
            'role_id' => $role->id]
        );


        $user = User::where('name', '=', 'Harry Plantinga')->first();
        $role = Role::where('name', '=', 'professor')->first();
        DB::table('user_roles')->insert(
            ['user_id' => $user->id,
            'role_id' => $role->id]
        );

        $user = User::where('name', '=', 'Benjamin Braker')->first();
        $role = Role::where('name', '=', 'tutor')->first();
        DB::table('user_roles')->insert(
            ['user_id' => $user->id,
            'role_id' => $role->id]
        );
    }
}
