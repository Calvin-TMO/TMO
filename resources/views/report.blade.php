@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Report</div>

                <div class="panel-body">
                    <div>Tutor Assignment: {{ $report->assignment_id }}</div>
                    <div>Submission Date: {{ $report->submit_date }}</div>
                    <div>Start Time: {{ $report->session_start }}</div>
                    <div>End Time: {{ $report->session_end }}</div>
                    <div>Topic: {{ $report->topic }}</div>
                    <div>Reponse: {{ $report->response }}</div>
                    <div>Plans: {{ $report->plans }}</div>
                    <div>Student Plans: {{ $report->student_plans }}</div>
                    <div>Comments: {{ $report->comments }}</div>

                    <button type="button" class="ui button" onclick="location.href = '/report/edit/{{ $report->id }}';">Edit</button>
                    <button type="button" class="ui button" onclick="location.href = '/reports';">Back</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
