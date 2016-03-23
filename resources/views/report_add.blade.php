@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">New Report</div>
                <div class="panel-body">
                    <form method="POST">
                        <div>Tutor Assignment: {{ $assignment_id }}</div>
                        <div>Submission Date:</div>
                        <input type="date" name="submit_date" format="yyyy-dd-mm">
                        <div>Start Time:</div>
                        <input type="time" name="session_start">
                        <div>End Time:</div>
                        <input type="time" name="session_end">
                        <div>Topic:</div>
                        <input type="text" name="topic">
                        <div>Response:</div>
                        <input type="text" name="response">
                        <div>Plans:</div>
                        <input type="text" name="plans">
                        <div>Student Plans:</div>
                        <input type="text" name="student_plans">
                        <div>Comments:</div>
                        <input type="text" name="comments">
                        <br></br>
                        <button type="submit" class="ui primary button">Save</button>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button type="button" class="ui button" onclick="location.href='/assignment/{{ $assignment_id }}'">Discard</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
