@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Assignments</div>

                <div class="panel-body">
                    <p> <a href="/user/{{ $assignment->tutor->id }}">Tutor: {{ $assignment->tutor->name }}</a><br>
                        <a href="/user/{{ $assignment->student->id }}">Student: {{ $assignment->student->name }}</a><br>
                        <a href="/course/{{ $assignment->course->id }}">Course: {{ $assignment->course->department }}-{{ $assignment->course->number }} {{ $assignment->course->description }}</a><br>
                        <a href="/user/{{ $assignment->professor->id }}">Professor: {{ $assignment->professor->name }}</a>
                    </p>
                    <button type="button" onclick="location.href = '/assignment/edit/{{ $assignment->id }}';">Edit</button>
                    <button type="button" onclick="location.href = '/assignments';">Back</button>
                </div>

                <div class="panel-body">
                    <p>List of reports:</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
