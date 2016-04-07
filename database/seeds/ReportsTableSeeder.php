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
        DB::table('reports')->insert([
            'assignment_id' => '1',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '1',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '1',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '1',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '2',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '2',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '2',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '2',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '3',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '3',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '3',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '3',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '4',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '4',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '4',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '4',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '5',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '5',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '5',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '5',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '6',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '6',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '6',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '6',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '7',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '7',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '7',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '7',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '8',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '8',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '8',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '8',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '9',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '9',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '9',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '9',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '10',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '10',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '10',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '10',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '11',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '11',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '11',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '11',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '12',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '12',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '12',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '12',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '13',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '13',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '13',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '13',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '14',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '14',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '14',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '14',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '15',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '15',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '15',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '15',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '16',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '16',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '16',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '16',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '17',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '17',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '17',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '17',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '18',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '18',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '18',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '18',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '19',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '19',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '19',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '19',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '20',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '20',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '20',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '20',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '21',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '21',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '21',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '21',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '22',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '22',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '22',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '22',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '23',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '23',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '23',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '23',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '24',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '24',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '24',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '24',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '25',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '25',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '25',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '25',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '26',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '26',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '26',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '26',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '27',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '27',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '27',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '27',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '28',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '28',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '28',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '28',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '29',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '29',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '29',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '29',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '30',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '30',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '30',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '30',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '31',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '31',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '31',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '31',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '32',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '32',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '32',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '32',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '33',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '33',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '33',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '33',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '34',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '34',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '34',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '34',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '35',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '35',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '35',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '35',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '36',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '36',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '36',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '36',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '37',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '37',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '37',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '37',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '38',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '38',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '38',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '38',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '39',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '39',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '39',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '39',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '40',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '40',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '40',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '40',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '41',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '41',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '41',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '41',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '42',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '42',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '42',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '42',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '43',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '43',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '43',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '43',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '44',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '44',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '44',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '44',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '45',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '45',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '45',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '45',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '46',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '46',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '46',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '46',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '47',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '47',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '47',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '47',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '48',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '48',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '48',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '48',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '49',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '49',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '49',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '49',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '50',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '50',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '50',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '50',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '51',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '51',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '51',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '51',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '52',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '52',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '52',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '52',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '53',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '53',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '53',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '53',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '54',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '54',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '54',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '54',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '55',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '55',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '55',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '55',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '56',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '56',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '56',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '56',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '57',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '57',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '57',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '57',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '58',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '58',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '58',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '58',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '59',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '59',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '59',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '59',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '60',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '60',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '60',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '60',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '61',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '61',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '61',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '61',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '62',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '62',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '62',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '62',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '63',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '63',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '63',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '63',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '64',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '64',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '64',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '64',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '65',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '65',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '65',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '65',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '66',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '66',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '66',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '66',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '67',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '67',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '67',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '67',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '68',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '68',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '68',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '68',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '69',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '69',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '69',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '69',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '70',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '70',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '70',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '70',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '71',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '71',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '71',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '71',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '72',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '72',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '72',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '72',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '73',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '73',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '73',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '73',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '74',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '74',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '74',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '74',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '75',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '75',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '75',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '75',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '76',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '76',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '76',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '76',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '77',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '77',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '77',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '77',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '78',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '78',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '78',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '78',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '79',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '79',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '79',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '79',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '80',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '80',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '80',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '80',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '81',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '81',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '81',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '81',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '82',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '82',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '82',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '82',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '83',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '83',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '83',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '83',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '84',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '84',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '84',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '84',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '85',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '85',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '85',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '85',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '86',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '86',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '86',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '86',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '87',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '87',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '87',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '87',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '88',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '88',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '88',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '88',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '89',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '89',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '89',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '89',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '90',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '90',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '90',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '90',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '91',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '91',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '91',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '91',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '92',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '92',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '92',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '92',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '93',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '93',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '93',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '93',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '94',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '94',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '94',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '94',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '95',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '95',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '95',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '95',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '96',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '96',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '96',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '96',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '97',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '97',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '97',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '97',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '98',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '98',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '98',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '98',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '99',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '99',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '99',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '99',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '100',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '100',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '100',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '100',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '101',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '101',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '101',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '101',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '102',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '102',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '102',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '102',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '103',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '103',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '103',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '103',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '104',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '104',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '104',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '104',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '105',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '105',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '105',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '105',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '106',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '106',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '106',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '106',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '107',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '107',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '107',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '107',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '108',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '108',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '108',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '108',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '109',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '109',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '109',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '109',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '110',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '110',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '110',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '110',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '111',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '111',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '111',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '111',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '112',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '112',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '112',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '112',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '113',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '113',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '113',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '113',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '114',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '114',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '114',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '114',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '115',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '115',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '115',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '115',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '116',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '116',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '116',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '116',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '117',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '117',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '117',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '117',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '118',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '118',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '118',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '118',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '119',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '119',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '119',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '119',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '120',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '120',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '120',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '120',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '121',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '121',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '121',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '121',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '122',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '122',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '122',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '122',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '123',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '123',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '123',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '123',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '124',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '124',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '124',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '124',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '125',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '125',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '125',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '125',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '126',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '126',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '126',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '126',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '127',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '127',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '127',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '127',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '128',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '128',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '128',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '128',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '129',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '129',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '129',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '129',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '130',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '130',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '130',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '130',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '131',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '131',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '131',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '131',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '132',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '132',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '132',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '132',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '133',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '133',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '133',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '133',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '134',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '134',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '134',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '134',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '135',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '135',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '135',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '135',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '136',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '136',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '136',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '136',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '137',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '137',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '137',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '137',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '138',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '138',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '138',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '138',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '139',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '139',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '139',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '139',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '140',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '140',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '140',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '140',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '141',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '141',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '141',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '141',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '142',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '142',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '142',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '142',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '143',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '143',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '143',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '143',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '144',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '144',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '144',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '144',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '145',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '145',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '145',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '145',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '146',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '146',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '146',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '146',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '147',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '147',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '147',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '147',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '148',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '148',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '148',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '148',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '149',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '149',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '149',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '149',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '150',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '150',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '150',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '150',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '151',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '151',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '151',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '151',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '152',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '152',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '152',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '152',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '153',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '153',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '153',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '153',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '154',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '154',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '154',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '154',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '155',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '155',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '155',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '155',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '156',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '156',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '156',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '156',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '157',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '157',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '157',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '157',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '158',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '158',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '158',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '158',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '159',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '159',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '159',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '159',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '160',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '160',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '160',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '160',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '161',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '161',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '161',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '161',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '162',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '162',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '162',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '162',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '163',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '163',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '163',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '163',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '164',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '164',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '164',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '164',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '165',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '165',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '165',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '165',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '166',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '166',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '166',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '166',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '167',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '167',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '167',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '167',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '168',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '168',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '168',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '168',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '169',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '169',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '169',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '169',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '170',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '170',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '170',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '170',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '171',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '171',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '171',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '171',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '172',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '172',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '172',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '172',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '173',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '173',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '173',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '173',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '174',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '174',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '174',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '174',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '175',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '175',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '175',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '175',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '176',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '176',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '176',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '176',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '177',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '177',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '177',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '177',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '178',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '178',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '178',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '178',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '179',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '179',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '179',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '179',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '180',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '180',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '180',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '180',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '181',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '181',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '181',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '181',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '182',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '182',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '182',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '182',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '183',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '183',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '183',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '183',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '184',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '184',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '184',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '184',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '185',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '185',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '185',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '185',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '186',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '186',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '186',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '186',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '187',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '187',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '187',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '187',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '188',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '188',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '188',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '188',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '189',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '189',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '189',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '189',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '190',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '190',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '190',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '190',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '191',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '191',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '191',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '191',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '192',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '192',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '192',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '192',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '193',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '193',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '193',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '193',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '194',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '194',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '194',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '194',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '195',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '195',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '195',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '195',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '196',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '196',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '196',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '196',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '197',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '197',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '197',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '197',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '198',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '198',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '198',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '198',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '199',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '199',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '199',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '199',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '200',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '200',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '200',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '200',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
        DB::table('reports')->insert([
            'assignment_id' => '201',
            'topic' => 'Programming in C++',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '201',
            'topic' => 'Giving an Effective Presentation (Even with PowerPoint)',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '201',
            'topic' => 'Taxes',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);

        DB::table('reports')->insert([
            'assignment_id' => '201',
            'topic' => 'Lethargy',
            'response' => 'Bacon ipsum dolor amet ham hock swine beef ribs, fatback ham andouille pig tenderloin. Porchetta kielbasa ham rump. Prosciutto jerky andouille ball tip, pork belly short loin alcatra bresaola doner tri-tip shoulder turducken. Tri-tip kielbasa pastrami landjaeger leberkas. Alcatra pork leberkas drumstick cow fatback chuck kielbasa swine tail ball tip ham brisket',
            'plans' => 'Turkey meatloaf hamburger, shankle short ribs swine andouille doner tri-tip sausage chuck pancetta short loin pig frankfurter. Spare ribs leberkas pastrami alcatra tongue fatback.'
        ]);
    }
}
