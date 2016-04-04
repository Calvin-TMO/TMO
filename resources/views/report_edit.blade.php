@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Report</div>
                <div class="panel-body">
                    <form method="POST">
                        <div>Tutor Assignment: {{ $report->assignment_id }}</div>
                        <div>Submission Date:</div>
                        <input type="date" name="submit_date" format="yyyy-dd-mm" value="{{ $report->submit_date }}">
                        <div>Start Time:</div>
                        <input type="time" name="session_start" value="{{ $report->session_start }}">
                        <div>End Time:</div>
                        <input type="time" name="session_end" value="{{ $report->session_end }}">
                        <div>What we worked on this session:</div>
                        <textarea class="ui fluid stretched" name="topic">{{ $report->topic }}</textarea>
                        <div>How the student is responding:</div>
                        <textarea class="ui fluid stretched" name="response">{{ $report->response }}</textarea>
                        <div>My plans to prepare for next session:</div>
                        <textarea class="ui fluid stretched" name="plans">{{ $report->plans }}</textarea>
                        <div>Student plans to prepare for next session:</div>
                        <textarea class="ui fluid stretched" name="student_plans">{{ $report->student_plans }}</textarea>
                        <div>Comments about how the session went:</div>
                        <textarea class="ui fluid stretched" name="comments">{{ $report->comments }}</textarea>
                        <br></br>
                        <button type="submit" class="ui primary button">Save</button>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button type="button" class="ui button" onclick="location.href='/report/{{ $report->id }}'">Discard</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
