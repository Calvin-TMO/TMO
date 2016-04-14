<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests;
use Redirect;
use DateTime;
use Mail;

use App\Assignment as Assignment;
use App\Report as Report;
use App\Comment as Comment;

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
     * Displya a list of assignments.
     *
     * @return Response
     */

    public function all_reports()
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
     * Display a form for creating a new report.
     *
     * @param  int  $assignment_id (default: 0)
     * @return Response
     */
    public function new_report($assignment_id = 0)
    {
        $user = Auth::user();
        if (!$user->hasRole('admin') && !$user->hasRole('tutor'))
        {
            return view('access_denied');
        }

        $assignments = [];
        if ($user->hasRole('admin'))
        {
            $assignments = Assignment::all();
        }
        else if ($user->hasRole('tutor'))
        {
            $assignments = $user->tutor_assignments;
        }

        $data = array(
            'assignments' => $assignments,
            'assignment_id' => $assignment_id
            );
        return view('report_add', $data);
    }

    /**
     * Display the specified report.
     *
     * @param  int  $report_id
     * @return Response
     */
    public function view_report($report_id)
    {
        $user = Auth::user();
        $report = Report::find($report_id);
        $assignment = $report->assignment;

        if (!$user->hasRole('admin')
            && !($user->hasRole('tutor')
                && $user->id == $assignment->tutor_id)
            && !($user->hasRole('professor')
                && $user->id == $assignment->professor_id))
        {
            return view('access_denied');
        }

        $data = array(
            'report' => $report
            );
        return view('report', $data);
    }

    /**
     * Display a form for editing the specified report.
     *
     * @param  int  $report_id
     * @return Response
     */
    public function edit_report($report_id)
    {
        $user = Auth::user();
        $report = Report::find($report_id);
        $assignment = $report->assignment;

        if (!$user->hasRole('admin')
            && !($user->hasRole('tutor')
               && $user->id == $assignment->tutor_id))
        {
            return view('access_denied');
        }

        $data = array(
            'report' => $report
            );
        return view('report_edit', $data);
    }

    /**
     * Save request info as new report in database.
     * and send an email of the report
     *
     * @param  Request  $request
     * @return Response
     */
    public function add_report(Request $request)
    {
        $user = Auth::user();
        if (!$user->hasRole('admin') && !$user->hasRole('tutor'))
        {
            return view('access_denied');
        }

        $report = new Report;
        $report->assignment_id = $request->assignment;
        $report->session_date = $request->session_date;
        $report->session_start = DateTime::createFromFormat('Y-m-d g:ia', $request->session_date . ' ' . $request->session_start);
        $report->session_end = DateTime::createFromFormat('Y-m-d g:ia', $request->session_date . ' ' . $request->session_end);
        $report->topic = $request->topic;
        $report->response = $request->response;
        $report->plans = $request->plans;
        $report->student_plans = $request->student_plans;
        $report->comments = $request->comments;
        $report->save();
        
        // send an email to the corresponding professor whenever a tutor submits a report
        
        Mail::send('emails.report_add_email', ['user' => $user, 'report' => $report], function ($message) use ($user, $report){
            $message->from('calvin.tutoring.management@gmail.com', 'Calvin Tutoring Reports');
            $message->to($report->assignment->professor->email)->subject($report->assignment->course->department . '-' . $report->assignment->course->number . ' report submitted');
        });

        return redirect('report/' . $report->id);
    }

    /**
     * Update the specified report with request info.
     *
     * @param  Request  $request
     * @return Response
     */
    public function update_report(Request $request)
    {
        $user = Auth::user();
        $report = Report::find($request->report_id);
        $assignment = $report->assignment;

        if (!$user->hasRole('admin')
            && !($user->hasRole('tutor')
               && $user->id == $assignment->tutor_id))
        {
            return view('access_denied');
        }

        $report = Report::find($request->report_id);
        $report->session_date = $request->session_date;
        $report->session_start = DateTime::createFromFormat('Y-m-d g:ia', $request->session_date . ' ' . $request->session_start);
        $report->session_end = DateTime::createFromFormat('Y-m-d g:ia', $request->session_date . ' ' . $request->session_end);
        $report->topic = $request->topic;
        $report->response = $request->response;
        $report->plans = $request->plans;
        $report->student_plans = $request->student_plans;
        $report->comments = $request->comments;
        $report->save();
        return redirect('/report/' . $request->report_id);
    }

    /**
     * Remove the specified report from storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function delete_report(Request $request)
    {
        if (!Auth::user()->hasRole('admin'))
        {
            return view('access_denied');
        }
    }
}
