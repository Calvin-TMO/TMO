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

        DB::table('users')->insert([
            'name' => 'Ruthann Sublett',
            'email' => 'RutSublett@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Liane Valerius',
            'email' => 'LiaValerius@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Elvia Rotondo',
            'email' => 'ElvRotondo@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Lasonya Rudnicki',
            'email' => 'LasRudnicki@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Jerrell Lucchesi',
            'email' => 'JerLucchesi@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Nicolas Collum',
            'email' => 'NicCollum@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Mariela Clore',
            'email' => 'MarClore@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Weldon Pacheco',
            'email' => 'WelPacheco@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Angelyn Yousef',
            'email' => 'AngYousef@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Aubrey Failla',
            'email' => 'AubFailla@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Latonya Siemers',
            'email' => 'LatSiemers@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Charlott Ratledge',
            'email' => 'ChaRatledge@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Olen Brogdon',
            'email' => 'OleBrogdon@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Despina Gaitan',
            'email' => 'DesGaitan@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Huey Hickmon',
            'email' => 'HueHickmon@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Leta Milhorn',
            'email' => 'LetMilhorn@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Chere Vonderheide',
            'email' => 'CheVonderheide@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Suk Percell',
            'email' => 'SukPercell@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Joana Sauceda',
            'email' => 'JoaSauceda@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Claudine Kramer',
            'email' => 'ClaKramer@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Julene Tedder',
            'email' => 'JulTedder@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Ernestine Beaupre',
            'email' => 'ErnBeaupre@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Fermina Beringer',
            'email' => 'FerBeringer@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Denny Bottorff',
            'email' => 'DenBottorff@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Sybil Fulcher',
            'email' => 'SybFulcher@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Hipolito Heald',
            'email' => 'HipHeald@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Darryl Campa',
            'email' => 'DarCampa@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Kirstin Yearta',
            'email' => 'KirYearta@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Dede Dederick',
            'email' => 'DedDederick@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Laverna Horsey',
            'email' => 'LavHorsey@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Roxy Swyers',
            'email' => 'RoxSwyers@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Tanner Speirs',
            'email' => 'TanSpeirs@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Estell Wallingford',
            'email' => 'EstWallingford@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Roland Hilyard',
            'email' => 'RolHilyard@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Jannie Drain',
            'email' => 'JanDrain@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Mechelle Chenier',
            'email' => 'MecChenier@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Fatima Fleagle',
            'email' => 'FatFleagle@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Danika Madera',
            'email' => 'DanMadera@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Bobbie Ames',
            'email' => 'BobAmes@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Virgina Chadburn',
            'email' => 'VirChadburn@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Emma Calvery',
            'email' => 'EmmCalvery@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Melaine Books',
            'email' => 'MelBooks@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Valencia Burdge',
            'email' => 'ValBurdge@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Neal Makris',
            'email' => 'NeaMakris@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Flo Mckamey',
            'email' => 'FloMckamey@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Albertha Junious',
            'email' => 'AlbJunious@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Janine Glade',
            'email' => 'JanGlade@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Estelle Vanloan',
            'email' => 'EstVanloan@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Mckinley Key',
            'email' => 'MckKey@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Therese Mauro',
            'email' => 'TheMauro@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Rebekah Tufts',
            'email' => 'RebTufts@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Lera Colquitt',
            'email' => 'LerColquitt@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Taryn Lasso',
            'email' => 'TarLasso@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Heather Monier',
            'email' => 'HeaMonier@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Booker Schooley',
            'email' => 'BooSchooley@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Seema Stiltner',
            'email' => 'SeeStiltner@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Gwendolyn Hsu',
            'email' => 'GweHsu@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Celia Ary',
            'email' => 'CelAry@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Leland Lipe',
            'email' => 'LelLipe@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Freida Upshur',
            'email' => 'FreUpshur@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Denise Meiners',
            'email' => 'DenMeiners@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Rudy Witzel',
            'email' => 'RudWitzel@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Belkis Lussier',
            'email' => 'BelLussier@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Latina Casterline',
            'email' => 'LatCasterline@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Earlene Lindow',
            'email' => 'EarLindow@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Norma Unrein',
            'email' => 'NorUnrein@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Jenice Angel',
            'email' => 'JenAngel@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Britteny Parm',
            'email' => 'BriParm@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Kenia Everton',
            'email' => 'KenEverton@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Dion Crouch',
            'email' => 'DioCrouch@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Afton Harman',
            'email' => 'AftHarman@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Katina Soper',
            'email' => 'KatSoper@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Annette Rank',
            'email' => 'AnnRank@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Aundrea Bankes',
            'email' => 'AunBankes@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Lessie Webber',
            'email' => 'LesWebber@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Alena Burnley',
            'email' => 'AleBurnley@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Jana Pierre',
            'email' => 'JanPierre@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Kaye Stager',
            'email' => 'KayStager@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Dominque Carrier',
            'email' => 'DomCarrier@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Fransisca Seligman',
            'email' => 'FraSeligman@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Carmelina Troy',
            'email' => 'CarTroy@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Patrick Mcconnaughy',
            'email' => 'PatMcconnaughy@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Beryl Bender',
            'email' => 'BerBender@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Sallie Folger',
            'email' => 'SalFolger@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Gloria Moudy',
            'email' => 'GloMoudy@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Nicolas Coble',
            'email' => 'NicCoble@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Bessie Bergfeld',
            'email' => 'BesBergfeld@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Amanda Panter',
            'email' => 'AmaPanter@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Laquita Spencer',
            'email' => 'LaqSpencer@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Fidelia Casagrande',
            'email' => 'FidCasagrande@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Darline Coberly',
            'email' => 'DarCoberly@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Margrett Truax',
            'email' => 'MarTruax@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Daniella Peppard',
            'email' => 'DanPeppard@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Louvenia Estey',
            'email' => 'LouEstey@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Delmy Hornick',
            'email' => 'DelHornick@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Margeret Rubino',
            'email' => 'MarRubino@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Rosamond Tejera',
            'email' => 'RosTejera@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Kiyoko Brezinski',
            'email' => 'KiyBrezinski@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Geoffrey Sankey',
            'email' => 'GeoSankey@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Elyse Tieman',
            'email' => 'ElyTieman@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Fay Jakubowski',
            'email' => 'FayJakubowski@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Joline Clontz',
            'email' => 'JolClontz@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Warner Fadden',
            'email' => 'WarFadden@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Julio Sher',
            'email' => 'JulSher@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Ivonne Dillenbeck',
            'email' => 'IvoDillenbeck@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Sanora Devos',
            'email' => 'SanDevos@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Diego Herod',
            'email' => 'DieHerod@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Madison Radigan',
            'email' => 'MadRadigan@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Skye Gantz',
            'email' => 'SkyGantz@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Emerald Studer',
            'email' => 'EmeStuder@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Domingo Philpot',
            'email' => 'DomPhilpot@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Farah Stender',
            'email' => 'FarStender@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Elvin Carlo',
            'email' => 'ElvCarlo@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Marcelle Burnley',
            'email' => 'MarBurnley@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Sari Seabrooks',
            'email' => 'SarSeabrooks@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Maryjo Welton',
            'email' => 'MarWelton@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Christin Allmond',
            'email' => 'ChrAllmond@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Sonny Grahm',
            'email' => 'SonGrahm@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Aliza Behringer',
            'email' => 'AliBehringer@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Shanika Keatts',
            'email' => 'ShaKeatts@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Jannette Lightfoot',
            'email' => 'JanLightfoot@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Mohammed Gavin',
            'email' => 'MohGavin@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Sherise Bowersox',
            'email' => 'SheBowersox@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Kiana Bockman',
            'email' => 'KiaBockman@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Eun Stradford',
            'email' => 'EunStradford@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Josephine Miedema',
            'email' => 'JosMiedema@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Mary Sutter',
            'email' => 'MarSutter@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Ivette Merchant',
            'email' => 'IveMerchant@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Carolin Koepsell',
            'email' => 'CarKoepsell@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Ruthann Manion',
            'email' => 'RutManion@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Alonzo Priebe',
            'email' => 'AloPriebe@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Sung Wagstaff',
            'email' => 'SunWagstaff@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Cleotilde Roca',
            'email' => 'CleRoca@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Aura Souders',
            'email' => 'AurSouders@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Harriette Mcgurk',
            'email' => 'HarMcgurk@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Kimberlie Venema',
            'email' => 'KimVenema@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Fredda Sterba',
            'email' => 'FreSterba@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Amos Racanelli',
            'email' => 'AmoRacanelli@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Kacey Marie',
            'email' => 'KacMarie@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Ferdinand Paolucci',
            'email' => 'FerPaolucci@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Glady Saeed',
            'email' => 'GlaSaeed@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Beatrice Warnke',
            'email' => 'BeaWarnke@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Ghislaine Kisling',
            'email' => 'GhiKisling@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Mitsuko Mcmillen',
            'email' => 'MitMcmillen@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Clifton Horsman',
            'email' => 'CliHorsman@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Donita Dilks',
            'email' => 'DonDilks@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Jo Fiorillo',
            'email' => 'Jo Fiorillo@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Loura Yagi',
            'email' => 'LouYagi@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Shawanda Ensign',
            'email' => 'ShaEnsign@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

        DB::table('users')->insert([
            'name' => 'Keva Litten',
            'email' => 'KevLitten@students.calvin.edu',
            'password' => bcrypt('students')
        ]);

    }
}
