@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Home</div>

                <div class="panel-body">
                    <p>If you see this home page, you are logged in. Here is your user info.</p>
                    <p>{{ Auth::user() }}</p>
                    <p>Roles: 
                    @foreach (Auth::user()->roles as $role )
                        {{ $role->name }} 
                    @endforeach
                    </p>
                    <p>Courses Taught: 
                    @foreach (Auth::user()->courses_taught as $course )
                        {{ $course->department }}{{ $course->number }} 
                    @endforeach
                    </p>
                    <p>Courses Tutored: 
                    @foreach (Auth::user()->courses_tutored as $course )
                        {{ $course->department }}{{ $course->number }} 
                    @endforeach
                    </p>
                    <p>Student Assignments: 
                    @foreach (Auth::user()->student_assignments as $assignment )
                        {{ $assignment->student->name }} 
                    @endforeach
                    </p>
                    <p>Tutor Assignments: 
                    @foreach (Auth::user()->tutor_assignments as $assignment )
                        {{ $assignment->student->name }} 
                    @endforeach
                    </p>
                    <p>Professor Assignments: 
                    @foreach (Auth::user()->professor_assignments as $assignment )
                        {{ $assignment->student->name }}  
                    @endforeach
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
