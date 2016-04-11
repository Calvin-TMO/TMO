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
        $topics = ['Programming in C++', 'Giving an Effective Presentation (Even with PowerPoint)', 'Taxes', 'Lethargy', 'Coping With The Dehumanizing Affects of the Educational System'];
        $date = DateTime::createFromFormat('Y-m-d H:i:s', "2015-1-1 08:00:00");
        for ($i = 1; $i <= 201; $i++) {
            $date->add(new DateInterval('P1D'));
            for ($j = 1; $j <= 4; $j++) {
                $here_date = $date;
                $here_date->add(new DateInterval('P1D'));
                $end_time = $here_date;
                $end_time->add(new DateInterval('PT1H'));
                DB::table('reports')->insert([
                    'session_date' => $here_date,
                    'session_start' => $here_date,
                    'session_end' => $end_time,
                    'assignment_id' => $i,
                    'topic' => $topics[$j],
                    'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
                    'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
                ]);
            }
        }
    }
}
