<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use DB;

use App\User as User;
use App\Role as Role;
use App\Course as Course;

class EvalController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('admin');
    }

    /**
     * Display a list of all evals.
     *
     * @return Response
     */
    public function all_evals()
    {
        $data = array(
            'evals' => UserController::getTutors()
            );
        return view('evals', $data);
    }

    /**
     * Display the specified eval.
     *
     * @param  int  $user_id
     * @return Response
     */
    public function view_eval($user_id)
    {
        $reports = DB::table('reports')
            ->join('assignments', 'reports.assignment_id', '=', 'assignments.id')
            ->where('assignments.tutor_id', '=', $user_id)
            ->select('topic', 'response', 'plans', 'student_plans', 'comments')
            ->get();

        $wordcount = 0;
        foreach ($reports as $report) {
            $wordcount += str_word_count($report->topic);
            $wordcount += str_word_count($report->response);
            $wordcount += str_word_count($report->plans);
            $wordcount += str_word_count($report->student_plans);
            $wordcount += str_word_count($report->comments);
        }
        $wordcount = $wordcount / count($reports);

        $data = array(
            'user' => User::find($user_id),
            'report_count' => DB::table('reports')
                ->join('assignments', 'reports.assignment_id', '=', 'assignments.id')
                ->where('assignments.tutor_id', '=', $user_id)
                ->count(),
            'assignment_count' => DB::table('assignments')
                ->where('assignments.tutor_id', '=', $user_id)
                ->count(),
            #Average time spent
            'average_session' => (DB::table('reports')
                ->join('assignments', 'reports.assignment_id', '=', 'assignments.id')
                ->where('assignments.tutor_id', '=', $user_id)
                ->avg('session_end') -
                DB::table('reports')
                ->join('assignments', 'reports.assignment_id', '=', 'assignments.id')
                ->where('assignments.tutor_id', '=', $user_id)
                ->avg('session_start')) / 100,
            #Average report length in chars
            'average_report' => $wordcount
        );

        return view('eval', $data);
    }
}
