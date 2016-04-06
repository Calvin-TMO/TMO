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

        $user = User::where('name', '=', 'Mark Vander Stel')->first();
        $role = Role::where('name', '=', 'tutor')->first();
        DB::table('user_roles')->insert(
            ['user_id' => $user->id,
            'role_id' => $role->id]
        );

        $user = User::where('name', '=', 'Carson Wiens')->first();
        $role = Role::where('name', '=', 'tutor')->first();
        DB::table('user_roles')->insert(
            ['user_id' => $user->id,
            'role_id' => $role->id]
        );

        $user = User::where('name', '=', 'Ruthann Sublett')->first();
        $role = Role::where('name', '=', 'professor')->first();
        DB::table('user_roles')->insert(
            ['user_id' => ->id,
            'role_id' => ->id]
        );


        $user = User::where('name', '=', 'Liane Valerius')->first();
        $role = Role::where('name', '=', 'professor')->first();
        DB::table('user_roles')->insert(
            ['user_id' => ->id,
            'role_id' => ->id]
        );


        $user = User::where('name', '=', 'Elvia Rotondo')->first();
        $role = Role::where('name', '=', 'professor')->first();
        DB::table('user_roles')->insert(
            ['user_id' => ->id,
            'role_id' => ->id]
        );


        $user = User::where('name', '=', 'Lasonya Rudnicki')->first();
        $role = Role::where('name', '=', 'professor')->first();
        DB::table('user_roles')->insert(
            ['user_id' => ->id,
            'role_id' => ->id]
        );


        $user = User::where('name', '=', 'Jerrell Lucchesi')->first();
        $role = Role::where('name', '=', 'professor')->first();
        DB::table('user_roles')->insert(
            ['user_id' => ->id,
            'role_id' => ->id]
        );


        $user = User::where('name', '=', 'Nicolas Collum')->first();
        $role = Role::where('name', '=', 'professor')->first();
        DB::table('user_roles')->insert(
            ['user_id' => ->id,
            'role_id' => ->id]
        );


        $user = User::where('name', '=', 'Mariela Clore')->first();
        $role = Role::where('name', '=', 'professor')->first();
        DB::table('user_roles')->insert(
            ['user_id' => ->id,
            'role_id' => ->id]
        );


        $user = User::where('name', '=', 'Weldon Pacheco')->first();
        $role = Role::where('name', '=', 'professor')->first();
        DB::table('user_roles')->insert(
            ['user_id' => ->id,
            'role_id' => ->id]
        );


        $user = User::where('name', '=', 'Angelyn Yousef')->first();
        $role = Role::where('name', '=', 'professor')->first();
        DB::table('user_roles')->insert(
            ['user_id' => ->id,
            'role_id' => ->id]
        );


        $user = User::where('name', '=', 'Aubrey Failla')->first();
        $role = Role::where('name', '=', 'professor')->first();
        DB::table('user_roles')->insert(
            ['user_id' => ->id,
            'role_id' => ->id]
        );


        $user = User::where('name', '=', 'Latonya Siemers')->first();
        $role = Role::where('name', '=', 'professor')->first();
        DB::table('user_roles')->insert(
            ['user_id' => ->id,
            'role_id' => ->id]
        );


        $user = User::where('name', '=', 'Charlott Ratledge')->first();
        $role = Role::where('name', '=', 'professor')->first();
        DB::table('user_roles')->insert(
            ['user_id' => ->id,
            'role_id' => ->id]
        );


        $user = User::where('name', '=', 'Olen Brogdon')->first();
        $role = Role::where('name', '=', 'professor')->first();
        DB::table('user_roles')->insert(
            ['user_id' => ->id,
            'role_id' => ->id]
        );


        $user = User::where('name', '=', 'Despina Gaitan')->first();
        $role = Role::where('name', '=', 'professor')->first();
        DB::table('user_roles')->insert(
            ['user_id' => ->id,
            'role_id' => ->id]
        );


        $user = User::where('name', '=', 'Huey Hickmon')->first();
        $role = Role::where('name', '=', 'professor')->first();
        DB::table('user_roles')->insert(
            ['user_id' => ->id,
            'role_id' => ->id]
        );


        $user = User::where('name', '=', 'Leta Milhorn')->first();
        $role = Role::where('name', '=', 'professor')->first();
        DB::table('user_roles')->insert(
            ['user_id' => ->id,
            'role_id' => ->id]
        );


        $user = User::where('name', '=', 'Chere Vonderheide')->first();
        $role = Role::where('name', '=', 'professor')->first();
        DB::table('user_roles')->insert(
            ['user_id' => ->id,
            'role_id' => ->id]
        );


        $user = User::where('name', '=', 'Suk Percell')->first();
        $role = Role::where('name', '=', 'professor')->first();
        DB::table('user_roles')->insert(
            ['user_id' => ->id,
            'role_id' => ->id]
        );


        $user = User::where('name', '=', 'Joana Sauceda')->first();
        $role = Role::where('name', '=', 'professor')->first();
        DB::table('user_roles')->insert(
            ['user_id' => ->id,
            'role_id' => ->id]
        );


        $user = User::where('name', '=', 'Claudine Kramer')->first();
        $role = Role::where('name', '=', 'professor')->first();
        DB::table('user_roles')->insert(
            ['user_id' => ->id,
            'role_id' => ->id]
        );


        $user = User::where('name', '=', 'Julene Tedder')->first();
        $role = Role::where('name', '=', 'professor')->first();
        DB::table('user_roles')->insert(
            ['user_id' => ->id,
            'role_id' => ->id]
        );


        $user = User::where('name', '=', 'Ernestine Beaupre')->first();
        $role = Role::where('name', '=', 'professor')->first();
        DB::table('user_roles')->insert(
            ['user_id' => ->id,
            'role_id' => ->id]
        );


        $user = User::where('name', '=', 'Fermina Beringer')->first();
        $role = Role::where('name', '=', 'professor')->first();
        DB::table('user_roles')->insert(
            ['user_id' => ->id,
            'role_id' => ->id]
        );


        $user = User::where('name', '=', 'Denny Bottorff')->first();
        $role = Role::where('name', '=', 'professor')->first();
        DB::table('user_roles')->insert(
            ['user_id' => ->id,
            'role_id' => ->id]
        );

        $user = User::where('name', '=', 'Sybil Fulcher')->first();
        $role = Role::where('name', '=', 'tutor')->first();
        DB::table('user_roles')->insert(
            ['user_id' => ->id,
            'role_id' => ->id]
        );


        $user = User::where('name', '=', 'Hipolito Heald')->first();
        $role = Role::where('name', '=', 'tutor')->first();
        DB::table('user_roles')->insert(
            ['user_id' => ->id,
            'role_id' => ->id]
        );


        $user = User::where('name', '=', 'Darryl Campa')->first();
        $role = Role::where('name', '=', 'tutor')->first();
        DB::table('user_roles')->insert(
            ['user_id' => ->id,
            'role_id' => ->id]
        );


        $user = User::where('name', '=', 'Kirstin Yearta')->first();
        $role = Role::where('name', '=', 'tutor')->first();
        DB::table('user_roles')->insert(
            ['user_id' => ->id,
            'role_id' => ->id]
        );


        $user = User::where('name', '=', 'Dede Dederick')->first();
        $role = Role::where('name', '=', 'tutor')->first();
        DB::table('user_roles')->insert(
            ['user_id' => ->id,
            'role_id' => ->id]
        );


        $user = User::where('name', '=', 'Laverna Horsey')->first();
        $role = Role::where('name', '=', 'tutor')->first();
        DB::table('user_roles')->insert(
            ['user_id' => ->id,
            'role_id' => ->id]
        );


        $user = User::where('name', '=', 'Roxy Swyers')->first();
        $role = Role::where('name', '=', 'tutor')->first();
        DB::table('user_roles')->insert(
            ['user_id' => ->id,
            'role_id' => ->id]
        );


        $user = User::where('name', '=', 'Tanner Speirs')->first();
        $role = Role::where('name', '=', 'tutor')->first();
        DB::table('user_roles')->insert(
            ['user_id' => ->id,
            'role_id' => ->id]
        );


        $user = User::where('name', '=', 'Estell Wallingford')->first();
        $role = Role::where('name', '=', 'tutor')->first();
        DB::table('user_roles')->insert(
            ['user_id' => ->id,
            'role_id' => ->id]
        );


        $user = User::where('name', '=', 'Roland Hilyard')->first();
        $role = Role::where('name', '=', 'tutor')->first();
        DB::table('user_roles')->insert(
            ['user_id' => ->id,
            'role_id' => ->id]
        );


        $user = User::where('name', '=', 'Jannie Drain')->first();
        $role = Role::where('name', '=', 'tutor')->first();
        DB::table('user_roles')->insert(
            ['user_id' => ->id,
            'role_id' => ->id]
        );


        $user = User::where('name', '=', 'Mechelle Chenier')->first();
        $role = Role::where('name', '=', 'tutor')->first();
        DB::table('user_roles')->insert(
            ['user_id' => ->id,
            'role_id' => ->id]
        );


        $user = User::where('name', '=', 'Fatima Fleagle')->first();
        $role = Role::where('name', '=', 'tutor')->first();
        DB::table('user_roles')->insert(
            ['user_id' => ->id,
            'role_id' => ->id]
        );


        $user = User::where('name', '=', 'Danika Madera')->first();
        $role = Role::where('name', '=', 'tutor')->first();
        DB::table('user_roles')->insert(
            ['user_id' => ->id,
            'role_id' => ->id]
        );


        $user = User::where('name', '=', 'Bobbie Ames')->first();
        $role = Role::where('name', '=', 'tutor')->first();
        DB::table('user_roles')->insert(
            ['user_id' => ->id,
            'role_id' => ->id]
        );


        $user = User::where('name', '=', 'Virgina Chadburn')->first();
        $role = Role::where('name', '=', 'tutor')->first();
        DB::table('user_roles')->insert(
            ['user_id' => ->id,
            'role_id' => ->id]
        );


        $user = User::where('name', '=', 'Emma Calvery')->first();
        $role = Role::where('name', '=', 'tutor')->first();
        DB::table('user_roles')->insert(
            ['user_id' => ->id,
            'role_id' => ->id]
        );


        $user = User::where('name', '=', 'Melaine Books')->first();
        $role = Role::where('name', '=', 'tutor')->first();
        DB::table('user_roles')->insert(
            ['user_id' => ->id,
            'role_id' => ->id]
        );


        $user = User::where('name', '=', 'Valencia Burdge')->first();
        $role = Role::where('name', '=', 'tutor')->first();
        DB::table('user_roles')->insert(
            ['user_id' => ->id,
            'role_id' => ->id]
        );


        $user = User::where('name', '=', 'Neal Makris')->first();
        $role = Role::where('name', '=', 'tutor')->first();
        DB::table('user_roles')->insert(
            ['user_id' => ->id,
            'role_id' => ->id]
        );


        $user = User::where('name', '=', 'Flo Mckamey')->first();
        $role = Role::where('name', '=', 'tutor')->first();
        DB::table('user_roles')->insert(
            ['user_id' => ->id,
            'role_id' => ->id]
        );


        $user = User::where('name', '=', 'Albertha Junious')->first();
        $role = Role::where('name', '=', 'tutor')->first();
        DB::table('user_roles')->insert(
            ['user_id' => ->id,
            'role_id' => ->id]
        );


        $user = User::where('name', '=', 'Janine Glade')->first();
        $role = Role::where('name', '=', 'tutor')->first();
        DB::table('user_roles')->insert(
            ['user_id' => ->id,
            'role_id' => ->id]
        );


        $user = User::where('name', '=', 'Estelle Vanloan')->first();
        $role = Role::where('name', '=', 'tutor')->first();
        DB::table('user_roles')->insert(
            ['user_id' => ->id,
            'role_id' => ->id]
        );


        $user = User::where('name', '=', 'Mckinley Key')->first();
        $role = Role::where('name', '=', 'tutor')->first();
        DB::table('user_roles')->insert(
            ['user_id' => ->id,
            'role_id' => ->id]
        );


        $user = User::where('name', '=', 'Therese Mauro')->first();
        $role = Role::where('name', '=', 'tutor')->first();
        DB::table('user_roles')->insert(
            ['user_id' => ->id,
            'role_id' => ->id]
        );


        $user = User::where('name', '=', 'Rebekah Tufts')->first();
        $role = Role::where('name', '=', 'tutor')->first();
        DB::table('user_roles')->insert(
            ['user_id' => ->id,
            'role_id' => ->id]
        );


        $user = User::where('name', '=', 'Lera Colquitt')->first();
        $role = Role::where('name', '=', 'tutor')->first();
        DB::table('user_roles')->insert(
            ['user_id' => ->id,
            'role_id' => ->id]
        );


        $user = User::where('name', '=', 'Taryn Lasso')->first();
        $role = Role::where('name', '=', 'tutor')->first();
        DB::table('user_roles')->insert(
            ['user_id' => ->id,
            'role_id' => ->id]
        );


        $user = User::where('name', '=', 'Heather Monier')->first();
        $role = Role::where('name', '=', 'tutor')->first();
        DB::table('user_roles')->insert(
            ['user_id' => ->id,
            'role_id' => ->id]
        );


        $user = User::where('name', '=', 'Booker Schooley')->first();
        $role = Role::where('name', '=', 'tutor')->first();
        DB::table('user_roles')->insert(
            ['user_id' => ->id,
            'role_id' => ->id]
        );


        $user = User::where('name', '=', 'Seema Stiltner')->first();
        $role = Role::where('name', '=', 'tutor')->first();
        DB::table('user_roles')->insert(
            ['user_id' => ->id,
            'role_id' => ->id]
        );


        $user = User::where('name', '=', 'Gwendolyn Hsu')->first();
        $role = Role::where('name', '=', 'tutor')->first();
        DB::table('user_roles')->insert(
            ['user_id' => ->id,
            'role_id' => ->id]
        );


        $user = User::where('name', '=', 'Celia Ary')->first();
        $role = Role::where('name', '=', 'tutor')->first();
        DB::table('user_roles')->insert(
            ['user_id' => ->id,
            'role_id' => ->id]
        );


        $user = User::where('name', '=', 'Leland Lipe')->first();
        $role = Role::where('name', '=', 'tutor')->first();
        DB::table('user_roles')->insert(
            ['user_id' => ->id,
            'role_id' => ->id]
        );


        $user = User::where('name', '=', 'Freida Upshur')->first();
        $role = Role::where('name', '=', 'tutor')->first();
        DB::table('user_roles')->insert(
            ['user_id' => ->id,
            'role_id' => ->id]
        );


        $user = User::where('name', '=', 'Denise Meiners')->first();
        $role = Role::where('name', '=', 'tutor')->first();
        DB::table('user_roles')->insert(
            ['user_id' => ->id,
            'role_id' => ->id]
        );


        $user = User::where('name', '=', 'Rudy Witzel')->first();
        $role = Role::where('name', '=', 'tutor')->first();
        DB::table('user_roles')->insert(
            ['user_id' => ->id,
            'role_id' => ->id]
        );


        $user = User::where('name', '=', 'Belkis Lussier')->first();
        $role = Role::where('name', '=', 'tutor')->first();
        DB::table('user_roles')->insert(
            ['user_id' => ->id,
            'role_id' => ->id]
        );


        $user = User::where('name', '=', 'Latina Casterline')->first();
        $role = Role::where('name', '=', 'tutor')->first();
        DB::table('user_roles')->insert(
            ['user_id' => ->id,
            'role_id' => ->id]
        );


        $user = User::where('name', '=', 'Earlene Lindow')->first();
        $role = Role::where('name', '=', 'tutor')->first();
        DB::table('user_roles')->insert(
            ['user_id' => ->id,
            'role_id' => ->id]
        );


        $user = User::where('name', '=', 'Norma Unrein')->first();
        $role = Role::where('name', '=', 'tutor')->first();
        DB::table('user_roles')->insert(
            ['user_id' => ->id,
            'role_id' => ->id]
        );


        $user = User::where('name', '=', 'Jenice Angel')->first();
        $role = Role::where('name', '=', 'tutor')->first();
        DB::table('user_roles')->insert(
            ['user_id' => ->id,
            'role_id' => ->id]
        );


        $user = User::where('name', '=', 'Britteny Parm')->first();
        $role = Role::where('name', '=', 'tutor')->first();
        DB::table('user_roles')->insert(
            ['user_id' => ->id,
            'role_id' => ->id]
        );


        $user = User::where('name', '=', 'Kenia Everton')->first();
        $role = Role::where('name', '=', 'tutor')->first();
        DB::table('user_roles')->insert(
            ['user_id' => ->id,
            'role_id' => ->id]
        );


        $user = User::where('name', '=', 'Dion Crouch')->first();
        $role = Role::where('name', '=', 'tutor')->first();
        DB::table('user_roles')->insert(
            ['user_id' => ->id,
            'role_id' => ->id]
        );


        $user = User::where('name', '=', 'Afton Harman')->first();
        $role = Role::where('name', '=', 'tutor')->first();
        DB::table('user_roles')->insert(
            ['user_id' => ->id,
            'role_id' => ->id]
        );


        $user = User::where('name', '=', 'Katina Soper')->first();
        $role = Role::where('name', '=', 'tutor')->first();
        DB::table('user_roles')->insert(
            ['user_id' => ->id,
            'role_id' => ->id]
        );


        $user = User::where('name', '=', 'Annette Rank')->first();
        $role = Role::where('name', '=', 'tutor')->first();
        DB::table('user_roles')->insert(
            ['user_id' => ->id,
            'role_id' => ->id]
        );


        $user = User::where('name', '=', 'Aundrea Bankes')->first();
        $role = Role::where('name', '=', 'tutor')->first();
        DB::table('user_roles')->insert(
            ['user_id' => ->id,
            'role_id' => ->id]
        );

    }
}
