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
    }
}
