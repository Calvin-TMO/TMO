@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Report: {{ $report->id }}</div>
                <div class="panel-body">
                    <div>Tutor Assignment: {{ $report->assignment_id }}</div>
                    <div>Submission Date:</div>
                    <input type="date" format="yyyy-dd-mm" value="{{ $report->submit_date }}">
                    <div>Start Time:</div>
                    <input type="time" value="{{ $report->session_start }}">
                    <div>End Time:</div>
                    <input type="time" value="{{ $report->session_end }}">
                    <div>Topic:</div>
                    <input type="text" value="{{ $report->topic }}">
                    <div>Response:</div>
                    <input type="text" value="{{ $report->response }}">
                    <div>Plans:</div>
                    <input type="text" value="{{ $report->plans }}">
                    <div>Student Plans:</div>
                    <input type=text" value="{{ $report->student_plans }}">
                    <div>Comments:</div>
                    <input type="text" value="{{ $report->comments }}">
                    <br></br>
                    <button type="button" onclick="location.href='/report/{{ $report->id }}'">Back</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
