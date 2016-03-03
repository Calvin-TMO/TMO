@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Assignments</div>

                <div class="panel-body">
                    
                    @foreach ($assignments as $assignment)
                            <li>
                                <div> 
                                    Tutor: <a href="/assignments/{{ $assignment->tutor_id }}">{{ $assignment->tutor_id }}</a>
                                    Student: <a href="/assignments/{{ $assignment->student_id }}">{{ $assignment->student_id }}</a>
                                    Course: <a href="/assignments/{{ $assignment->course_id }}">{{ $assignment->course_id }}</a>
                                    Professor: <a href="/assignments/{{ $assignment->professor_id }}">{{ $assignment->professor_id }}</a>
                                </div>
                            </li>
                    @endforeach
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
