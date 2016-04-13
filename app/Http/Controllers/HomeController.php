<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->hasRole('admin'))
        {
            $reports = DB::table('reports')
                ->join('assignments', 'reports.assignment_id', '=', 'assignments.id')
                ->join('courses', 'assignments.course_id', '=', 'courses.id')
                ->join('users', 'assignments.student_id', '=', 'users.id')
                ->join('users AS tutors', 'assignments.tutor_id', '=', 'tutors.id')
                ->select('reports.id', 'reports.session_date', 'courses.department', 'courses.number', 'users.name AS student', 'tutors.name AS tutor', 'reports.topic')
                ->orderBy('session_date', 'desc')
                ->orderBy('student', 'asc')
                ->take(5)
                ->get();

            $comments = DB::table('comments')
                ->join('reports', 'comments.report_id', '=', 'reports.id')
                ->join('users', 'comments.author_id', '=', 'users.id')
                ->select('reports.id', 'comments.posted_date', 'users.name', 'reports.topic', 'comments.comment_text')
                ->orderBy('posted_date', 'desc')
                ->orderBy('name', 'asc')
                ->take(5)
                ->get();
        }
        else
        {
            $reports = DB::table('reports')
                ->join('assignments', 'reports.assignment_id', '=', 'assignments.id')
                ->join('courses', 'assignments.course_id', '=', 'courses.id')
                ->join('users', 'assignments.student_id', '=', 'users.id')
                ->join('users AS tutors', 'assignments.tutor_id', '=', 'tutors.id')
                ->where('assignments.tutor_id', '=', Auth::user()->id)
                ->orWhere('assignments.professor_id', '=', Auth::user()->id)
                ->select('reports.id', 'reports.session_date', 'courses.department', 'courses.number', 'users.name AS student', 'tutors.name AS tutor', 'reports.topic')
                ->orderBy('session_date', 'desc')
                ->orderBy('student', 'asc')
                ->take(5)
                ->get();

            $comments = DB::table('comments')
                ->join('reports', 'comments.report_id', '=', 'reports.id')
                ->join('users', 'comments.author_id', '=', 'users.id')
                ->join('assignments', 'reports.assignment_id', '=', 'assignments.id')
                ->where('assignments.tutor_id', '=', Auth::user()->id)
                ->orWhere('assignments.professor_id', '=', Auth::user()->id)
                ->select('reports.id', 'comments.posted_date', 'users.name', 'reports.topic', 'comments.comment_text')
                ->orderBy('posted_date', 'desc')
                ->orderBy('name', 'asc')
                ->take(5)
                ->get();
        }

        $data = array(
            'reports' => $reports,
            'comments' => $comments
            );

        return view('home', $data);
    }
}
