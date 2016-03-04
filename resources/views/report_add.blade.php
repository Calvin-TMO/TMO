@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Create New Report</div>
                <div class="panel-body">
                    <div>Tutor Assignment: {{ $report->assignment_id }}</div>
                    <div>Start Time:</div>
                    <input type="time">
                    <div>End Time:</div>
                    <input type="time">
                    <div>Topic:</div>
                    <input type="text">
                    <div>Response:</div>
                    <input type="text">
                    <div>Plans:</div>
                    <input type="text">
                    <div>Student Plans:</div>
                    <input type=text">
                    <div>Comments:</div>
                    <input type="text">
                    <br></br>
                    <button type="button" onclick="location.href='/report/{{ $report->id }}'">Back</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
