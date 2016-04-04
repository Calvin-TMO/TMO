@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Report</div>
                <div class="panel-body">
                    <form method="POST" action="/report/edit">
                        <div>Tutor Assignment:</div>
                        <input type="text" name="assignment" value="{{ $report->assignment_id }}" readonly>
                        <div>Submission Date:</div>
                        <input type="date" name="submit_date" format="yyyy-dd-mm" value="{{ $report->submit_date }}">
                        <div>Start Time:</div>
                        <input type="time" name="session_start" value="{{ $report->session_start }}">
                        <div>End Time:</div>
                        <input type="time" name="session_end" value="{{ $report->session_end }}">
                        <div>Topic:</div>
                        <input type="text" name="topic" value="{{ $report->topic }}">
                        <div>Response:</div>
                        <input type="text" name="response" value="{{ $report->response }}">
                        <div>Plans:</div>
                        <input type="text" name="plans" value="{{ $report->plans }}">
                        <div>Student Plans:</div>
                        <input type="text" name="student_plans" value="{{ $report->student_plans }}">
                        <div>Comments:</div>
                        <input type="text" name="comments" value="{{ $report->comments }}">
                        <br></br>
                        <button type="submit" class="ui primary button">Save</button>
                        <input type="hidden" name="report_id" value="{{ $report->id }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button type="button" class="ui button" onclick="location.href='/report/{{ $report->id }}'">Discard</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
