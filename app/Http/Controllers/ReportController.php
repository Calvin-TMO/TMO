<?php

namespace App\Http\Controllers;

use App\Report as Report;
use App\Http\Requests;
use Illuminate\Http\Request;
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
        $data = array(
            'reports' => Report::all()
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
        $data = array(
            'report' => Report::find($id)
            );
        return view('report', $data);
    }

    /**
     * Show the form for editing the specified user.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $data = array(
            'report' => Report::find($id)
            );
        return view('report_edit', $data);
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

}
