<?php

use Illuminate\Database\Seeder;
use \DateTime;

class ReportsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $topics = ['Programming in C++', 'Giving an Effective Presentation (Even with PowerPoint)', 'Taxes', 'Lethargy'];
        $date = DateTime::createFromFormat('Y-m-d g:ia', "2016-1-1 08:00am");
        for ($i = 1; $i <= 201; $i++) {
            $date = strtotime("+1 day", $date);
            for ($j = 1; $j <= 4; $j++) {
                $here_date = strtotime("+" . j . " weeks", $date);
                DB::table('reports')->insert([
                    'session_date' => $here_date,
                    'session_start' => $here_date,
                    'session_end' => strtotime("+1 hour", $here_date),
                    'assignment_id' => '$i',
                    'topic' => $topics[j],
                    'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
                    'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
                ]);
            }
        }
    }
}
