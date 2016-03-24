<?php

namespace App\Http\Controllers;

use Carbon;
use App\Report as Report;
use App\Comment as Comment;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class ReportController extends Controller
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
        $user = Auth::user();
        $reports = [];
        if ($user->hasRole('admin')) {
            $reports = Report::all();
        }
        else if ($user->hasRole('tutor')) {
            foreach ($user->tutor_assignments as $assignment) {
                foreach ($assignment->reports as $report) {
                    array_push($reports, $report);
                }
            }
        }
        else if ($user->hasRole('professor')) {
            foreach ($user->professor_assignments as $assignment) {
                foreach ($assignment->reports as $report) {
                    array_push($reports, $report);
                }
            }
        }
        $data = array(
            'reports' => $reports
            );
        return view('reports', $data);
    }
    
    /**
     * Show the form for creating a new report.
     *
     * @return Response
     */
    public function create($assignment_id)
    {
        $data = array(
            'assignment_id' => $assignment_id
            );
        return view('report_add', $data);
    }

    /**
     * Store a newly created report in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request, $assignment_id)
    {
        $report = new Report;
        $report->assignment_id = $assignment_id;
        $report->submit_date = $request->submit_date;
        $report->session_start = $request->session_start;
        $report->session_end = $request->session_end;
        $report->topic = $request->topic;
        $report->response = $request->response;
        $report->plans = $request->plans;
        $report->student_plans = $request->student_plans;
        $report->comments = $request->comments;
        $report->save();
        return redirect('/report/' . $report->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $user = Auth::user();
        $report = Report::find($id);
        $assignment = $report->assignment;
        if ($user->hasRole('admin')
            || ($user->hasRole('tutor') && $user->id == $assignment->tutor_id)
            || ($user->hasRole('professor') && $user->id == $assignment->professor_id))
        {
            $data = array(
                'report' => Report::find($id)
                );
            return view('report', $data);
        }
        return redirect('/reports');
    }

    /**
     * Show the form for editing the specified user.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {

        $user = Auth::user();
        $report = Report::find($id);
        $assignment = $report->assignment;
        if ($user->hasRole('admin')
            || ($user->hasRole('tutor') && $user->id == $assignment->tutor_id)
            || ($user->hasRole('professor') && $user->id == $assignment->professor_id))
        {
            $data = array(
                'report' => Report::find($id)
                );
            return view('report_edit', $data);
        }
        return redirect('/reports');
    }

    /**
     * Update the specified user in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $report = Report::find($id);
        $report->submit_date = $request->submit_date;
        $report->session_start = $request->session_start;
        $report->session_end = $request->session_end;
        $report->topic = $request->topic;
        $report->response = $request->response;
        $report->plans = $request->plans;
        $report->student_plans = $request->student_plans;
        $report->comments = $request->comments;
        $report->save();
        return redirect('/report/' . $id);
    }

    /**
     * Create a comment for the report with the given id for the current user and current time.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function addComment(Request $request, $id) {
        if ($request->comment_text != '') {
            $comment = new Comment;
            $comment->report_id = $id;
            $comment->author_id = Auth::user()->id;
            $comment->posted_date = Carbon\Carbon::now();
            $comment->comment_text = $request->comment_text;
            $comment->save();
        }

        return redirect('/report/' . $id);
    }

    /**
     * Remove the specified comment from storage and redirect to the specified report.
     *
     * @param  int  $report_id
     * @param  int  $comment_id
     * @return Response
     */
    public function removeComment($report_id, $comment_id) {
        Comment::find($comment_id)->delete();
        return redirect('/report/'. $report_id);
    }
}
