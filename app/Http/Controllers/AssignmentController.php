<?php

namespace App\Http\Controllers;

use App\Assignment as Assignment;
use App\Http\Requests;
use Illuminate\Http\Request;
use DB;

class AssignmentController extends Controller
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
        $data = array(
            'assignments' => Assignment::all()
            );
        return view('assignments', $data);
        //$assignments = Assignment::table('assignments')->get();
        //return view('assignments.index', ['assignments' => $assignments]);
    }
}
