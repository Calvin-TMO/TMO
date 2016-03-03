@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Assignments</div>

                <div class="panel-body">
                    <ul class="list">
                        @foreach ($assignments as $assignment)
                            <li><a href="/assignment/{{ $assignment->id }}"><div>
                                Tutor: {{ $assignment->tutor->name }}<br>
                                Student: {{ $assignment->student->name }}<br>
                                Course: {{ $assignment->course->department }}-{{ $assignment->course->number }} {{ $assignment->course->description }}<br>
                                Professor: {{ $assignment->professor->name }}</div></a></li>
                        @endforeach
                    </ul>
                    <button type="button" onclick="location.href='/assignment/add'">New Assignment</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
